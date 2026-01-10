<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Stripe\Stripe;
use Stripe\Charge;
use PaypalServerSdkLib\PaypalServerSdkClientBuilder;
use PaypalServerSdkLib\Environment;
use PaypalServerSdkLib\Authentication\ClientCredentialsAuthCredentialsBuilder;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:stripe,paypal,crypto'
        ]);

        $donationData = Session::get('donation_data');

        if (!$donationData) {
            return redirect()->route('donate')->with('error', 'Donation data not found. Please start over.');
        }

        $paymentMethod = $request->payment_method;

        try {
            switch ($paymentMethod) {
                case 'stripe':
                    return $this->processStripePayment($donationData);
                case 'paypal':
                    return $this->processPayPalPayment($donationData);
                case 'crypto':
                    return $this->processCryptoPayment($donationData);
                default:
                    throw new \Exception('Invalid payment method');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Payment processing failed: ' . $e->getMessage());
        }
    }

    private function processStripePayment($donationData)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $amount = $donationData['amount'] * 100; // Convert to cents

        $charge = Charge::create([
            'amount' => $amount,
            'currency' => 'aud',
            'source' => request('stripeToken'),
            'description' => 'Donation from ' . $donationData['first_name'] . ' ' . $donationData['last_name'],
        ]);

        $this->createDonation($donationData, 'stripe', $charge->id);

        return redirect()->route('donation.success');
    }

    private function processPayPalPayment($donationData)
    {
        $clientId = config('services.paypal.client_id') ?: 'test_client_id';
        $clientSecret = config('services.paypal.secret') ?: 'test_client_secret';
        $mode = config('services.paypal.mode', 'sandbox');

        $environment = ($mode === 'sandbox') ? Environment::SANDBOX : Environment::PRODUCTION;

        $credentials = ClientCredentialsAuthCredentialsBuilder::init($clientId, $clientSecret);

        $client = PaypalServerSdkClientBuilder::init()
            ->environment($environment)
            ->clientCredentialsAuthCredentials($credentials)
            ->build();

        $ordersController = $client->getOrdersController();

        $orderOptions = [
            'body' => [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    [
                        'reference_id' => uniqid(),
                        'amount' => [
                            'currency_code' => 'AUD',
                            'value' => number_format($donationData['amount'], 2, '.', '')
                        ],
                        'description' => 'Donation from ' . $donationData['first_name'] . ' ' . $donationData['last_name']
                    ]
                ],
                'application_context' => [
                    'cancel_url' => route('paypal.cancel'),
                    'return_url' => route('paypal.success')
                ]
            ]
        ];

        try {
            $apiResponse = $ordersController->createOrder($orderOptions);
            $order = $apiResponse->getResult();

            // Find approval URL
            $approvalUrl = null;
            foreach ($order->links as $link) {
                if ($link->rel === 'approve') {
                    $approvalUrl = $link->href;
                    break;
                }
            }

            if ($approvalUrl) {
                // Store order ID in session for later capture
                Session::put('paypal_order_id', $order->id);
                return redirect($approvalUrl);
            }

            throw new \Exception('Failed to find PayPal approval URL');
        } catch (\Exception $e) {
            throw new \Exception('PayPal payment creation failed: ' . $e->getMessage());
        }
    }

    public function paypalSuccess(Request $request)
    {
        $orderId = Session::get('paypal_order_id');
        $donationData = Session::get('donation_data');

        if (!$orderId || !$donationData) {
            return redirect()->route('donate')->with('error', 'PayPal session expired');
        }

        $clientId = config('services.paypal.client_id') ?: 'test_client_id';
        $clientSecret = config('services.paypal.secret') ?: 'test_client_secret';
        $mode = config('services.paypal.mode', 'sandbox');

        $environment = ($mode === 'sandbox') ? Environment::SANDBOX : Environment::PRODUCTION;

        $credentials = ClientCredentialsAuthCredentialsBuilder::init($clientId, $clientSecret);

        $client = PaypalServerSdkClientBuilder::init()
            ->environment($environment)
            ->clientCredentialsAuthCredentials($credentials)
            ->build();

        $ordersController = $client->getOrdersController();

        $captureOptions = [
            'id' => $orderId,
            'prefer' => 'return=minimal'
        ];

        try {
            $apiResponse = $ordersController->captureOrder($captureOptions);
            $order = $apiResponse->getResult();

            // Check if capture was successful
            if ($order->status === 'COMPLETED') {
                $this->createDonation($donationData, 'paypal', $orderId);
                Session::forget('paypal_order_id');
                return redirect()->route('donation.success');
            }

            throw new \Exception('PayPal payment capture failed - status: ' . $order->status);
        } catch (\Exception $e) {
            return redirect()->route('donate')->with('error', 'PayPal payment failed: ' . $e->getMessage());
        }
    }

    private function processCryptoPayment($donationData)
    {
        // Simulate crypto payment processing
        sleep(2); // Simulate processing time

        $transactionId = 'CRYPTO_' . time() . '_' . rand(1000, 9999);

        $this->createDonation($donationData, 'crypto', $transactionId);

        return redirect()->route('donation.success');
    }

    private function createDonation($donationData, $paymentMethod, $transactionId)
    {
        $donation = Donation::create([
            'first_name' => $donationData['first_name'],
            'last_name' => $donationData['last_name'],
            'email' => $donationData['email'],
            'amount' => $donationData['amount'],
            'frequency' => $donationData['frequency'],
            'payment_method' => $paymentMethod,
            'status' => 'completed',
            'transaction_id' => $transactionId,
            'processed_at' => now(),
        ]);

        Session::put('completed_donation', $donation);

        // Send confirmation emails
        $this->sendConfirmationEmails($donation);

        // Clear session data
        Session::forget('donation_data');
    }

    private function sendConfirmationEmails(Donation $donation)
    {
        // Send email to donor
        Mail::to($donation->email)->send(new \App\Mail\DonationConfirmation($donation));

        // Send email to admin
        Mail::to(config('mail.admin_email', 'admin@example.com'))->send(new \App\Mail\AdminDonationNotification($donation));
    }
}
