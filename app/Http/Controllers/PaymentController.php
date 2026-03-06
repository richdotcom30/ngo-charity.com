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
    public function showStripePayment()
    {
        $donationData = Session::get('donation_data');

        if (!$donationData) {
            return redirect()->route('donate')->with('error', 'Donation data not found. Please start over.');
        }

        return view('payment.stripe', compact('donationData'));
    }

    public function showCryptoPayment()
    {
        $donationData = Session::get('donation_data');

        if (!$donationData) {
            return redirect()->route('donate')->with('error', 'Donation data not found. Please start over.');
        }

        return view('payment.crypto', compact('donationData'));
    }

    public function showFlutterwavePayment()
    {
        $donationData = Session::get('donation_data');

        if (!$donationData) {
            return redirect()->route('donate')->with('error', 'Donation data not found. Please start over.');
        }

        return view('payment.flutterwave', compact('donationData'));
    }

    public function verifyFlutterwavePayment(Request $request)
    {
        $request->validate([
            'transaction_id' => 'required|string',
            'tx_ref' => 'required|string',
            'status' => 'required|string',
            'amount' => 'required|numeric',
            'currency' => 'required|string',
        ]);

        $donationData = Session::get('donation_data');

        if (!$donationData) {
            return response()->json(['success' => false, 'message' => 'Donation data not found'], 400);
        }

        // Validate amount hasn't been tampered with
        $expectedAmount = $donationData['amount'] ?? 0;
        if (!is_numeric($expectedAmount) || $expectedAmount < 1 || $expectedAmount > 100000) {
            return response()->json(['success' => false, 'message' => 'Invalid donation amount'], 400);
        }

        try {
            // Verify payment with Flutterwave API
            $secretKey = config('services.flutterwave.secret');
            
            if (empty($secretKey) || str_contains($secretKey, 'your_flutterwave')) {
                throw new \Exception('Flutterwave payment gateway is not properly configured');
            }

            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$request->transaction_id}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer {$secretKey}",
                    "Content-Type: application/json",
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
                throw new \Exception('Flutterwave API connection failed: ' . $err);
            }

            $result = json_decode($response, true);

            if (!isset($result['status']) || $result['status'] !== 'success') {
                throw new \Exception('Payment verification failed: ' . ($result['message'] ?? 'Unknown error'));
            }

            $transaction = $result['data'];

            // Check if payment was successful
            if ($transaction['status'] === 'successful' && $transaction['amount'] >= $donationData['amount']) {
                // Create donation record
                $this->createDonation($donationData, 'flutterwave', $transaction['id']);

                // Send admin notification
                $this->sendFlutterwavePaymentNotification($donationData, $transaction);

                return response()->json([
                    'success' => true,
                    'redirect_url' => route('donation.success')
                ]);
            } else {
                throw new \Exception('Payment not completed successfully');
            }

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Flutterwave Payment Verification Error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Payment verification failed. Please contact support.'], 500);
        }
    }

    private function sendFlutterwavePaymentNotification($donationData, $transaction)
    {
        // Create detailed notification for admin about Flutterwave payment
        $details = [
            'donor_name' => $donationData['first_name'] . ' ' . $donationData['last_name'],
            'donor_email' => $donationData['email'],
            'amount' => $donationData['amount'],
            'currency' => 'AUD',
            'payment_method' => 'Flutterwave',
            'transaction_id' => $transaction['id'],
            'flutterwave_ref' => $transaction['flw_ref'] ?? 'N/A',
            'payment_type' => $transaction['payment_type'] ?? 'N/A',
            'card_type' => $transaction['card']['type'] ?? 'N/A',
        ];

        // Send to admin email
        Mail::raw(
            "💳 FLUTTERWAVE PAYMENT RECEIVED!\n\n" .
            "A payment has been successfully processed through Flutterwave.\n\n" .
            "Donor Details:\n" .
            "- Name: {$details['donor_name']}\n" .
            "- Email: {$details['donor_email']}\n\n" .
            "Payment Details:\n" .
            "- Amount: A\${$details['amount']}\n" .
            "- Payment Method: {$details['payment_method']}\n" .
            "- Transaction ID: {$details['transaction_id']}\n" .
            "- Flutterwave Ref: {$details['flutterwave_ref']}\n" .
            "- Payment Type: {$details['payment_type']}\n" .
            "- Card Type: {$details['card_type']}\n\n" .
            "Please verify the transaction on Flutterwave dashboard.\n\n" .
            "NGO Australia Admin System",
            function ($message) use ($details) {
                $message->to(config('mail.admin_email', 'admin@example.com'))
                        ->subject('💳 Flutterwave Payment Received - A$' . $details['amount']);
            }
        );
    }

    public function processStripePayment(Request $request)
    {
        $request->validate([
            'payment_method_id' => 'required|string',
            'cardholder_name' => 'required|string|max:255',
        ]);

        $donationData = Session::get('donation_data');

        if (!$donationData) {
            return response()->json(['message' => 'Donation data not found'], 400);
        }

        // Validate amount hasn't been tampered with
        $amount = $donationData['amount'] ?? 0;
        if (!is_numeric($amount) || $amount < 1 || $amount > 100000) {
            return response()->json(['message' => 'Invalid donation amount'], 400);
        }

        try {
            $stripeSecret = config('services.stripe.secret');
            
            if (empty($stripeSecret) || str_contains($stripeSecret, 'your_stripe')) {
                return response()->json(['message' => 'Payment gateway is not configured. Please contact support.'], 500);
            }
            
            Stripe::setApiKey($stripeSecret);

            // Create payment intent
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $donationData['amount'] * 100, // Convert to cents
                'currency' => 'aud',
                'payment_method' => $request->payment_method_id,
                'confirmation_method' => 'manual',
                'confirm' => true,
                'description' => 'Donation from ' . $donationData['first_name'] . ' ' . $donationData['last_name'],
                'metadata' => [
                    'donor_name' => $donationData['first_name'] . ' ' . $donationData['last_name'],
                    'donor_email' => $donationData['email'],
                    'frequency' => $donationData['frequency'] ?? 'once',
                ],
                'receipt_email' => $donationData['email'],
            ]);

            if ($paymentIntent->status === 'succeeded') {
                // Payment successful
                $this->createDonation($donationData, 'stripe', $paymentIntent->id);
                return response()->json([
                    'success' => true,
                    'redirect_url' => route('donation.success')
                ]);
            } else {
                throw new \Exception('Payment failed with status: ' . $paymentIntent->status);
            }

        } catch (\Stripe\Exception\CardException $e) {
            // Card was declined - safe to show this message to user
            return response()->json(['message' => $e->getError()->message], 400);
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            // Invalid request - log details but don't expose to user
            \Illuminate\Support\Facades\Log::error('Stripe Invalid Request: ' . $e->getMessage());
            return response()->json(['message' => 'Payment configuration error. Please contact support.'], 500);
        } catch (\Exception $e) {
            // Generic error - log details but show generic message to user
            \Illuminate\Support\Facades\Log::error('Stripe Payment Error: ' . $e->getMessage());
            return response()->json(['message' => 'Payment processing failed. Please try again.'], 500);
        }
    }

    public function process(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:stripe,crypto,flutterwave'
        ]);

        $donationData = Session::get('donation_data');

        if (!$donationData) {
            return redirect()->route('donate')->with('error', 'Donation data not found. Please start over.');
        }

        // Validate amount hasn't been tampered with
        $amount = $donationData['amount'] ?? 0;
        if (!is_numeric($amount) || $amount < 1 || $amount > 100000) {
            return redirect()->route('donate')->with('error', 'Invalid donation amount.');
        }

        $paymentMethod = $request->payment_method;

        // Redirect to appropriate payment page
        switch ($paymentMethod) {
            case 'stripe':
                return redirect()->route('payment.stripe');
            case 'crypto':
                return redirect()->route('payment.crypto');
            case 'flutterwave':
                return redirect()->route('payment.flutterwave');
            default:
                return redirect()->route('donate')->with('error', 'Invalid payment method selected.');
        }
    }





    private function processCryptoPayment($donationData)
    {
        // Validate amount hasn't been tampered with
        $amount = $donationData['amount'] ?? 0;
        if (!is_numeric($amount) || $amount < 1 || $amount > 100000) {
            throw new \Exception('Invalid donation amount');
        }

        // NOWPayments API integration
        $apiKey = config('services.nowpayments.api_key');
        
        if (empty($apiKey) || $apiKey === 'your_nowpayments_api_key_here') {
            throw new \Exception('Cryptocurrency payments are not configured. Please contact support.');
        }

        // Prepare payment data
        $paymentData = [
            'price_amount' => $amount,
            'price_currency' => 'aud',
            'pay_currency' => '', // Let user choose on NOWPayments page
            'order_id' => 'DONATION_' . time() . '_' . random_int(1000, 9999),
            'order_description' => 'Donation from ' . $donationData['first_name'] . ' ' . $donationData['last_name'],
            'ipn_callback_url' => route('nowpayments.ipn'),
            'success_url' => route('donation.success'),
            'cancel_url' => route('donate'),
            'buyer_email' => $donationData['email'],
        ];

        // Store donation data in session for later use
        Session::put('nowpayments_donation_data', $donationData);

        try {
            // Create payment via NOWPayments API
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.nowpayments.io/v1/payment');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paymentData));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'x-api-key: ' . $apiKey,
                'Content-Type: application/json'
            ]);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if (curl_errno($ch)) {
                throw new \Exception('NOWPayments API connection failed: ' . curl_error($ch));
            }

            curl_close($ch);

            if ($httpCode !== 201) {
                throw new \Exception('NOWPayments API error: HTTP ' . $httpCode . ' - ' . $response);
            }

            $result = json_decode($response, true);

            if (!isset($result['payment_id'])) {
                throw new \Exception('Invalid response from NOWPayments API');
            }

            // Store payment details in session
            Session::put('nowpayments_payment_id', $result['payment_id']);
            Session::put('nowpayments_order_id', $paymentData['order_id']);

            // Redirect to NOWPayments hosted page
            return redirect($result['payment_url'] ?? 'https://nowpayments.io/payment/' . $result['payment_id']);

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('NOWPayments Error: ' . $e->getMessage());
            throw new \Exception('Cryptocurrency payment setup failed. Please try again or contact support.');
        }
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

    public function handleNowPaymentsIPN(Request $request)
    {
        $ipnSecret = config('services.nowpayments.ipn_secret');

        // Check if IPN secret is configured
        if (empty($ipnSecret) || $ipnSecret === 'your_nowpayments_ipn_secret_here') {
            \Illuminate\Support\Facades\Log::error('NOWPayments IPN secret is not configured');
            return response('IPN not configured', 500);
        }

        // Verify IPN signature
        $receivedSignature = $request->header('x-nowpayments-sig');
        if (empty($receivedSignature)) {
            \Illuminate\Support\Facades\Log::warning('Missing NOWPayments IPN signature');
            return response('Missing signature', 400);
        }

        $expectedSignature = hash_hmac('sha512', $request->getContent(), $ipnSecret);

        if (!hash_equals($expectedSignature, $receivedSignature)) {
            \Illuminate\Support\Facades\Log::warning('Invalid NOWPayments IPN signature');
            return response('Invalid signature', 400);
        }

        $data = $request->all();

        // Validate required fields
        if (!isset($data['payment_status'], $data['payment_id'], $data['order_id'], $data['price_amount'])) {
            \Illuminate\Support\Facades\Log::warning('Missing required fields in NOWPayments IPN');
            return response('Missing required fields', 400);
        }

        // Check if payment was actually paid
        if ($data['payment_status'] === 'finished' || $data['payment_status'] === 'confirmed') {
            $paymentId = $data['payment_id'];
            $orderId = $data['order_id'];
            $amount = $data['price_amount'];
            
            // Validate amount
            if (!is_numeric($amount) || $amount < 1 || $amount > 100000) {
                \Illuminate\Support\Facades\Log::warning('Invalid amount in NOWPayments IPN: ' . $amount);
                return response('Invalid amount', 400);
            }
            
            $currency = $data['price_currency'] ?? 'aud';
            $payAmount = $data['pay_amount'] ?? 0;
            $payCurrency = $data['pay_currency'] ?? 'unknown';

            // Get donation data from session or database
            $donationData = Session::get('nowpayments_donation_data');

            if (!$donationData) {
                // Try to find by order_id if session expired
                // For now, create a basic donation record
                $donationData = [
                    'first_name' => 'Crypto',
                    'last_name' => 'Donor',
                    'email' => 'crypto@donor.com',
                    'amount' => $amount,
                    'frequency' => 'once'
                ];
            }

            // Create donation record
            $donation = Donation::create([
                'first_name' => $donationData['first_name'],
                'last_name' => $donationData['last_name'],
                'email' => $donationData['email'],
                'amount' => $amount,
                'frequency' => $donationData['frequency'] ?? 'once',
                'payment_method' => 'nowpayments',
                'status' => 'completed',
                'transaction_id' => $paymentId,
                'processed_at' => now(),
                'payment_details' => json_encode([
                    'order_id' => $orderId,
                    'pay_amount' => $payAmount,
                    'pay_currency' => $payCurrency,
                    'price_currency' => $currency,
                    'payment_status' => $data['payment_status']
                ])
            ]);

            // Send confirmation emails
            $this->sendConfirmationEmails($donation);

            // Send admin notification with crypto payment details
            $this->sendCryptoPaymentNotification($donation, $data);

            // Clear session data
            Session::forget(['nowpayments_donation_data', 'nowpayments_payment_id', 'nowpayments_order_id']);
        }

        return response('OK', 200);
    }

    private function sendCryptoPaymentNotification(Donation $donation, $paymentData)
    {
        // Create detailed notification for admin about crypto payment
        $details = [
            'donor_name' => $donation->first_name . ' ' . $donation->last_name,
            'donor_email' => $donation->email,
            'amount' => $donation->amount,
            'currency' => 'AUD',
            'payment_method' => 'NOWPayments Crypto',
            'transaction_id' => $donation->transaction_id,
            'paid_amount' => $paymentData['pay_amount'] ?? 'N/A',
            'paid_currency' => $paymentData['pay_currency'] ?? 'N/A',
            'payment_status' => $paymentData['payment_status'] ?? 'N/A',
            'order_id' => $paymentData['order_id'] ?? 'N/A',
        ];

        // Send to admin email
        Mail::raw(
            "🪙 CRYPTO PAYMENT RECEIVED!\n\n" .
            "A cryptocurrency donation has been successfully processed.\n\n" .
            "Donor Details:\n" .
            "- Name: {$details['donor_name']}\n" .
            "- Email: {$details['donor_email']}\n\n" .
            "Payment Details:\n" .
            "- Requested Amount: A\${$details['amount']}\n" .
            "- Paid Amount: {$details['paid_amount']} {$details['paid_currency']}\n" .
            "- Payment Method: {$details['payment_method']}\n" .
            "- Transaction ID: {$details['transaction_id']}\n" .
            "- Order ID: {$details['order_id']}\n" .
            "- Status: {$details['payment_status']}\n\n" .
            "Please verify the transaction on NOWPayments dashboard.\n\n" .
            "NGO Australia Admin System",
            function ($message) use ($details) {
                $message->to(config('mail.admin_email', 'admin@example.com'))
                        ->subject('🪙 Crypto Payment Received - A$' . $details['amount']);
            }
        );
    }

    private function sendConfirmationEmails(Donation $donation)
    {
        // Send email to donor
        Mail::to($donation->email)->send(new \App\Mail\DonationConfirmation($donation));

        // Send email to admin
        Mail::to(config('mail.admin_email', 'admin@example.com'))->send(new \App\Mail\AdminDonationNotification($donation));
    }
}
