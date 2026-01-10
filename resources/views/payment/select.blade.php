@extends('layouts.app')

@section('title', 'Select Payment Method - NGO Australia')

@section('content')
<!-- Main Content Layout -->
<main class="flex-1 flex flex-col">
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-primary/10 via-primary/5 to-background-light">
<div class="container mx-auto px-4 text-center">
<h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Choose Your Payment Method</h1>
<p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
Select how you'd like to complete your generous donation of ${{ number_format($donationData['amount'], 2) }} AUD
</p>
</div>
</section>

<!-- Payment Methods Section -->
<section class="py-16 bg-background-light dark:bg-background-dark">
<div class="container mx-auto px-4">
<div class="max-w-4xl mx-auto">
<!-- Donation Summary -->
<div class="bg-white dark:bg-surface-dark rounded-xl p-6 mb-8 shadow-sm border border-gray-200 dark:border-white/5">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-bold text-gray-900 dark:text-white">Donation Summary</h3>
<span class="text-sm text-gray-500 dark:text-gray-400">Review your donation details</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">person</span>
<span class="text-sm text-gray-600 dark:text-gray-300">{{ $donationData['first_name'] }} {{ $donationData['last_name'] }}</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">email</span>
<span class="text-sm text-gray-600 dark:text-gray-300">{{ $donationData['email'] }}</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">attach_money</span>
<span class="text-lg font-bold text-primary">${{ number_format($donationData['amount'], 2) }}</span>
</div>
</div>
</div>

<!-- Payment Methods -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Stripe Payment -->
<div class="bg-white dark:bg-surface-dark rounded-xl p-6 shadow-sm border border-gray-200 dark:border-white/5 hover:border-primary/50 transition-all group cursor-pointer" onclick="selectPayment('stripe')">
<div class="text-center mb-4">
<div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-200 dark:group-hover:bg-blue-800/50 transition-colors">
<span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-2xl">credit_card</span>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Credit/Debit Card</h3>
<p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Secure payment powered by Stripe</p>
<div class="flex justify-center gap-2 mb-4">
<img src="https://js.stripe.com/v3/fingerprinted/img/mastercard-173a9ca4e5f4e741e8e4a9b7c8b9e4e7.svg" alt="Mastercard" class="h-6">
<img src="https://js.stripe.com/v3/fingerprinted/img/visa-365725566f6230be5ce70a267640dce4.svg" alt="Visa" class="h-6">
<img src="https://js.stripe.com/v3/fingerprinted/img/amex-a49b82f46c5aa6a8a7f25c5a7c7b2b8b.svg" alt="American Express" class="h-6">
</div>
<div class="text-xs text-gray-500 dark:text-gray-400">Instant processing • Secure encryption</div>
</div>
</div>

<!-- PayPal Payment -->
<div class="bg-white dark:bg-surface-dark rounded-xl p-6 shadow-sm border border-gray-200 dark:border-white/5 hover:border-primary/50 transition-all group cursor-pointer" onclick="selectPayment('paypal')">
<div class="text-center mb-4">
<div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-3">
<span class="text-white font-bold text-sm">PayPal</span>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">PayPal</h3>
<p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Pay with your PayPal account</p>
<div class="flex justify-center mb-4">
<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal" class="h-6">
</div>
<div class="text-xs text-gray-500 dark:text-gray-400">Buyer protection • Easy checkout</div>
</div>
</div>

<!-- Crypto Payment -->
<div class="bg-white dark:bg-surface-dark rounded-xl p-6 shadow-sm border border-gray-200 dark:border-white/5 hover:border-primary/50 transition-all group cursor-pointer" onclick="selectPayment('crypto')">
<div class="text-center mb-4">
<div class="w-16 h-16 bg-orange-100 dark:bg-orange-900/30 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-orange-200 dark:group-hover:bg-orange-800/50 transition-colors">
<span class="material-symbols-outlined text-orange-600 dark:text-orange-400 text-2xl">currency_bitcoin</span>
</div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Cryptocurrency</h3>
<p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Donate with crypto assets</p>
<div class="flex justify-center gap-1 mb-4">
<span class="text-xs bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-gray-700 dark:text-gray-300">BTC</span>
<span class="text-xs bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-gray-700 dark:text-gray-300">ETH</span>
<span class="text-xs bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded text-gray-700 dark:text-gray-300">USDT</span>
</div>
<div class="text-xs text-gray-500 dark:text-gray-400">Fast transactions • Low fees</div>
</div>
</div>
</div>

<!-- Payment Form -->
<form id="paymentForm" method="POST" action="{{ route('payment.process') }}">
@csrf
<input type="hidden" name="payment_method" id="paymentMethodInput">
</form>

<!-- Back Button -->
<div class="text-center mt-8">
<a href="{{ route('donate') }}" class="inline-flex items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">arrow_back</span>
Back to donation form
</a>
</div>
</div>
</div>
</section>
</main>

<script>
function selectPayment(method) {
    document.getElementById('paymentMethodInput').value = method;

    // Add loading state
    const form = document.getElementById('paymentForm');
    const buttons = document.querySelectorAll('[onclick*="selectPayment"]');

    buttons.forEach(btn => {
        btn.style.pointerEvents = 'none';
        btn.style.opacity = '0.6';
    });

    // Submit form
    form.submit();
}
</script>
@endsection
