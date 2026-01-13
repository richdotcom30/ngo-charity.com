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
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all" href="{{ route('admin.analytics') }}">
<span class="material-symbols-outlined">analytics</span>
<span class="text-sm font-medium">Analytics</span>
</a>
<div class="pt-4 mt-4 border-t border-border-light dark:border-border-dark">
<p class="px-3 text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-2">System</p>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.contact-inquiries') }}">
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
<p class="text-sm font-bold truncate">NGO Admin</p>
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
<h3 class="text-lg font-bold text-gray-900 dark:text-white">Donation Trends</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Monthly donation amounts over the past year</p>
</div>
<div class="flex gap-2">
<button class="p-1.5 rounded-md hover:bg-gray-100 dark:hover:bg-white/5 text-gray-400 transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">more_horiz</span>
</button>
</div>
</div>
<!-- Chart Canvas -->
<div class="relative h-64 w-full">
<canvas id="donationChart"></canvas>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Donation Trends Chart
    const donationCtx = document.getElementById('donationChart').getContext('2d');

    const donationData = @json($donationStats['monthly_data']);
    const labels = donationData.map(item => item.month);
    const values = donationData.map(item => item.total);

    new Chart(donationCtx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Donations ($)',
                data: values,
                borderColor: '#4cdf20',
                backgroundColor: 'rgba(76, 223, 32, 0.1)',
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#4cdf20',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 6,
                pointHoverRadius: 8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    callbacks: {
                        label: function(context) {
                            return '$' + context.parsed.y.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        callback: function(value) {
                            return '$' + value.toLocaleString();
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index'
            }
        }
    });

    // Payment Methods Pie Chart
    const paymentSection = document.createElement('div');
    paymentSection.className = 'mt-6';
    paymentSection.innerHTML = `
        <h4 class="text-md font-semibold text-gray-900 dark:text-white mb-4">Payment Methods</h4>
        <div class="flex items-center justify-center">
            <canvas id="paymentChart" width="200" height="200"></canvas>
        </div>
    `;

    const mainChartContainer = document.querySelector('.lg\\:col-span-2');
    mainChartContainer.appendChild(paymentSection);

    const paymentChartCtx = document.getElementById('paymentChart').getContext('2d');
    const paymentData = @json($donationStats['payment_methods']);

    new Chart(paymentChartCtx, {
        type: 'doughnut',
        data: {
            labels: paymentData.map(item => item.method),
            datasets: [{
                data: paymentData.map(item => item.total),
                backgroundColor: [
                    '#4cdf20',
                    '#3b82f6',
                    '#8b5cf6',
                    '#f59e0b',
                    '#ef4444'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        usePointStyle: true
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.label + ': $' + context.parsed.toLocaleString();
                        }
                    }
                }
            }
        }
    });

    // Volunteer Experience Levels Chart
    const volunteerData = @json($volunteerStats['experience_levels']);
    const volunteerSection = document.querySelector('.grid.grid-cols-1.lg\\:grid-cols-3 .bg-white.dark\\:bg-surface-dark.border:last-child');

    if (volunteerSection && volunteerData.length > 0) {
        const chartContainer = document.createElement('div');
        chartContainer.className = 'mt-6';
        chartContainer.innerHTML = `
            <h4 class="text-md font-semibold text-gray-900 dark:text-white mb-4">Volunteer Experience Levels</h4>
            <canvas id="volunteerChart" height="200"></canvas>
        `;
        volunteerSection.appendChild(chartContainer);

        const volunteerChartCtx = document.getElementById('volunteerChart').getContext('2d');
        new Chart(volunteerChartCtx, {
            type: 'bar',
            data: {
                labels: volunteerData.map(item => item.level),
                datasets: [{
                    data: volunteerData.map(item => item.count),
                    backgroundColor: '#4cdf20',
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    }

    // Program Status Distribution
    const programStatusData = @json($programStats['status_distribution']);
    const programImpactSection = document.querySelector('.flex.flex-col .bg-white.dark\\:bg-surface-dark:last-child');

    if (programImpactSection && programStatusData.length > 0) {
        const statusContainer = document.createElement('div');
        statusContainer.className = 'mt-6';
        statusContainer.innerHTML = `
            <h4 class="text-md font-semibold text-gray-900 dark:text-white mb-4">Program Status</h4>
            <canvas id="programStatusChart" height="150"></canvas>
        `;
        programImpactSection.appendChild(statusContainer);

        const programStatusChartCtx = document.getElementById('programStatusChart').getContext('2d');
        new Chart(programStatusChartCtx, {
            type: 'pie',
            data: {
                labels: programStatusData.map(item => item.status),
                datasets: [{
                    data: programStatusData.map(item => item.count),
                    backgroundColor: [
                        '#4cdf20',
                        '#3b82f6',
                        '#f59e0b',
                        '#ef4444'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    }
});
</script>
