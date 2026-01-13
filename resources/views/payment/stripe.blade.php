@extends('layouts.app')

@section('title', 'Complete Payment - Credit/Debit Card - NGO Australia')

@section('content')
<!-- Payment Processing Page -->
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
            <span class="text-sm font-medium text-primary">Secure Payment Processing</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-black text-gray-900 dark:text-white mb-6 leading-tight">
            Complete Your <span class="text-primary">Secure Payment</span>
        </h1>

        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-8 leading-relaxed">
            Your donation of A${{ number_format($donationData['amount'], 2) }} AUD is protected by bank-level security through Stripe.
        </p>

        <!-- Progress Indicator -->
        <div class="flex items-center justify-center gap-4 mb-8">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-sm">check</span>
                </div>
                <span class="text-sm text-gray-600 dark:text-gray-400">Amount Selected</span>
            </div>
            <div class="w-12 h-0.5 bg-primary"></div>
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-sm">check</span>
                </div>
                <span class="text-sm text-gray-600 dark:text-gray-400">Payment Method</span>
            </div>
            <div class="w-12 h-0.5 bg-primary"></div>
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center animate-pulse">
                    <span class="text-white text-sm font-bold">3</span>
                </div>
                <span class="text-sm font-medium text-primary">Payment Details</span>
            </div>
        </div>
    </div>
</section>

<!-- Payment Form Section -->
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <!-- Payment Form Card -->
            <div class="bg-white dark:bg-surface-dark rounded-3xl shadow-xl border border-gray-200/50 dark:border-white/10 overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-primary to-primary/80 p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-bold">Credit/Debit Card Payment</h2>
                            <p class="text-primary-100 text-sm">Powered by Stripe • PCI Compliant</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-2xl">credit_card</span>
                        </div>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="p-8">
                    <!-- Amount Summary -->
                    <div class="bg-gray-50 dark:bg-surface-dark/50 rounded-2xl p-6 mb-8 border border-gray-200/50 dark:border-white/5">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Donation Amount</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">A${{ number_format($donationData['amount'], 2) }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-green-600 dark:text-green-400 font-medium">No hidden fees</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Instant processing</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stripe Elements Form -->
                    <form id="payment-form" class="space-y-6">
                        @csrf

                        <!-- Card Element -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Card Information
                            </label>
                            <div id="card-element" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-surface-dark text-gray-900 dark:text-white focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-colors">
                                <!-- Stripe Elements will insert the card input here -->
                            </div>
                            <div id="card-errors" class="mt-2 text-sm text-red-600 dark:text-red-400" role="alert"></div>
                        </div>

                        <!-- Cardholder Name -->
                        <div>
                            <label for="cardholder-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Cardholder Name
                            </label>
                            <input type="text" id="cardholder-name" name="cardholder_name" required
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl bg-white dark:bg-surface-dark text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition-colors"
                                   placeholder="Enter name on card">
                        </div>

                        <!-- Billing Address (Optional but recommended) -->
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-6">
                            <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-4">Billing Address (Optional)</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="billing-address" class="block text-xs text-gray-600 dark:text-gray-400 mb-1">
                                        Street Address
                                    </label>
                                    <input type="text" id="billing-address" name="billing_address"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-surface-dark text-gray-900 dark:text-white text-sm placeholder-gray-500 dark:placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition-colors">
                                </div>
                                <div>
                                    <label for="billing-city" class="block text-xs text-gray-600 dark:text-gray-400 mb-1">
                                        City
                                    </label>
                                    <input type="text" id="billing-city" name="billing_city"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-surface-dark text-gray-900 dark:text-white text-sm placeholder-gray-500 dark:placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition-colors">
                                </div>
                                <div>
                                    <label for="billing-state" class="block text-xs text-gray-600 dark:text-gray-400 mb-1">
                                        State/Province
                                    </label>
                                    <input type="text" id="billing-state" name="billing_state"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-surface-dark text-gray-900 dark:text-white text-sm placeholder-gray-500 dark:placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition-colors">
                                </div>
                                <div>
                                    <label for="billing-postal" class="block text-xs text-gray-600 dark:text-gray-400 mb-1">
                                        Postal Code
                                    </label>
                                    <input type="text" id="billing-postal" name="billing_postal"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-surface-dark text-gray-900 dark:text-white text-sm placeholder-gray-500 dark:placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary transition-colors">
                                </div>
                            </div>
                        </div>

                        <!-- Terms and Submit -->
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-6 space-y-4">
                            <div class="flex items-start gap-3">
                                <input type="checkbox" id="terms-accept" required
                                       class="mt-1 w-4 h-4 text-primary border-gray-300 dark:border-gray-600 rounded focus:ring-primary">
                                <label for="terms-accept" class="text-sm text-gray-600 dark:text-gray-400">
                                    I agree to the <a href="{{ route('terms-of-service') }}" class="text-primary hover:underline">Terms of Service</a>
                                    and <a href="{{ route('privacy-policy') }}" class="text-primary hover:underline">Privacy Policy</a>.
                                    My donation is processed securely by Stripe.
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" id="submit-button" class="w-full group relative flex items-center justify-center gap-3 overflow-hidden rounded-2xl bg-primary px-8 py-4 text-background-dark font-black text-lg shadow-[0_4px_30px_rgba(76,223,32,0.2)] transition-all hover:bg-[#3ec01a] hover:shadow-[0_4px_40px_rgba(76,223,32,0.4)] hover:-translate-y-0.5 active:translate-y-0 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0">
                                <span id="button-text">Complete Payment of A${{ number_format($donationData['amount'], 2) }}</span>
                                <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                                <div id="spinner" class="hidden absolute inset-0 flex items-center justify-center">
                                    <div class="animate-spin rounded-full h-6 w-6 border-2 border-background-dark border-t-transparent"></div>
                                </div>
                            </button>

                            <!-- Security Notice -->
                            <div class="text-center">
                                <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">security</span>
                                    Your payment information is encrypted and secure
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center mt-8">
                <a href="{{ route('payment.select') }}" class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-gray-100 dark:bg-surface-dark/50 hover:bg-gray-200 dark:hover:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 hover:text-primary transition-all duration-300">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span class="font-medium">Choose Different Payment Method</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stripe JavaScript -->
<script src="https://js.stripe.com/v3/"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Stripe
    const stripe = Stripe('{{ config("services.stripe.key", "pk_test_51EXAMPLE") }}');
    const elements = stripe.elements();

    // Create card element
    const cardElement = elements.create('card', {
        style: {
            base: {
                fontSize: '16px',
                color: '#374151',
                '::placeholder': {
                    color: '#9CA3AF',
                },
                fontFamily: '"Inter", system-ui, sans-serif',
            },
        },
    });

    cardElement.mount('#card-element');

    // Handle form submission
    const form = document.getElementById('payment-form');
    const submitButton = document.getElementById('submit-button');
    const buttonText = document.getElementById('button-text');
    const spinner = document.getElementById('spinner');
    const cardErrors = document.getElementById('card-errors');

    form.addEventListener('submit', async function(event) {
        event.preventDefault();

        // Show loading state
        submitButton.disabled = true;
        buttonText.textContent = 'Processing...';
        spinner.classList.remove('hidden');
        cardErrors.textContent = '';

        try {
            // Create payment method
            const {error, paymentMethod} = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
                billing_details: {
                    name: document.getElementById('cardholder-name').value,
                    address: {
                        line1: document.getElementById('billing-address').value || undefined,
                        city: document.getElementById('billing-city').value || undefined,
                        state: document.getElementById('billing-state').value || undefined,
                        postal_code: document.getElementById('billing-postal').value || undefined,
                        country: 'AU', // Australia
                    },
                },
            });

            if (error) {
                throw new Error(error.message);
            }

            // Send payment method to server
            const response = await fetch('/payment/stripe/process', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    payment_method_id: paymentMethod.id,
                    cardholder_name: document.getElementById('cardholder-name').value,
                })
            });

            const result = await response.json();

            if (!response.ok) {
                throw new Error(result.message || 'Payment failed');
            }

            // Success - redirect to success page
            window.location.href = result.redirect_url || '{{ route("donation.success") }}';

        } catch (error) {
            // Show error
            cardErrors.textContent = error.message;
            console.error('Payment error:', error);

            // Reset button
            submitButton.disabled = false;
            buttonText.textContent = 'Complete Payment of A${{ number_format($donationData['amount'], 2) }}';
            spinner.classList.add('hidden');
        }
    });

    // Handle card element changes
    cardElement.on('change', function(event) {
        if (event.error) {
            cardErrors.textContent = event.error.message;
        } else {
            cardErrors.textContent = '';
        }
    });
});
</script>
@endsection
