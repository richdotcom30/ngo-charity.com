@extends('layouts.app')

@section('title', 'Select Payment Method - NGO Australia')

@section('content')
<!-- Hero Section -->
<section class="relative py-24 overflow-hidden bg-gradient-to-br from-primary/10 via-primary/5 to-background-light dark:from-primary/5 dark:via-primary/2 dark:to-background-dark">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-32 h-32 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-accent-brown/20 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-primary/30 rounded-full blur-2xl animate-bounce"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 backdrop-blur-md mb-6">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            <span class="text-sm font-medium text-primary">Secure Payment Portal</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-black text-gray-900 dark:text-white mb-6 leading-tight">
            Complete Your <span class="text-primary">Generous Donation</span>
        </h1>

        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-8 leading-relaxed">
            Choose from our secure payment options to support communities across Australia. Your contribution makes a real difference.
        </p>

        <!-- Donation Amount Display -->
        <div class="inline-flex items-center gap-4 px-8 py-4 rounded-2xl bg-white/80 dark:bg-surface-dark/80 backdrop-blur-md border border-white/20 dark:border-white/10 shadow-lg">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-primary text-2xl">volunteer_activism</span>
                <span class="text-sm text-gray-600 dark:text-gray-400">Donation Amount</span>
            </div>
            <div class="w-px h-8 bg-gray-300 dark:bg-gray-600"></div>
            <span class="text-3xl md:text-4xl font-black text-primary">A${{ number_format($donationData['amount'], 2) }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">AUD</span>
        </div>
    </div>
</section>

<!-- Payment Methods Section -->
<section class="py-20 bg-background-light dark:bg-background-dark relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(76, 223, 32, 0.1) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(141, 110, 99, 0.1) 0%, transparent 50%);"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Donor Information Card -->
            <div class="bg-white dark:bg-surface-dark rounded-3xl p-8 mb-12 shadow-xl border border-gray-200/50 dark:border-white/10 backdrop-blur-sm">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">person</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Donor Information</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Your donation details</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-medium">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        Verified
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="flex items-center gap-4 p-4 rounded-2xl bg-gray-50 dark:bg-surface-dark/50 border border-gray-200/50 dark:border-white/5">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">person</span>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Name</p>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $donationData['first_name'] }} {{ $donationData['last_name'] }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 rounded-2xl bg-gray-50 dark:bg-surface-dark/50 border border-gray-200/50 dark:border-white/5">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">email</span>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Email</p>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $donationData['email'] }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 rounded-2xl bg-gradient-to-r from-primary/10 to-primary/5 border border-primary/20">
                        <div class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">attach_money</span>
                        </div>
                        <div>
                            <p class="text-xs text-primary/70 uppercase tracking-wide">Amount</p>
                            <p class="text-lg font-black text-primary">A${{ number_format($donationData['amount'], 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Stripe Payment -->
                <div class="payment-card group bg-white dark:bg-surface-dark rounded-3xl p-8 shadow-lg border border-gray-200/50 dark:border-white/10 hover:border-primary/50 hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500 cursor-pointer transform hover:-translate-y-2" onclick="selectPayment('stripe')">
                    <div class="text-center mb-6">
                        <div class="relative w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform shadow-lg">
                            <span class="material-symbols-outlined text-white text-3xl">credit_card</span>
                            <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-xs">check</span>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary transition-colors">Credit/Debit Card</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Secure payment processing powered by Stripe with advanced encryption</p>

                        <!-- Card Logos -->
                        <div class="flex justify-center gap-3 mb-6">
                            <div class="w-10 h-6 bg-gradient-to-r from-blue-600 to-blue-700 rounded text-white text-xs flex items-center justify-center font-bold">V</div>
                            <div class="w-10 h-6 bg-gradient-to-r from-red-600 to-red-700 rounded text-white text-xs flex items-center justify-center font-bold">MC</div>
                            <div class="w-10 h-6 bg-gradient-to-r from-blue-800 to-blue-900 rounded text-white text-xs flex items-center justify-center font-bold">AX</div>
                        </div>

                        <div class="flex flex-col gap-2 text-xs text-gray-500 dark:text-gray-400">
                            <div class="flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-green-500 text-sm">security</span>
                                <span>256-bit SSL encryption</span>
                            </div>
                            <div class="flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-blue-500 text-sm">bolt</span>
                                <span>Instant processing</span>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Crypto Payment -->
                <div class="payment-card group bg-white dark:bg-surface-dark rounded-3xl p-8 shadow-lg border border-gray-200/50 dark:border-white/10 hover:border-primary/50 hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500 cursor-pointer transform hover:-translate-y-2" onclick="selectPayment('crypto')">
                    <div class="text-center mb-6">
                        <div class="relative w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform shadow-lg">
                            <span class="material-symbols-outlined text-white text-3xl">currency_bitcoin</span>
                            <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-xs">check</span>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-primary transition-colors">NOWPayments</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">Secure cryptocurrency payments powered by NOWPayments</p>

                        <!-- Crypto Tokens -->
                        <div class="flex justify-center gap-2 mb-6">
                            <div class="w-8 h-8 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center text-white text-xs font-bold shadow-lg">₿</div>
                            <div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white text-xs font-bold shadow-lg">Ξ</div>
                            <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center text-white text-xs font-bold shadow-lg">T</div>
                        </div>

                        <div class="flex flex-col gap-2 text-xs text-gray-500 dark:text-gray-400">
                            <div class="flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-orange-500 text-sm">flash_on</span>
                                <span>Near-instant transactions</span>
                            </div>
                            <div class="flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-blue-500 text-sm">privacy_tip</span>
                                <span>Enhanced privacy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security & Trust Badges -->
            <div class="bg-white/50 dark:bg-surface-dark/50 rounded-2xl p-8 backdrop-blur-sm border border-white/20 dark:border-white/10">
                <div class="text-center mb-6">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Your Security is Our Priority</h3>
                    <p class="text-gray-600 dark:text-gray-400">All payments are processed through secure, encrypted channels</p>
                </div>

                <div class="flex flex-wrap justify-center items-center gap-8">
                    <div class="flex items-center gap-3 px-4 py-2 rounded-xl bg-green-100 dark:bg-green-900/30 border border-green-200 dark:border-green-800/50">
                        <span class="material-symbols-outlined text-green-600 dark:text-green-400">security</span>
                        <span class="text-sm font-medium text-green-700 dark:text-green-300">SSL Encrypted</span>
                    </div>

                    <div class="flex items-center gap-3 px-4 py-2 rounded-xl bg-blue-100 dark:bg-blue-900/30 border border-blue-200 dark:border-blue-800/50">
                        <span class="material-symbols-outlined text-blue-600 dark:text-blue-400">verified</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-blue-300">PCI Compliant</span>
                    </div>

                    <div class="flex items-center gap-3 px-4 py-2 rounded-xl bg-purple-100 dark:bg-purple-900/30 border border-purple-200 dark:border-purple-800/50">
                        <span class="material-symbols-outlined text-purple-600 dark:text-purple-400">privacy_tip</span>
                        <span class="text-sm font-medium text-purple-700 dark:text-purple-300">Data Protected</span>
                    </div>

                    <div class="flex items-center gap-3 px-4 py-2 rounded-xl bg-orange-100 dark:bg-orange-900/30 border border-orange-200 dark:border-orange-800/50">
                        <span class="material-symbols-outlined text-orange-600 dark:text-orange-400">support</span>
                        <span class="text-sm font-medium text-orange-700 dark:text-orange-300">24/7 Support</span>
                    </div>
                </div>
            </div>

            <!-- Payment Form -->
            <form id="paymentForm" method="POST" action="{{ route('payment.process') }}">
                @csrf
                <input type="hidden" name="payment_method" id="paymentMethodInput">
            </form>

            <!-- Back Button -->
            <div class="text-center mt-12">
                <a href="{{ route('donate') }}" class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-gray-100 dark:bg-surface-dark/50 hover:bg-gray-200 dark:hover:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 hover:text-primary transition-all duration-300">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span class="font-medium">Back to donation form</span>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

.payment-card:hover {
    animation: none;
}

.payment-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent 30%, rgba(76, 223, 32, 0.1) 50%, transparent 70%);
    background-size: 200% 200%;
    animation: shimmer 3s infinite;
    pointer-events: none;
    border-radius: inherit;
}
</style>

<script>
function selectPayment(method) {
    // Add selected state
    document.querySelectorAll('.payment-card').forEach(card => {
        card.classList.remove('selected');
        card.style.transform = '';
    });

    // Highlight selected card
    event.currentTarget.classList.add('selected');
    event.currentTarget.style.transform = 'translateY(-8px)';

    // Add loading state with delay for visual feedback
    setTimeout(() => {
        // Redirect to specific payment page based on method
        switch(method) {
            case 'stripe':
                window.location.href = '{{ route("payment.stripe") }}';
                break;
            case 'crypto':
                window.location.href = '{{ route("payment.crypto") }}';
                break;
            case 'flutterwave':
                window.location.href = '{{ route("payment.flutterwave") }}';
                break;
            default:
                // Fallback to generic processing
                document.getElementById('paymentMethodInput').value = method;
                document.getElementById('paymentForm').submit();
        }
    }, 800);
}

// Add click animation feedback
document.querySelectorAll('.payment-card').forEach(card => {
    card.addEventListener('click', function() {
        this.style.transform = 'scale(0.98)';
        setTimeout(() => {
            this.style.transform = '';
        }, 150);
    });
});
</script>
@endsection
