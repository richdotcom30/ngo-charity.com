@extends('layouts.app')

@section('title', 'Donation Confirmation - Australian Relief NGO')

@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Header -->
    <div class="bg-primary text-white px-6 py-4">
        <div class="flex items-center space-x-3">
            <div class="bg-white/20 p-2 rounded-full">
                <span class="material-symbols-outlined text-2xl">volunteer_activism</span>
            </div>
            <div>
                <h1 class="text-xl font-bold">Thank You for Your Donation</h1>
                <p class="text-white/80 text-sm">Australian Relief NGO</p>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="p-6">
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-4">
                <span class="material-symbols-outlined text-primary text-3xl">check_circle</span>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Your Donation Has Been Received</h2>
            <p class="text-gray-600">Thank you for supporting our mission to create positive change across Australia.</p>
        </div>

        <!-- Donation Details -->
        <div class="bg-gray-50 rounded-lg p-4 mb-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Donation Summary</h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Amount Donated:</span>
                    <span class="text-2xl font-bold text-primary">${{ number_format($donation->amount, 2) }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Payment Method:</span>
                    <span class="capitalize font-medium">{{ $donation->payment_method }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Transaction ID:</span>
                    <span class="font-mono text-sm text-gray-800">{{ $donation->transaction_id ?? 'Processing' }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Date:</span>
                    <span>{{ $donation->created_at->format('M j, Y \a\t g:i A') }}</span>
                </div>
                @if($donation->message)
                <div class="border-t pt-3 mt-3">
                    <span class="text-gray-600 block mb-1">Your Message:</span>
                    <p class="text-gray-800 italic bg-white p-3 rounded border">"{!! nl2br(e($donation->message)) !!}"</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Impact Message -->
        <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
            <div class="flex items-start space-x-3">
                <span class="material-symbols-outlined text-green-600 text-xl">eco</span>
                <div>
                    <h4 class="font-semibold text-green-800">Your Impact</h4>
                    <p class="text-green-700 text-sm mt-1">
                        Your generous donation of ${{ number_format($donation->amount, 2) }} will help us continue our work
                        supporting communities across Australia through our various programs and initiatives.
                    </p>
                </div>
            </div>
        </div>

        <!-- What Happens Next -->
        <div class="mb-6">
            <h4 class="font-semibold text-gray-900 mb-3">What Happens Next?</h4>
            <ul class="space-y-2 text-sm text-gray-600">
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>You will receive a tax-deductible receipt via email within 24 hours</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>Your donation will be allocated to our current priority programs</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>You'll receive updates on how your donation is making a difference</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    <span>Stay connected with us for future opportunities to get involved</span>
                </li>
            </ul>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-3">
            <a href="{{ route('home') }}"
               class="flex-1 bg-primary hover:bg-primary-hover text-white font-medium py-3 px-4 rounded-lg text-center transition-colors">
                Return to Our Website
            </a>
            <a href="{{ route('volunteer') }}"
               class="flex-1 bg-white hover:bg-gray-50 text-gray-700 font-medium py-3 px-4 rounded-lg text-center border border-gray-300 transition-colors">
                Get Involved as Volunteer
            </a>
        </div>

        <!-- Footer -->
        <div class="mt-8 pt-4 border-t border-gray-200 text-center">
            <div class="flex items-center justify-center space-x-4 text-sm text-gray-500 mb-2">
                <span>📧 info@ausrelief.org</span>
                <span>📞 (02) 1234 5678</span>
                <span>🌐 ausrelief.org</span>
            </div>
            <p class="text-xs text-gray-500">
                Australian Relief NGO - Creating positive change across Australia since 2010
            </p>
            <div class="flex items-center justify-center space-x-4 mt-3">
                <a href="#" class="text-gray-400 hover:text-gray-600">Facebook</a>
                <a href="#" class="text-gray-400 hover:text-gray-600">Twitter</a>
                <a href="#" class="text-gray-400 hover:text-gray-600">Instagram</a>
            </div>
        </div>
    </div>
</div>
@endsection
