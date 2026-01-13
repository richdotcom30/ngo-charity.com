@extends('layouts.app')

@section('title', 'New Donation Notification')

@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Header -->
    <div class="bg-primary text-white px-6 py-4">
        <div class="flex items-center space-x-3">
            <div class="bg-white/20 p-2 rounded-full">
                <span class="material-symbols-outlined text-2xl">volunteer_activism</span>
            </div>
            <div>
                <h1 class="text-xl font-bold">New Donation Received</h1>
                <p class="text-white/80 text-sm">Australian Relief NGO</p>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="p-6">
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-2">Donation Details</h2>
            <div class="bg-gray-50 rounded-lg p-4 space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Amount:</span>
                    <span class="text-2xl font-bold text-primary">${{ number_format($donation->amount, 2) }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Donor:</span>
                    <span class="font-medium">{{ $donation->first_name }} {{ $donation->last_name }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Email:</span>
                    <span class="text-blue-600">{{ $donation->email }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Payment Method:</span>
                    <span class="capitalize">{{ $donation->payment_method }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Date:</span>
                    <span>{{ $donation->created_at->format('M j, Y \a\t g:i A') }}</span>
                </div>
                @if($donation->message)
                <div class="border-t pt-3 mt-3">
                    <span class="text-gray-600 block mb-1">Message:</span>
                    <p class="text-gray-800 italic">"{!! nl2br(e($donation->message)) !!}"</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex space-x-3">
            <a href="{{ route('admin.donations') }}"
               class="flex-1 bg-primary hover:bg-primary-hover text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                View All Donations
            </a>
            <a href="mailto:{{ $donation->email }}"
               class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded-lg text-center transition-colors">
                Contact Donor
            </a>
        </div>

        <!-- Footer -->
        <div class="mt-6 pt-4 border-t border-gray-200 text-center">
            <p class="text-sm text-gray-600">
                This donation brings our total raised this month to
                <span class="font-semibold text-primary">${{ number_format(App\Models\Donation::where('status', 'completed')->whereMonth('created_at', now()->month)->sum('amount'), 2) }}</span>
            </p>
            <p class="text-xs text-gray-500 mt-2">
                Sent by Australian Relief NGO Admin System
            </p>
        </div>
    </div>
</div>
@endsection
