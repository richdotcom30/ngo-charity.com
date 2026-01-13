@extends('layouts.app')

@section('title', 'Complete Payment - Flutterwave - NGO Australia')

@section('content')
<!-- Payment Processing Page -->
<section class="relative py-24 overflow-hidden bg-gradient-to-br from-primary/10 via-primary/5 to-background-light dark:from-primary/5 dark:via-primary/2 dark:to-background-dark">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-32 h-32 bg-purple-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-purple-500/30 rounded-full blur-2xl animate-bounce"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 backdrop-blur-md mb-6">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            <span class="text-sm font-medium text-primary">Secure Payment Processing</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-black text-gray-900 dark:text-white mb-6 leading-tight">
            Complete Your <span class="text-primary">Secure Payment</span>
        </h1>

        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-8 leading-relaxed">
            Your donation of A${{ number_format($donationData['amount'], 2) }} AUD is processed securely through Flutterwave's advanced payment gateway.
        </p>

        <!-- Donation Amount Display -->
        <div class="inline-flex items-center gap-4 px-8 py-4 rounded-2xl bg-white/80 dark:bg-surface-dark/80 backdrop-blur-md border border-white/20 dark:border-white/10 shadow-lg">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-primary text-2xl">account_balance_wallet</span>
                <span class="text-sm text-gray-600 dark:text-gray-400">Donation Amount</span>
            </div>
            <div class="w-px h-8 bg-gray-300 dark:bg-gray-600"></div>
            <span class="text-3xl md:text-4xl font-black text-primary">A${{ number_format($donationData['amount'], 2) }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">AUD</span>
        </div>
    </div>
</section>

<!-- Flutterwave Payment Section -->
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Payment Overview Card -->
            <div class="bg-white dark:bg-surface-dark rounded-3xl shadow-xl border border-gray-200/50 dark:border-white/10 overflow-hidden mb-8">
                <!-- Header -->
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-bold">Flutterwave Payment Gateway</h2>
                            <p class="text-purple-100 text-sm">Secure • Global • Multiple Payment Methods • Instant Processing</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-2xl">account_balance_wallet</span>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8">
                    <!-- Amount Summary -->
                    <div class="bg-gray-50 dark:bg-surface-dark/50 rounded-2xl p-6 mb-8 border border-gray-200/50 dark:border-white/5">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Donation Amount</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">A${{ number_format($donationData['amount'], 2) }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-green-600 dark:text-green-400 font-medium">Secure processing</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Multiple payment options</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                            <div class="bg-white dark:bg-surface-dark rounded-xl p-4 border border-gray-200/50 dark:border-white/5">
                                <div class="text-lg font-bold text-purple-600 dark:text-purple-400 mb-1">💳 Cards</div>
                                <div class="text-xs text-gray-600 dark:text-gray-400">Visa, Mastercard, Amex</div>
                            </div>
                            <div class="bg-white dark:bg-surface-dark rounded-xl p-4 border border-gray-200/50 dark:border-white/5">
                                <div class="text-lg font-bold text-purple-600 dark:text-purple-400 mb-1">🏦 Bank Transfer</div>
                                <div class="text-xs text-gray-600 dark:text-gray-400">Direct bank payments</div>
                            </div>
                            <div class="bg-white dark:bg-surface-dark rounded-xl p-4 border border-gray-200/50 dark:border-white/5">
                                <div class="text-lg font-bold text-purple-600 dark:text-purple-400 mb-1">📱 Mobile Money</div>
                                <div class="text-xs text-gray-600 dark:text-gray-400">Airtel, MTN, Vodafone</div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Methods Info -->
                    <div class="mb-8">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Choose Your Payment Method</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="border border-gray-200 dark:border-gray-700 rounded-xl p-4">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="material-symbols-outlined text-purple-600 dark:text-purple-400">credit_card</span>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Credit/Debit Cards</h4>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Pay instantly with Visa, Mastercard, American Express, or other major cards.</p>
                                <div class="flex gap-2">
                                    <div class="w-8 h-5 bg-blue-600 rounded text-white text-xs flex items-center justify-center font-bold">V</div>
                                    <div class="w-8 h-5 bg-red-600 rounded text-white text-xs flex items-center justify-center font-bold">MC</div>
                                    <div class="w-8 h-5 bg-blue-800 rounded text-white text-xs flex items-center justify-center font-bold">AE</div>
                                </div>
                            </div>

                            <div class="border border-gray-200 dark:border-gray-700 rounded-xl p-4">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="material-symbols-outlined text-purple-600 dark:text-purple-400">account_balance</span>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Bank Transfer</h4>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Secure direct bank transfers with real-time confirmation.</p>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Available for major Australian banks</div>
                            </div>

                            <div class="border border-gray-200 dark:border-gray-700 rounded-xl p-4">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="material-symbols-outlined text-purple-600 dark:text-purple-400">phone_android</span>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Mobile Money</h4>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Pay using Airtel Money, MTN Mobile Money, or Vodafone Cash.</p>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Instant mobile payments</div>
                            </div>

                            <div class="border border-gray-200 dark:border-gray-700 rounded-xl p-4">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="material-symbols-outlined text-purple-600 dark:text-purple-400">language</span>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">International Options</h4>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Support for international cards and payment methods worldwide.</p>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Global payment acceptance</div>
                            </div>
                        </div>
                    </div>

                    <!-- Security & Features -->
                    <div class="bg-gradient-to-r from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-2xl p-6 mb-8 border border-purple-200/50 dark:border-purple-800/50">
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-purple-600 dark:text-purple-400">verified</span>
                            Why Choose Flutterwave?
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-sm mt-0.5">check</span>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Bank-Level Security</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">PCI DSS compliant with advanced encryption</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-sm mt-0.5">check</span>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Multiple Payment Methods</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Cards, bank transfers, mobile money, and more</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-sm mt-0.5">check</span>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Global Reach</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Accept payments from anywhere in the world</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-sm mt-0.5">check</span>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Real-Time Processing</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Instant confirmations and notifications</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Payment Button -->
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-6">
                        <div class="flex items-start gap-3 mb-6">
                            <input type="checkbox" id="flutterwave-terms-accept" required
                                   class="mt-1 w-4 h-4 text-primary border-gray-300 dark:border-gray-600 rounded focus:ring-primary">
                            <label for="flutterwave-terms-accept" class="text-sm text-gray-600 dark:text-gray-400">
                                I agree to the <a href="{{ route('terms-of-service') }}" class="text-primary hover:underline">Terms of Service</a>
                                and <a href="{{ route('privacy-policy') }}" class="text-primary hover:underline">Privacy Policy</a>.
                                My payment will be processed securely by Flutterwave.
                            </label>
                        </div>

                        <!-- Payment Button -->
                        <button type="button" onclick="initiateFlutterwavePayment()" id="flutterwave-submit-button"
                                class="w-full group relative flex items-center justify-center gap-3 overflow-hidden rounded-2xl bg-gradient-to-r from-purple-500 to-purple-600 px-8 py-4 text-white font-black text-lg shadow-[0_4px_30px_rgba(168,85,247,0.2)] transition-all hover:from-purple-600 hover:to-purple-700 hover:shadow-[0_4px_40px_rgba(168,85,247,0.4)] hover:-translate-y-0.5 active:translate-y-0 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0">
                            <span id="flutterwave-button-text">Proceed to Payment</span>
                            <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                            <div id="flutterwave-spinner" class="hidden absolute inset-0 flex items-center justify-center">
                                <div class="animate-spin rounded-full h-6 w-6 border-2 border-white border-t-transparent"></div>
                            </div>
                        </button>

                        <!-- Security Notice -->
                        <div class="text-center mt-4">
                            <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">security</span>
                                Secured by Flutterwave • PCI DSS Compliant
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alternative Payment Options -->
            <div class="text-center">
                <p class="text-gray-600 dark:text-gray-400 mb-4">Prefer other payment methods?</p>
                <a href="{{ route('payment.select') }}" class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-gray-100 dark:bg-surface-dark/50 hover:bg-gray-200 dark:hover:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 hover:text-primary transition-all duration-300">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span class="font-medium">Choose Different Payment Method</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Flutterwave JavaScript SDK -->
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script>
function initiateFlutterwavePayment() {
    const submitButton = document.getElementById('flutterwave-submit-button');
    const buttonText = document.getElementById('flutterwave-button-text');
    const spinner = document.getElementById('flutterwave-spinner');
    const termsCheckbox = document.getElementById('flutterwave-terms-accept');

    // Check if terms are accepted
    if (!termsCheckbox.checked) {
        alert('Please accept the terms and conditions to continue.');
        return;
    }

    // Show loading state
    submitButton.disabled = true;
    buttonText.textContent = 'Initializing payment...';
    spinner.classList.remove('hidden');

    // Flutterwave configuration
    const config = {
        public_key: '{{ config("services.flutterwave.public_key", "FLWPUBK_TEST-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-X") }}',
        tx_ref: 'DONATION_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9),
        amount: {{ $donationData['amount'] }},
        currency: 'AUD',
        payment_options: 'card,banktransfer,mobilemoney',
        customer: {
            email: '{{ $donationData['email'] }}',
            phone_number: '',
            name: '{{ $donationData['first_name'] }} {{ $donationData['last_name'] }}',
        },
        customizations: {
            title: 'NGO Australia Donation',
            description: 'Support our community programs',
            logo: '{{ asset("asset/images/logo-ngo.png") }}',
        },
        callback: function(data) {
            // Payment successful callback
            console.log('Payment successful:', data);

            // Send verification to server
            verifyFlutterwavePayment(data);
        },
        onclose: function() {
            // Payment modal closed
            submitButton.disabled = false;
            buttonText.textContent = 'Proceed to Payment';
            spinner.classList.add('hidden');
            console.log('Payment modal closed');
        }
    };

    // Open Flutterwave checkout
    window.FlutterwaveCheckout(config);
}

function verifyFlutterwavePayment(data) {
    // Send payment verification to server
    fetch('/payment/flutterwave/verify', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            transaction_id: data.transaction_id,
            tx_ref: data.tx_ref,
            status: data.status,
            amount: data.amount,
            currency: data.currency,
        })
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            // Redirect to success page
            window.location.href = result.redirect_url || '{{ route("donation.success") }}';
        } else {
            alert('Payment verification failed. Please contact support.');
            // Reset button
            document.getElementById('flutterwave-submit-button').disabled = false;
            document.getElementById('flutterwave-button-text').textContent = 'Proceed to Payment';
            document.getElementById('flutterwave-spinner').classList.add('hidden');
        }
    })
    .catch(error => {
        console.error('Verification error:', error);
        alert('Payment verification failed. Please try again.');
        // Reset button
        document.getElementById('flutterwave-submit-button').disabled = false;
        document.getElementById('flutterwave-button-text').textContent = 'Proceed to Payment';
        document.getElementById('flutterwave-spinner').classList.add('hidden');
    });
}
</script>
@endsection
