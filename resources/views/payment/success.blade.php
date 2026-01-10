@extends('layouts.app')

@section('title', 'Donation Successful - NGO Australia')

@section('content')
<main class="flex-1 flex flex-col">
<section class="relative py-20 bg-gradient-to-br from-green-50 via-primary/5 to-background-light">
<div class="container mx-auto px-4 text-center">
<div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
<span class="material-symbols-outlined text-green-600 text-5xl">check_circle</span>
</div>
<h1 class="text-4xl font-bold text-gray-900 mb-4">Thank You for Your Donation!</h1>
<p class="text-lg text-gray-600">Your generous contribution has been successfully processed.</p>
</div>
</section>

<section class="py-16 bg-background-light">
<div class="container mx-auto px-4">
<div class="max-w-2xl mx-auto">
<div class="bg-white rounded-xl p-8 shadow-lg text-center">
<h2 class="text-2xl font-bold text-gray-900 mb-4">Donation Confirmed</h2>
<p class="text-gray-600 mb-6">A confirmation email has been sent to your inbox.</p>
<div class="flex gap-4">
<a href="{{ route('donate') }}" class="flex-1 bg-primary text-white py-3 px-6 rounded-lg">
Make Another Donation
</a>
<a href="{{ url('/') }}" class="flex-1 bg-gray-100 text-gray-900 py-3 px-6 rounded-lg">
Return to Home
</a>
</div>
</div>
</div>
</div>
</section>
</main>
@endsection
