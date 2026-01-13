@extends('layouts.app')

@section('title', 'Cryptocurrency Payment - NOWPayments - NGO Australia')

@section('content')
<!-- Payment Processing Page -->
<section class="relative py-24 overflow-hidden bg-gradient-to-br from-primary/10 via-primary/5 to-background-light dark:from-primary/5 dark:via-primary/2 dark:to-background-dark">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-32 h-32 bg-orange-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-orange-500/30 rounded-full blur-2xl animate-bounce"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 backdrop-blur-md mb-6">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            <span class="text-sm font-medium text-primary">Cryptocurrency Payment Portal</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-black text-gray-900 dark:text-white mb-6 leading-tight">
            Support with <span class="text-primary">Cryptocurrency</span>
        </h1>

        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-8 leading-relaxed">
            Make your donation using Bitcoin, Ethereum, or 100+ other cryptocurrencies through our secure NOWPayments gateway.
        </p>

        <!-- Donation Amount Display -->
        <div class="inline-flex items-center gap-4 px-8 py-4 rounded-2xl bg-white/80 dark:bg-surface-dark/80 backdrop-blur-md border border-white/20 dark:border-white/10 shadow-lg">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-primary text-2xl">currency_bitcoin</span>
                <span class="text-sm text-gray-600 dark:text-gray-400">Donation Amount</span>
            </div>
            <div class="w-px h-8 bg-gray-300 dark:bg-gray-600"></div>
            <span class="text-3xl md:text-4xl font-black text-primary">A${{ number_format($donationData['amount'], 2) }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">AUD</span>
        </div>
    </div>
</section>

<!-- Crypto Payment Section -->
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Payment Overview Card -->
            <div class="bg-white dark:bg-surface-dark rounded-3xl shadow-xl border border-gray-200/50 dark:border-white/10 overflow-hidden mb-8">
                <!-- Header -->
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-bold">NOWPayments Cryptocurrency</h2>
                            <p class="text-orange-100 text-sm">Secure • Fast • Global • 100+ Cryptocurrencies</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-2xl">currency_bitcoin</span>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8">
                    <!-- Amount Summary -->
                    <div class="bg-gray-50 dark:bg-surface-dark/50 rounded-2xl p-6 mb-8 border border-gray-200/50 dark:border-white/5">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Requested Donation</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">A${{ number_format($donationData['amount'], 2) }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-green-600 dark:text-green-400 font-medium">Converted automatically</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Real-time exchange rates</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                            <div class="bg-white dark:bg-surface-dark rounded-xl p-4 border border-gray-200/50 dark:border-white/5">
                                <div class="text-lg font-bold text-orange-600 dark:text-orange-400 mb-1">₿ Bitcoin</div>
                                <div class="text-xs text-gray-600 dark:text-gray-400">Most popular</div>
                            </div>
                            <div class="bg-white dark:bg-surface-dark rounded-xl p-4 border border-gray-200/50 dark:border-white/5">
                                <div class="text-lg font-bold text-blue-600 dark:text-blue-400 mb-1">Ξ Ethereum</div>
                                <div class="text-xs text-gray-600 dark:text-gray-400">Fast transactions</div>
                            </div>
                            <div class="bg-white dark:bg-surface-dark rounded-xl p-4 border border-gray-200/50 dark:border-white/5">
                                <div class="text-lg font-bold text-green-600 dark:text-green-400 mb-1">$ USDT</div>
                                <div class="text-xs text-gray-600 dark:text-gray-400">Stable value</div>
                            </div>
                        </div>
                    </div>

                    <!-- How It Works -->
                    <div class="mb-8">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">How Cryptocurrency Donations Work</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="material-symbols-outlined text-orange-600 dark:text-orange-400">arrow_forward</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">1. Choose Crypto</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Select from 100+ cryptocurrencies on NOWPayments</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="material-symbols-outlined text-orange-600 dark:text-orange-400">account_balance_wallet</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">2. Send Payment</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Transfer crypto from your wallet to the generated address</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="material-symbols-outlined text-orange-600 dark:text-orange-400">check_circle</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">3. Confirmation</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Receive instant confirmation and tax receipt</p>
                            </div>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="bg-gradient-to-r from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 rounded-2xl p-6 mb-8 border border-orange-200/50 dark:border-orange-800/50">
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-orange-600 dark:text-orange-400">verified</span>
                            Why Choose Cryptocurrency?
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-sm mt-0.5">check</span>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Lower Fees</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Reduced transaction costs compared to traditional methods</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-sm mt-0.5">check</span>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Global Access</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">No geographic restrictions or currency conversions</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-sm mt-0.5">check</span>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Enhanced Privacy</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Optional anonymous donations with privacy features</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-green-600 dark:text-green-400 text-sm mt-0.5">check</span>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Instant Processing</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Fast confirmations with real-time status updates</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Process Button -->
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-6">
                        <div class="flex items-start gap-3 mb-6">
                            <input type="checkbox" id="crypto-terms-accept" required
                                   class="mt-1 w-4 h-4 text-primary border-gray-300 dark:border-gray-600 rounded focus:ring-primary">
                            <label for="crypto-terms-accept" class="text-sm text-gray-600 dark:text-gray-400">
                                I understand that cryptocurrency transactions are irreversible. I agree to the
                                <a href="{{ route('terms-of-service') }}" class="text-primary hover:underline">Terms of Service</a>
                                and acknowledge that NOWPayments processes my donation securely.
                            </label>
                        </div>

                        <!-- Process Button -->
                        <button type="button" onclick="processCryptoPayment()" id="crypto-submit-button"
                                class="w-full group relative flex items-center justify-center gap-3 overflow-hidden rounded-2xl bg-gradient-to-r from-orange-500 to-orange-600 px-8 py-4 text-white font-black text-lg shadow-[0_4px_30px_rgba(249,115,22,0.2)] transition-all hover:from-orange-600 hover:to-orange-700 hover:shadow-[0_4px_40px_rgba(249,115,22,0.4)] hover:-translate-y-0.5 active:translate-y-0 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0">
                            <span id="crypto-button-text">Continue to NOWPayments</span>
                            <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                            <div id="crypto-spinner" class="hidden absolute inset-0 flex items-center justify-center">
                                <div class="animate-spin rounded-full h-6 w-6 border-2 border-white border-t-transparent"></div>
                            </div>
                        </button>

                        <!-- Security Notice -->
                        <div class="text-center mt-4">
                            <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-sm">security</span>
                                Secured by NOWPayments • 100+ cryptocurrencies supported
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alternative Payment Options -->
            <div class="text-center">
                <p class="text-gray-600 dark:text-gray-400 mb-4">Prefer traditional payment methods?</p>
                <a href="{{ route('payment.select') }}" class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-gray-100 dark:bg-surface-dark/50 hover:bg-gray-200 dark:hover:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 hover:text-primary transition-all duration-300">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span class="font-medium">Choose Different Payment Method</span>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
function processCryptoPayment() {
    const submitButton = document.getElementById('crypto-submit-button');
    const buttonText = document.getElementById('crypto-button-text');
    const spinner = document.getElementById('crypto-spinner');
    const termsCheckbox = document.getElementById('crypto-terms-accept');

    // Check if terms are accepted
    if (!termsCheckbox.checked) {
        alert('Please accept the terms and conditions to continue.');
        return;
    }

    // Show loading state
    submitButton.disabled = true;
    buttonText.textContent = 'Setting up payment...';
    spinner.classList.remove('hidden');

    // Create form to submit to crypto processing
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '{{ route("payment.crypto.process") }}';

    // Add CSRF token
    const csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '_token';
    csrfInput.value = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    form.appendChild(csrfInput);

    // Submit form
    document.body.appendChild(form);
    form.submit();
}
</script>
@endsection
