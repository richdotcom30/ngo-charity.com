@extends('layouts.app')

@section('title', 'Annual Reports - NGO Australia')

@section('content')
<!-- Hero Section -->
<div class="relative w-full h-64 flex items-center justify-center overflow-hidden bg-gradient-to-r from-primary/20 to-accent-brown/20">
<!-- Background Pattern -->
<div class="absolute inset-0 opacity-10 bg-dots-pattern"></div>
<div class="relative z-20 text-center">
<h1 class="text-4xl md:text-6xl font-black text-white mb-4">
                Annual Reports
            </h1>
<p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto">
                Transparency and accountability in our financial stewardship and community impact.
            </p>
</div>
</div>

<!-- Reports Section -->
<section class="py-20 bg-white">
<div class="max-w-[1100px] mx-auto px-6">
<!-- Report Selector -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-12">
<div>
<h2 class="text-3xl font-bold text-gray-900 mb-2">Financial Transparency</h2>
<p class="text-gray-600">Detailed breakdown of our financial operations and community impact.</p>
</div>
<div class="flex gap-3">
<select class="bg-white border border-gray-200 text-gray-700 text-sm rounded-lg focus:ring-primary focus:border-primary block p-2.5">
<option>2024 Annual Report</option>
<option>2023 Annual Report</option>
<option>2022 Annual Report</option>
</select>
<button class="bg-primary hover:bg-primary-hover text-white px-6 py-2.5 rounded-lg text-sm font-medium transition-colors">
<span class="material-symbols-outlined text-[18px] mr-2">download</span>
Download PDF
</button>
</div>
</div>

<!-- Financial Overview -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
<!-- Total Income -->
<div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 border border-green-200">
<div class="flex items-center gap-4 mb-6">
<div class="p-3 bg-green-500 rounded-full">
<span class="material-symbols-outlined text-white text-2xl">trending_up</span>
</div>
<div>
<h3 class="text-xl font-bold text-gray-900">Total Income</h3>
<p class="text-green-600 text-sm font-medium">Fiscal Year 2024</p>
</div>
</div>
<div class="text-4xl font-black text-green-600 mb-4">$2,450,000</div>
<div class="space-y-3">
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Donations</span>
<span class="text-sm font-bold text-gray-900">$1,850,000</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Grants & Sponsorships</span>
<span class="text-sm font-bold text-gray-900">$450,000</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Fundraising Events</span>
<span class="text-sm font-bold text-gray-900">$150,000</span>
</div>
</div>
</div>

<!-- Total Expenses -->
<div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200">
<div class="flex items-center gap-4 mb-6">
<div class="p-3 bg-blue-500 rounded-full">
<span class="material-symbols-outlined text-white text-2xl">payments</span>
</div>
<div>
<h3 class="text-xl font-bold text-gray-900">Total Expenses</h3>
<p class="text-blue-600 text-sm font-medium">Program Delivery</p>
</div>
</div>
<div class="text-4xl font-black text-blue-600 mb-4">$2,125,000</div>
<div class="space-y-3">
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Program Services</span>
<span class="text-sm font-bold text-gray-900">$1,650,000</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Administration</span>
<span class="text-sm font-bold text-gray-900">$325,000</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Fundraising</span>
<span class="text-sm font-bold text-gray-900">$150,000</span>
</div>
</div>
</div>

<!-- Net Impact -->
<div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 border border-purple-200">
<div class="flex items-center gap-4 mb-6">
<div class="p-3 bg-purple-500 rounded-full">
<span class="material-symbols-outlined text-white text-2xl">diversity_1</span>
</div>
<div>
<h3 class="text-xl font-bold text-gray-900">Community Impact</h3>
<p class="text-purple-600 text-sm font-medium">Lives Changed</p>
</div>
</div>
<div class="text-4xl font-black text-purple-600 mb-4">15,420</div>
<div class="space-y-3">
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Families Supported</span>
<span class="text-sm font-bold text-gray-900">8,250</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Children Educated</span>
<span class="text-sm font-bold text-gray-900">5,120</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-600">Volunteers Engaged</span>
<span class="text-sm font-bold text-gray-900">2,050</span>
</div>
</div>
</div>
</div>

<!-- Detailed Breakdown -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<!-- Program Expenses -->
<div class="bg-white border border-gray-200 rounded-2xl p-8">
<h3 class="text-2xl font-bold text-gray-900 mb-6">Program Expenses Breakdown</h3>
<div class="space-y-6">
<div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
<div class="flex items-center gap-4">
<div class="p-2 bg-primary/10 rounded-lg">
<span class="material-symbols-outlined text-primary">school</span>
</div>
<div>
<h4 class="font-bold text-gray-900">Education Programs</h4>
<p class="text-sm text-gray-600">Rural schools & digital literacy</p>
</div>
</div>
<div class="text-right">
<div class="text-xl font-bold text-gray-900">$850,000</div>
<div class="text-sm text-gray-500">39.8% of total</div>
</div>
</div>

<div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
<div class="flex items-center gap-4">
<div class="p-2 bg-green-500/10 rounded-lg">
<span class="material-symbols-outlined text-green-600">restaurant</span>
</div>
<div>
<h4 class="font-bold text-gray-900">Food Security</h4>
<p class="text-sm text-gray-600">Community gardens & food banks</p>
</div>
</div>
<div class="text-right">
<div class="text-xl font-bold text-gray-900">$620,000</div>
<div class="text-sm text-gray-500">29.1% of total</div>
</div>
</div>

<div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
<div class="flex items-center gap-4">
<div class="p-2 bg-blue-500/10 rounded-lg">
<span class="material-symbols-outlined text-blue-600">local_hospital</span>
</div>
<div>
<h4 class="font-bold text-gray-900">Health Services</h4>
<p class="text-sm text-gray-600">Mobile clinics & wellness programs</p>
</div>
</div>
<div class="text-right">
<div class="text-xl font-bold text-gray-900">$480,000</div>
<div class="text-sm text-gray-500">22.5% of total</div>
</div>
</div>

<div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
<div class="flex items-center gap-4">
<div class="p-2 bg-orange-500/10 rounded-lg">
<span class="material-symbols-outlined text-orange-600">nature</span>
</div>
<div>
<h4 class="font-bold text-gray-900">Environmental</h4>
<p class="text-sm text-gray-600">Bushfire recovery & conservation</p>
</div>
</div>
<div class="text-right">
<div class="text-xl font-bold text-gray-900">$375,000</div>
<div class="text-sm text-gray-500">17.6% of total</div>
</div>
</div>
</div>
</div>

<!-- Financial Health -->
<div class="bg-white border border-gray-200 rounded-2xl p-8">
<h3 class="text-2xl font-bold text-gray-900 mb-6">Financial Health</h3>
<div class="space-y-6">
<!-- Reserve Fund -->
<div class="p-6 bg-green-50 border border-green-200 rounded-xl">
<div class="flex items-center justify-between mb-3">
<h4 class="font-bold text-gray-900">Reserve Fund</h4>
<span class="text-green-600 font-bold">$325,000</span>
</div>
<div class="w-full bg-green-200 rounded-full h-2 mb-2">
<div class="bg-green-600 h-2 rounded-full" style="width: 65%"></div>
</div>
<p class="text-sm text-gray-600">6 months of operating expenses secured</p>
</div>

<!-- Program Efficiency -->
<div class="p-6 bg-blue-50 border border-blue-200 rounded-xl">
<div class="flex items-center justify-between mb-3">
<h4 class="font-bold text-gray-900">Program Efficiency</h4>
<span class="text-blue-600 font-bold">89.2%</span>
</div>
<div class="w-full bg-blue-200 rounded-full h-2 mb-2">
<div class="bg-blue-600 h-2 rounded-full" style="width: 89.2%"></div>
</div>
<p class="text-sm text-gray-600">Of every dollar goes directly to programs</p>
</div>

<!-- Growth Metrics -->
<div class="p-6 bg-purple-50 border border-purple-200 rounded-xl">
<div class="flex items-center justify-between mb-3">
<h4 class="font-bold text-gray-900">Year-over-Year Growth</h4>
<span class="text-purple-600 font-bold">+24.5%</span>
</div>
<div class="w-full bg-purple-200 rounded-full h-2 mb-2">
<div class="bg-purple-600 h-2 rounded-full" style="width: 74.5%"></div>
</div>
<p class="text-sm text-gray-600">Income growth and expanded reach</p>
</div>
</div>
</div>
</div>

<!-- Key Achievements -->
<div class="mt-16 bg-gray-50 rounded-2xl p-8">
<h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Key Achievements 2024</h3>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<div class="text-center">
<div class="inline-flex items-center justify-center w-16 h-16 bg-primary rounded-full mb-4">
<span class="material-symbols-outlined text-white text-2xl">school</span>
</div>
<h4 class="font-bold text-gray-900 mb-2">Education Impact</h4>
<p class="text-gray-600">Established 12 new learning centers serving 2,500+ students in remote communities</p>
</div>
<div class="text-center">
<div class="inline-flex items-center justify-center w-16 h-16 bg-green-500 rounded-full mb-4">
<span class="material-symbols-outlined text-white text-2xl">restaurant</span>
</div>
<h4 class="font-bold text-gray-900 mb-2">Food Security</h4>
<p class="text-gray-600">Distributed 150,000+ meals through expanded food bank network across 8 regions</p>
</div>
<div class="text-center">
<div class="inline-flex items-center justify-center w-16 h-16 bg-blue-500 rounded-full mb-4">
<span class="material-symbols-outlined text-white text-2xl">local_hospital</span>
</div>
<h4 class="font-bold text-gray-900 mb-2">Healthcare Access</h4>
<p class="text-gray-600">Mobile health clinics served 8,500 patients in underserved rural areas</p>
</div>
<div class="text-center">
<div class="inline-flex items-center justify-center w-16 h-16 bg-orange-500 rounded-full mb-4">
<span class="material-symbols-outlined text-white text-2xl">nature</span>
</div>
<h4 class="font-bold text-gray-900 mb-2">Environmental</h4>
<p class="text-gray-600">Replanted 500,000 native trees and restored 2,500 hectares of bushland</p>
</div>
<div class="text-center">
<div class="inline-flex items-center justify-center w-16 h-16 bg-purple-500 rounded-full mb-4">
<span class="material-symbols-outlined text-white text-2xl">diversity_1</span>
</div>
<h4 class="font-bold text-gray-900 mb-2">Community Building</h4>
<p class="text-gray-600">Trained and engaged 2,050 volunteers in community development programs</p>
</div>
<div class="text-center">
<div class="inline-flex items-center justify-center w-16 h-16 bg-red-500 rounded-full mb-4">
<span class="material-symbols-outlined text-white text-2xl">trending_up</span>
</div>
<h4 class="font-bold text-gray-900 mb-2">Financial Growth</h4>
<p class="text-gray-600">24.5% increase in donations with improved program efficiency and impact</p>
</div>
</div>
</div>

<!-- Call to Action -->
<div class="mt-16 text-center">
<h3 class="text-2xl font-bold text-gray-900 mb-4">Support Our Mission</h3>
<p class="text-gray-600 mb-8 max-w-2xl mx-auto">Your continued support enables us to expand our programs and create lasting change in communities across Australia.</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="{{ route('donate') }}" class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-primary hover:bg-primary-hover text-white font-bold rounded-full transition-all duration-300">
<span>Make a Donation</span>
<span class="material-symbols-outlined">heart_check</span>
</a>
<a href="{{ route('volunteer') }}" class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-white hover:bg-gray-50 text-gray-900 font-bold rounded-full border border-gray-300 transition-all duration-300">
<span>Get Involved</span>
<span class="material-symbols-outlined">volunteer_activism</span>
</a>
</div>
</div>
</div>
</section>
@endsection
