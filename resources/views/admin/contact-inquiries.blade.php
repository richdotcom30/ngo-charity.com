@extends('layouts.admin')

@section('title', 'Admin Contact Inquiries - NGO Australia')

@section('content')
<!-- Main Layout -->
<div class="min-h-screen flex w-full overflow-hidden bg-background-light dark:bg-background-dark">
<!-- Sidebar -->
<aside class="hidden lg:flex flex-col w-72 h-screen bg-card-light dark:bg-[#1a140e] border-r border-border-light dark:border-border-dark flex-shrink-0 transition-colors duration-300 z-20">
<div class="p-6 pb-2">
<div class="flex items-center gap-3 mb-8">
<div class="bg-primary aspect-square rounded-full size-10 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-primary/20">
                    AR
                </div>
<div class="flex flex-col">
<h1 class="text-lg font-bold leading-tight tracking-tight">Admin Portal</h1>
<p class="text-text-muted-light dark:text-text-muted-dark text-xs font-medium uppercase tracking-wider">Australian Relief</p>
</div>
</div>
</div>
<nav class="flex-1 overflow-y-auto px-4 pb-4 space-y-1">
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.dashboard') }}">
<span class="material-symbols-outlined filled">grid_view</span>
<span class="text-sm font-bold">Dashboard</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.donations') }}">
<span class="material-symbols-outlined">volunteer_activism</span>
<span class="text-sm font-medium">Donations</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.volunteers') }}">
<span class="material-symbols-outlined">diversity_3</span>
<span class="text-sm font-medium">Volunteers</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.programs') }}">
<span class="material-symbols-outlined">calendar_month</span>
<span class="text-sm font-medium">Programs</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.blog') }}">
<span class="material-symbols-outlined">article</span>
<span class="text-sm font-medium">Blog</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.analytics') }}">
<span class="material-symbols-outlined">analytics</span>
<span class="text-sm font-medium">Analytics</span>
</a>
<div class="pt-4 mt-4 border-t border-border-light dark:border-border-dark">
<p class="px-3 text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-2">System</p>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all" href="{{ route('admin.contact-inquiries') }}">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">Contact Inquiries</span>
</a>
</div>
</nav>
<div class="p-4 border-t border-border-light dark:border-border-dark">
<div class="flex items-center gap-3 px-2 mb-4">
<div class="relative">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/30" data-alt="Profile picture of the admin user" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB2zN1ABC5rlTOUa09ojJ_EFqVl893s9SrO79krSdo3xfvZJ9A4rMbmnYQj83z8D2Vqtz74zy6_HI8j0nUEwy8RKyBFYLeAPaaMtAaPPPNWRydFBb3TF-ZgLb4TUWYrMZTnJ3948--dNQ3IDJ7gby6Q4OwbYjj23icF0e03IC4Y6cCkheYxvNyW9tQV-PyKzxWLmbiix1KD5xMkyya6iKzfLgJ2Cp9gUBuujeVqnoLMXuzi-KpO26sCCAAm2aKogIBgaMzui10Zv8Q");'></div>
<div class="absolute bottom-0 right-0 size-3 bg-green-500 rounded-full border-2 border-white dark:border-[#1a140e]"></div>
</div>
<div class="flex flex-col overflow-hidden">
<p class="text-sm font-bold truncate">Sarah Johnson</p>
<p class="text-text-muted-light dark:text-text-muted-dark text-xs truncate">sarah@ausrelief.org</p>
</div>
</div>
<form method="POST" action="{{ route('admin.logout') }}" class="w-full">
    @csrf
    <button type="submit" class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-card-light dark:bg-[#2d2317] hover:bg-red-50 dark:hover:bg-red-900/20 text-text-main-light dark:text-text-main-dark hover:text-red-600 dark:hover:text-red-400 border border-border-light dark:border-border-dark transition-colors text-sm font-bold">
        <span class="material-symbols-outlined text-[20px]">logout</span>
        Logout
    </button>
</form>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col h-screen relative overflow-hidden">
<!-- Top Navbar -->
<header class="flex-shrink-0 h-16 bg-card-light dark:bg-background-dark/80 backdrop-blur-md border-b border-border-light dark:border-border-dark flex items-center justify-between px-6 z-10 sticky top-0">
<div class="flex items-center gap-4 lg:hidden">
<button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors">
<span class="material-symbols-outlined">menu</span>
</button>
<span class="font-bold text-lg">Contact Inquiries</span>
</div>
<div class="hidden lg:flex items-center gap-2">
<h2 class="text-lg font-bold">Contact Inquiries</h2>
<span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-xs font-semibold">Admin View</span>
</div>
<div class="flex items-center justify-end gap-4 flex-1 lg:flex-none">
<!-- Search -->
<div class="hidden md:flex relative group w-64 transition-all focus-within:w-80">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-text-muted-light dark:text-text-muted-dark">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-2 border border-border-light dark:border-border-dark rounded-lg leading-5 bg-background-light dark:bg-[#2d2317] placeholder-text-muted-light dark:placeholder-text-muted-dark focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm transition-all text-text-main-light dark:text-text-main-dark" placeholder="Search inquiries..." type="text"/>
</div>
<div class="flex items-center gap-3 border-l border-border-light dark:border-border-dark pl-4 ml-2">
<button class="relative p-2 rounded-full text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary transition-colors" title="Notifications">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-[#211911]"></span>
</button>
<button class="p-2 rounded-full text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary transition-colors" onclick="document.documentElement.classList.toggle('dark')" title="Toggle Theme">
<span class="material-symbols-outlined dark:hidden">dark_mode</span>
<span class="material-symbols-outlined hidden dark:block">light_mode</span>
</button>
</div>
<button class="hidden sm:flex items-center justify-center gap-2 rounded-lg h-9 px-4 bg-primary hover:bg-primary-hover text-background-dark text-sm font-bold shadow-md shadow-primary/20 transition-all">
<span class="material-symbols-outlined text-[18px]">download</span>
<span>Export CSV</span>
</button>
</div>
</header>
<!-- Scrollable Content Area -->
<div class="flex-1 overflow-y-auto p-4 lg:p-8 scroll-smooth">
<div class="max-w-7xl mx-auto flex flex-col gap-8 pb-10">
<!-- Page Heading -->
<div class="flex flex-wrap justify-between items-end gap-4">
<div class="flex flex-col gap-2">
<h2 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Contact Inquiries</h2>
<p class="text-gray-500 dark:text-gray-400 text-lg max-w-2xl">Manage and respond to contact form submissions from your website visitors.</p>
</div>
<div class="flex items-center gap-3">
<a href="{{ route('admin.contact-inquiries.export', request()->query()) }}" class="hidden sm:flex items-center gap-2 px-5 py-2.5 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-sm font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-gray-700 dark:text-gray-200">
<span class="material-symbols-outlined text-[20px]">download</span>
                                Export All
                            </a>
</div>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
<div class="p-6 rounded-xl bg-white dark:bg-surface-dark border border-gray-100 dark:border-white/5 shadow-sm flex flex-col gap-4 group hover:border-primary/30 transition-colors">
<div class="flex items-center justify-between">
<span class="text-gray-500 dark:text-gray-400 font-medium">Total Inquiries</span>
<div class="p-2 rounded-full bg-blue-100 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400">
<span class="material-symbols-outlined text-[20px]">mail</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold dark:text-white">{{ $inquiries->total() }}</span>
<span class="text-sm font-medium text-primary">+12% this month</span>
</div>
</div>
<div class="p-6 rounded-xl bg-white dark:bg-surface-dark border border-gray-100 dark:border-white/5 shadow-sm flex flex-col gap-4 group hover:border-primary/30 transition-colors">
<div class="flex items-center justify-between">
<span class="text-gray-500 dark:text-gray-400 font-medium">New</span>
<div class="p-2 rounded-full bg-orange-100 dark:bg-orange-500/20 text-orange-600 dark:text-orange-400">
<span class="material-symbols-outlined text-[20px]">schedule</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold dark:text-white">{{ $inquiries->where('status', 'new')->count() }}</span>
<span class="text-sm font-medium text-orange-500">Requires attention</span>
</div>
</div>
<div class="p-6 rounded-xl bg-white dark:bg-surface-dark border border-gray-100 dark:border-white/5 shadow-sm flex flex-col gap-4 group hover:border-primary/30 transition-colors">
<div class="flex items-center justify-between">
<span class="text-gray-500 dark:text-gray-400 font-medium">Responded</span>
<div class="p-2 rounded-full bg-green-100 dark:bg-green-500/20 text-green-600 dark:text-green-400">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold dark:text-white">{{ $inquiries->where('status', 'responded')->count() }}</span>
<span class="text-sm font-medium text-green-500">Handled</span>
</div>
</div>
<div class="p-6 rounded-xl bg-white dark:bg-surface-dark border border-gray-100 dark:border-white/5 shadow-sm flex flex-col gap-4 group hover:border-primary/30 transition-colors">
<div class="flex items-center justify-between">
<span class="text-gray-500 dark:text-gray-400 font-medium">Avg Response Time</span>
<div class="p-2 rounded-full bg-purple-100 dark:bg-purple-500/20 text-purple-600 dark:text-purple-400">
<span class="material-symbols-outlined text-[20px]">timer</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold dark:text-white">4.2h</span>
<span class="text-sm font-medium text-purple-500">Industry avg: 8h</span>
</div>
</div>
</div>
<!-- Search & Filters -->
<div class="flex flex-col md:flex-row gap-4">
<div class="flex-1 relative">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400 text-[22px]">search</span>
</div>
<input class="w-full h-12 pl-11 pr-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="Search by name, email, subject..." type="text"/>
</div>
<div class="flex gap-3">
<div class="relative min-w-[140px]">
<select class="appearance-none w-full h-12 px-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer">
<option>All Status</option>
<option>New</option>
<option>Read</option>
<option>Responded</option>
<option>Closed</option>
</select>
<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400 text-[20px]">expand_more</span>
</div>
</div>
<div class="flex gap-2">
<input type="date" class="h-12 px-3 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="From">
<input type="date" class="h-12 px-3 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="To">
</div>
<div class="flex gap-2">
<button class="h-12 px-6 rounded-full bg-primary hover:bg-primary-hover text-white font-medium transition-colors">
<span class="material-symbols-outlined text-[18px]">search</span>
</button>
<a href="{{ route('admin.contact-inquiries') }}" class="h-12 px-4 rounded-full bg-gray-100 dark:bg-white/10 hover:bg-gray-200 dark:hover:bg-white/20 text-gray-700 dark:text-gray-300 font-medium transition-colors flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">clear</span>
</a>
</div>
</div>
</div>
<!-- Inquiries List Table -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-2xl overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead class="bg-gray-50 dark:bg-white/5 border-b border-gray-100 dark:border-white/5">
<tr>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Contact</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Subject</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Status</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Date</th>
<th class="py-4 px-6 text-right text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-100 dark:divide-white/5">
@forelse($inquiries as $inquiry)
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm">
{{ strtoupper(substr($inquiry->name, 0, 1)) }}
</div>
<div class="flex flex-col">
<span class="text-sm font-bold text-gray-900 dark:text-white">{{ $inquiry->name }}</span>
<span class="text-xs text-gray-500 dark:text-gray-400">{{ $inquiry->email }}</span>
@if($inquiry->phone)
<span class="text-xs text-gray-500 dark:text-gray-400">{{ $inquiry->phone }}</span>
@endif
</div>
</div>
</td>
<td class="py-4 px-6">
<div class="flex flex-col">
<span class="text-sm font-medium text-gray-900 dark:text-white">{{ $inquiry->subject }}</span>
<p class="text-xs text-gray-500 dark:text-gray-400 line-clamp-2">{{ Str::limit($inquiry->message, 100) }}</p>
</div>
</td>
<td class="py-4 px-6">
@php
$statusColors = [
    'new' => 'bg-orange-100 text-orange-700 border-orange-200',
    'read' => 'bg-blue-100 text-blue-700 border-blue-200',
    'responded' => 'bg-green-100 text-green-700 border-green-200',
    'closed' => 'bg-gray-100 text-gray-700 border-gray-200'
];
@endphp
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border {{ $statusColors[$inquiry->status] ?? 'bg-gray-100 text-gray-700 border-gray-200' }}">
{{ ucfirst($inquiry->status) }}
</span>
</td>
<td class="py-4 px-6">
<span class="text-sm text-gray-500 dark:text-gray-400">{{ $inquiry->created_at->format('M j, Y') }}</span>
<span class="text-xs text-gray-400 dark:text-gray-500 block">{{ $inquiry->created_at->format('g:i A') }}</span>
</td>
<td class="py-4 px-6 text-right">
<div class="flex items-center justify-end gap-2">
<form method="POST" action="{{ route('admin.contact-inquiries.update-status', $inquiry) }}" class="inline">
@csrf
@method('PATCH')
<select name="status" onchange="this.form.submit()" class="text-xs px-2 py-1 border border-gray-200 dark:border-white/10 rounded bg-white dark:bg-surface-dark text-gray-700 dark:text-gray-300 focus:ring-1 focus:ring-primary">
<option value="new" {{ $inquiry->status === 'new' ? 'selected' : '' }}>New</option>
<option value="read" {{ $inquiry->status === 'read' ? 'selected' : '' }}>Read</option>
<option value="responded" {{ $inquiry->status === 'responded' ? 'selected' : '' }}>Responded</option>
<option value="closed" {{ $inquiry->status === 'closed' ? 'selected' : '' }}>Closed</option>
</select>
</form>
<button class="text-gray-400 hover:text-primary transition-colors p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5" title="View Details">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
<button class="text-gray-400 hover:text-red-500 transition-colors p-2 rounded-full hover:bg-red-50 dark:hover:bg-red-900/20" title="Delete">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
</td>
</tr>
@empty
<tr>
<td colspan="5" class="py-12 px-6 text-center">
<div class="flex flex-col items-center gap-3">
<div class="p-3 rounded-full bg-gray-100 dark:bg-white/5">
<span class="material-symbols-outlined text-gray-400 text-3xl">mail</span>
</div>
<h3 class="text-lg font-medium text-gray-900 dark:text-white">No contact inquiries</h3>
<p class="text-gray-500 dark:text-gray-400">Contact inquiries from your website will appear here.</p>
</div>
</td>
</tr>
@endforelse
</tbody>
</table>
</div>
<!-- Pagination -->
@if($inquiries->hasPages())
<div class="px-6 py-4 border-t border-gray-200 dark:border-white/5 flex items-center justify-between">
<span class="text-sm text-gray-500 dark:text-gray-400">
Showing {{ $inquiries->firstItem() }} to {{ $inquiries->lastItem() }} of {{ $inquiries->total() }} inquiries
</span>
<div class="flex items-center gap-2">
@if($inquiries->onFirstPage())
<button disabled class="size-8 flex items-center justify-center rounded-full border border-gray-200 dark:border-white/10 text-gray-400 cursor-not-allowed">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
</button>
@else
<a href="{{ $inquiries->previousPageUrl() }}" class="size-8 flex items-center justify-center rounded-full border border-gray-200 dark:border-white/10 text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
</a>
@endif

@foreach($inquiries->getUrlRange(1, $inquiries->lastPage()) as $page => $url)
@if($page == $inquiries->currentPage())
<button class="size-8 flex items-center justify-center rounded-full bg-primary text-background-dark font-bold text-sm">{{ $page }}</button>
@else
<a href="{{ $url }}" class="size-8 flex items-center justify-center rounded-full hover:bg-gray-100 dark:hover:bg-white/5 text-gray-600 dark:text-gray-400 text-sm">{{ $page }}</a>
@endif
@endforeach

@if($inquiries->hasMorePages())
<a href="{{ $inquiries->nextPageUrl() }}" class="size-8 flex items-center justify-center rounded-full border border-gray-200 dark:border-white/10 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
@else
<button disabled class="size-8 flex items-center justify-center rounded-full border border-gray-200 dark:border-white/10 text-gray-400 cursor-not-allowed">
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
@endif
</div>
</div>
@endif
</div>
</div>
</div>
</main>
</div>
@endsection
