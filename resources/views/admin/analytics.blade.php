@extends('layouts.admin')

@section('title', 'Admin Analytics - NGO Australia')

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
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/dashboard">
<span class="material-symbols-outlined filled">grid_view</span>
<span class="text-sm font-bold">Dashboard</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/donations">
<span class="material-symbols-outlined">volunteer_activism</span>
<span class="text-sm font-medium">Donations</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/volunteers">
<span class="material-symbols-outlined">diversity_3</span>
<span class="text-sm font-medium">Volunteers</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/programs">
<span class="material-symbols-outlined">calendar_month</span>
<span class="text-sm font-medium">Programs</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/blog">
<span class="material-symbols-outlined">article</span>
<span class="text-sm font-medium">Blog</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all" href="/admin/analytics">
<span class="material-symbols-outlined">analytics</span>
<span class="text-sm font-medium">Analytics</span>
</a>
<div class="pt-4 mt-4 border-t border-border-light dark:border-border-dark">
<p class="px-3 text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-2">System</p>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/settings">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">Settings</span>
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
<button class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-card-light dark:bg-[#2d2317] hover:bg-red-50 dark:hover:bg-red-900/20 text-text-main-light dark:text-text-main-dark hover:text-red-600 dark:hover:text-red-400 border border-border-light dark:border-border-dark transition-colors text-sm font-bold">
<span class="material-symbols-outlined text-[20px]">logout</span>
                Logout
            </button>
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
<span class="font-bold text-lg">Analytics</span>
</div>
<div class="hidden lg:flex items-center gap-2">
<h2 class="text-lg font-bold">Analytics</h2>
<span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-xs font-semibold">Admin View</span>
</div>
<div class="flex items-center justify-end gap-4 flex-1 lg:flex-none">
<!-- Search -->
<div class="hidden md:flex relative group w-64 transition-all focus-within:w-80">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-text-muted-light dark:text-text-muted-dark">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-2 border border-border-light dark:border-border-dark rounded-lg leading-5 bg-background-light dark:bg-[#2d2317] placeholder-text-muted-light dark:placeholder-text-muted-dark focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm transition-all text-text-main-light dark:text-text-main-dark" placeholder="Search records..." type="text"/>
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
<button class="hidden sm:flex items-center justify-center gap-2 rounded-lg h-9 px-4 bg-primary hover:bg-primary-hover text-white text-sm font-bold shadow-md shadow-primary/20 transition-all">
<span class="material-symbols-outlined text-[18px]">download</span>
<span>Export Report</span>
</button>
</div>
</header>
<!-- Scrollable Content Area -->
<div class="flex-1 overflow-y-auto p-4 lg:p-8 scroll-smooth">
<div class="max-w-7xl mx-auto flex flex-col gap-8 pb-10">
<!-- Page Heading -->
<div class="flex flex-wrap justify-between items-end gap-4">
<div class="flex flex-col gap-1">
<h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight">Analytics Overview</h2>
<p class="text-gray-500 dark:text-gray-400 text-base">Impact summary for <span class="font-semibold text-primary">October 2023</span>. Great job team!</p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-white bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-all shadow-sm flex items-center gap-2">
<span class="material-symbols-outlined" style="font-size: 18px;">calendar_today</span>
                                Oct 1 - Oct 31
                            </button>
<button class="px-4 py-2 text-sm font-bold text-black bg-primary rounded-lg hover:bg-[#3ec71a] transition-colors shadow-[0_0_15px_rgba(76,223,32,0.3)] flex items-center gap-2">
<span class="material-symbols-outlined" style="font-size: 18px;">download</span>
                                Export Report
                            </button>
</div>
</div>
<!-- KPI Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-6">
<!-- Stat Card 1 -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-primary" style="font-size: 64px;">payments</span>
</div>
<div class="flex flex-col gap-1 relative z-10">
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Donations</p>
<h3 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight">$124,500</h3>
<div class="flex items-center gap-1 mt-2">
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-0.5 rounded-full flex items-center">
<span class="material-symbols-outlined" style="font-size: 14px;">trending_up</span> 12%
                                    </span>
<span class="text-gray-400 dark:text-gray-500 text-xs ml-1">vs last month</span>
</div>
</div>
</div>
<!-- Stat Card 2 -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-primary" style="font-size: 64px;">diversity_1</span>
</div>
<div class="flex flex-col gap-1 relative z-10">
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Active Volunteers</p>
<h3 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight">3,200 <span class="text-lg font-medium text-gray-400">hrs</span></h3>
<div class="flex items-center gap-1 mt-2">
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-0.5 rounded-full flex items-center">
<span class="material-symbols-outlined" style="font-size: 14px;">trending_up</span> 5%
                                    </span>
<span class="text-gray-400 dark:text-gray-500 text-xs ml-1">vs last month</span>
</div>
</div>
</div>
<!-- Stat Card 3 -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-primary" style="font-size: 64px;">volunteer_activism</span>
</div>
<div class="flex flex-col gap-1 relative z-10">
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Lives Impacted</p>
<h3 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight">850 <span class="text-lg font-medium text-gray-400">families</span></h3>
<div class="flex items-center gap-1 mt-2">
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-0.5 rounded-full flex items-center">
<span class="material-symbols-outlined" style="font-size: 14px;">trending_up</span> 8%
                                    </span>
<span class="text-gray-400 dark:text-gray-500 text-xs ml-1">vs last month</span>
</div>
</div>
</div>
<!-- Stat Card 4 -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-primary" style="font-size: 64px;">public</span>
</div>
<div class="flex flex-col gap-1 relative z-10">
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Website Visits</p>
<h3 class="text-3xl font-bold text-gray-900 dark:text-white tracking-tight">12.5k</h3>
<div class="flex items-center gap-1 mt-2">
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-0.5 rounded-full flex items-center">
<span class="material-symbols-outlined" style="font-size: 14px;">trending_up</span> 2%
                                    </span>
<span class="text-gray-400 dark:text-gray-500 text-xs ml-1">vs last month</span>
</div>
</div>
</div>
</div>
<!-- Main Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Main Line Chart (Spans 2 columns) -->
<div class="lg:col-span-2 bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-xl p-6 shadow-sm">
<div class="flex items-center justify-between mb-6">
<div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white">Funding Trends</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Donations received over the current fiscal year</p>
</div>
<div class="flex gap-2">
<button class="p-1.5 rounded-md hover:bg-gray-100 dark:hover:bg-white/5 text-gray-400 transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">more_horiz</span>
</button>
</div>
</div>
<!-- Chart Placeholder -->
<div class="relative h-64 w-full">
<svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 800 300">
<defs>
<lineargradient id="gradientGreen" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#4cdf20" stop-opacity="0.3"></stop>
<stop offset="100%" stop-color="#4cdf20" stop-opacity="0"></stop>
</lineargradient>
</defs>
<!-- Grid Lines -->
<line opacity="0.2" stroke="#374151" stroke-dasharray="4" stroke-width="1" x1="0" x2="800" y1="250" y2="250"></line>
<line opacity="0.2" stroke="#374151" stroke-dasharray="4" stroke-width="1" x1="0" x2="800" y1="175" y2="175"></line>
<line opacity="0.2" stroke="#374151" stroke-dasharray="4" stroke-width="1" x1="0" x2="800" y1="100" y2="100"></line>
<!-- Area Path -->
<path d="M0,250 C100,240 150,200 200,180 C250,160 300,210 350,190 C400,170 450,100 500,80 C550,60 600,120 650,100 C700,80 750,40 800,20 V300 H0 Z" fill="url(#gradientGreen)"></path>
<!-- Line Path -->
<path d="M0,250 C100,240 150,200 200,180 C250,160 300,210 350,190 C400,170 450,100 500,80 C550,60 600,120 650,100 C700,80 750,40 800,20" fill="none" stroke="#4cdf20" stroke-linecap="round" stroke-width="3"></path>
<!-- Data Points -->
<circle cx="200" cy="180" fill="#152111" r="4" stroke="#4cdf20" stroke-width="2"></circle>
<circle cx="500" cy="80" fill="#152111" r="4" stroke="#4cdf20" stroke-width="2"></circle>
<circle cx="800" cy="20" fill="#4cdf20" r="6" stroke="#fff" stroke-width="2"></circle>
</svg>
<!-- Floating Tooltip Example -->
<div class="absolute top-0 right-0 transform -translate-x-full translate-y-4 bg-surface-dark text-white p-3 rounded-lg shadow-lg border border-gray-200 dark:border-white/5">
<p class="text-xs text-gray-400 uppercase font-bold tracking-wider mb-1">Current</p>
<p class="text-xl font-bold text-white">$14,230</p>
</div>
</div>
<!-- X Axis Labels -->
<div class="flex justify-between mt-4 px-2 text-xs font-medium text-gray-400 dark:text-gray-500">
<span>Jan</span>
<span>Feb</span>
<span>Mar</span>
<span>Apr</span>
<span>May</span>
<span>Jun</span>
<span>Jul</span>
<span>Aug</span>
<span>Sep</span>
<span>Oct</span>
</div>
</div>
<!-- Secondary Breakdown Chart -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-xl p-6 shadow-sm flex flex-col">
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Program Impact</h3>
<p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Budget allocation by sector</p>
<div class="flex-1 flex flex-col justify-center items-center gap-6">
<!-- Donut Chart Representation -->
<div class="relative size-48">
<svg class="size-full rotate-[-90deg]" viewbox="0 0 36 36">
<!-- Background Circle -->
<path class="text-gray-200 dark:text-gray-700" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3.8"></path>
<!-- Segment 1 (Primary) -->
<path class="text-primary" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="60, 100" stroke-linecap="round" stroke-width="3.8"></path>
<!-- Segment 2 -->
<path class="text-blue-500" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="20, 100" stroke-dashoffset="-60" stroke-linecap="round" stroke-width="3.8"></path>
<!-- Segment 3 -->
<path class="text-purple-500" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="15, 100" stroke-dashoffset="-80" stroke-linecap="round" stroke-width="3.8"></path>
</svg>
<div class="absolute inset-0 flex items-center justify-center flex-col">
<span class="text-3xl font-bold text-gray-900 dark:text-white">60%</span>
<span class="text-xs text-gray-500 dark:text-gray-400">Education</span>
</div>
</div>
<!-- Legend -->
<div class="w-full space-y-3">
<div class="flex items-center justify-between text-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
<span class="text-gray-600 dark:text-gray-300">Education</span>
</div>
<span class="font-medium text-gray-900 dark:text-white">60%</span>
</div>
<div class="flex items-center justify-between text-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-blue-500"></span>
<span class="text-gray-600 dark:text-gray-300">Healthcare</span>
</div>
<span class="font-medium text-gray-900 dark:text-white">20%</span>
</div>
<div class="flex items-center justify-between text-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-purple-500"></span>
<span class="text-gray-600 dark:text-gray-300">Housing</span>
</div>
<span class="font-medium text-gray-900 dark:text-white">15%</span>
</div>
</div>
</div>
</div>
</div>
<!-- Recent Activity Table -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-xl overflow-hidden shadow-sm">
<div class="p-6 border-b border-gray-200 dark:border-white/5 flex justify-between items-center">
<h3 class="text-lg font-bold text-gray-900 dark:text-white">Recent Activity</h3>
<a class="text-sm font-semibold text-primary hover:text-[#3ec71a] transition-colors" href="#">View All</a>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-gray-50 dark:bg-white/5 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
<th class="px-6 py-4">User</th>
<th class="px-6 py-4">Action</th>
<th class="px-6 py-4">Date</th>
<th class="px-6 py-4 text-right">Value</th>
<th class="px-6 py-4 text-center">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200 dark:divide-white/5 text-sm text-gray-600 dark:text-gray-300">
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-8" data-alt="Portrait of donor John Doe" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDB_wDzRYNeF_rfH5CP3jav-q_Ciujs0mMRyfXg2HkXIOTrH8RzhVPY9zqgtJf6w1V4dZ5XVA7zCArxYg7ZRMWZq9zI3gKamKoGBRwWeUv-GJfoOPrlMOJx1VqknbCAB_G7aDH1J09_V16QFNfWQ3qC_Bc71PBVhvYWLN5IxV3seieDcyKoNjsYT-edO0IVWmBf-OHDr8l9kwiomX78oGY3f_2UOETNYbxvDaqQn0txokK9um8hNtBYEXKavc4ghpLVaefVeAynZdM");'></div>
<span class="font-medium text-gray-900 dark:text-white">John Anderson</span>
</div>
</td>
<td class="px-6 py-4">Submitted a donation</td>
<td class="px-6 py-4">Oct 24, 2023</td>
<td class="px-6 py-4 text-right font-medium text-gray-900 dark:text-white">$500.00</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                                Completed
                                            </span>
</td>
</tr>
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-8" data-alt="Portrait of volunteer Sarah" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDCwZAGrbJJWQIYqehiEIyJJ5T6zT_6sxveqDI0Izk1SIpAIZ2OD-kK6yExaH5IV4ciK07HOHAuAhDZ_3q3HLxewwyqzyC_lsnxbW2MoeEtIi74_Pv2P6pLo7OlpvHQPhwL8Gq3Xiw6xYclf9KEbrzqkDiQtQextYJogh8C4b88Qy-kywtWbUK_Sy0CsYJ1t6vvf7spxYJdkveaRCHjGGYL-3M8JunwCH9vsRPDqhFxzRhe223o2pe-YmOfnRJqWQw8Kw97CM71D9g");'></div>
<span class="font-medium text-gray-900 dark:text-white">Sarah Miller</span>
</div>
</td>
<td class="px-6 py-4">Volunteer Application</td>
<td class="px-6 py-4">Oct 23, 2023</td>
<td class="px-6 py-4 text-right font-medium text-gray-900 dark:text-white">—</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">
                                                Pending
                                            </span>
</td>
</tr>
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-8" data-alt="Portrait of donor Michael" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAeSRZBAMlMdcgE_33jVK0_LokFl_MFZq6DegJHUh33ZxrFJMmZntSH3c8UKjZR58SMD3BjzSHlgvDmTGWibbsyYk1NN1JMqeB4ITEAZ0t_azCGUc9Pijl1SNGE0gZevfr_LDigwf-UkxkimzIGKrpYDfTt3m9CCafJ2kgVI0ADdIKMSU7hk4L3ySVhQNYIAbmjjj-hLfOuYB1gGmunecYpxu2NsJ17VyDZJeXiuypDYClCU59PwtC6x1oM2jHXdpUgQI5iuiV6itc");'></div>
<span class="font-medium text-gray-900 dark:text-white">Michael Chen</span>
</div>
</td>
<td class="px-6 py-4">Recurring Donation</td>
<td class="px-6 py-4">Oct 22, 2023</td>
<td class="px-6 py-4 text-right font-medium text-gray-900 dark:text-white">$50.00</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                                Completed
                                            </span>
</td>
</tr>
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-8" data-alt="Company Logo for TechCorp" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNOY6GoRrI0K7Es7CsqcKVAhrDN24JzKg3p2kK_Ldl63neU8cSrDwBRRfs1Dx0fIOPjBooBKqwfSirqFmLENZRr0xL58dXULuo3hE8Jo-S-qR0a9v9d_Bowd2O0nKy5bXJU_lVhq3-UOflG4Wa_oPnWAml3JJtliniW9oBx2agKZDhUzEhZqslQRNdITCnaftJHhsCv47NukTXMcUk0bIjmvZKa-dFFWvmSKb6lW6QwUrCR6AyjlMrL0aBasM2ltcOkwwzYnWvZzg");'></div>
<span class="font-medium text-gray-900 dark:text-white">TechCorp Inc.</span>
</div>
</td>
<td class="px-6 py-4">Corporate Grant</td>
<td class="px-6 py-4">Oct 21, 2023</td>
<td class="px-6 py-4 text-right font-medium text-gray-900 dark:text-white">$5,000.00</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                                                Processing
                                            </span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
<!-- Floating Action Button (Mobile) -->
<div class="fixed bottom-6 right-6 lg:hidden z-30">
<button class="bg-primary hover:bg-primary-hover text-white rounded-full p-4 shadow-lg shadow-primary/40 flex items-center justify-center transition-transform hover:scale-105 active:scale-95">
<span class="material-symbols-outlined text-[24px]">download</span>
</button>
</div>
</div>
@endsection
