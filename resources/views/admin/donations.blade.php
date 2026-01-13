@extends('layouts.admin')

@section('title', 'Admin - Manage Donations')

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
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all" href="{{ route('admin.donations') }}">
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
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="#">
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
<p class="text-sm font-bold truncate">NGO Admin</p>
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
<!-- Header -->
<header class="flex-shrink-0 h-16 bg-card-light dark:bg-background-dark/80 backdrop-blur-md border-b border-border-light dark:border-border-dark flex items-center justify-between px-6 z-10 sticky top-0">
<!-- Breadcrumbs -->
<div class="flex items-center gap-2 text-sm">
<a class="text-text-muted-light dark:text-text-muted-dark hover:text-white transition-colors" href="/admin/dashboard">Home</a>
<span class="text-text-muted-light dark:text-text-muted-dark">/</span>
<span class="text-white font-medium">Donations</span>
</div>
<div class="flex items-center gap-6">
<!-- Search -->
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-text-muted-light dark:text-text-muted-dark group-focus-within:text-primary transition-colors">search</span>
</div>
<input class="block w-64 pl-10 pr-3 py-2 border-none rounded-lg leading-5 bg-surface-highlight text-white placeholder-text-secondary focus:outline-none focus:ring-1 focus:ring-primary sm:text-sm transition-all" placeholder="Global search..." type="text"/>
</div>
<!-- Notifications -->
<button class="relative text-text-muted-light dark:text-text-muted-dark hover:text-white transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-0 right-0 size-2 bg-primary rounded-full border-2 border-background-dark transform translate-x-1/4 -translate-y-1/4"></span>
</button>
</div>
</header>
<!-- Scrollable Page Content -->
<div class="flex-1 overflow-y-auto p-6 lg:p-8 scroll-smooth">
<div class="max-w-7xl mx-auto flex flex-col gap-8">
<!-- Page Heading & Actions -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<h1 class="text-3xl font-bold text-white tracking-tight">Donation Management</h1>
<p class="text-text-muted-light dark:text-text-muted-dark mt-1">Track and manage incoming contributions and donor records.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center justify-center gap-2 px-4 py-2 bg-surface-highlight text-white text-sm font-bold rounded-lg hover:bg-surface-highlight/80 transition-all border border-white/5">
<span class="material-symbols-outlined text-[20px]">file_upload</span>
                            Import
                        </button>
<a href="{{ route('admin.donations.export') }}" class="flex items-center justify-center gap-2 px-4 py-2 bg-primary text-[#152112] text-sm font-bold rounded-lg hover:bg-primary/90 transition-all shadow-[0_0_15px_rgba(76,223,32,0.3)]">
<span class="material-symbols-outlined text-[20px]">download</span>
                            Export Report
                        </a>
</div>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface-highlight rounded-xl p-6 border border-white/5 relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-primary">payments</span>
</div>
<p class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium">Total Donations</p>
<p class="text-white text-3xl font-bold mt-2 tracking-tight">$124,500</p>
<div class="flex items-center gap-1 mt-2 text-primary text-sm font-medium bg-primary/10 w-fit px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[16px]">trending_up</span>
<span>+12.5%</span>
</div>
</div>
<div class="bg-surface-highlight rounded-xl p-6 border border-white/5 relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-primary">diversity_1</span>
</div>
<p class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium">Recurring Donors</p>
<p class="text-white text-3xl font-bold mt-2 tracking-tight">450</p>
<div class="flex items-center gap-1 mt-2 text-primary text-sm font-medium bg-primary/10 w-fit px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[16px]">trending_up</span>
<span>+5.0%</span>
</div>
</div>
<div class="bg-surface-highlight rounded-xl p-6 border border-white/5 relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-yellow-500">pending</span>
</div>
<p class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium">Pending Processing</p>
<p class="text-white text-3xl font-bold mt-2 tracking-tight">$1,200</p>
<div class="flex items-center gap-1 mt-2 text-red-400 text-sm font-medium bg-red-400/10 w-fit px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[16px]">trending_down</span>
<span>-2.0%</span>
</div>
</div>
</div>
<!-- Filters Toolbar -->
<div class="flex flex-col md:flex-row gap-4 bg-surface-highlight/30 p-4 rounded-xl border border-white/5 items-center justify-between">
<div class="flex flex-1 gap-4 w-full md:w-auto">
<!-- Search Table -->
<div class="relative flex-1 max-w-md">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-text-secondary">
<span class="material-symbols-outlined">search</span>
</span>
<input class="w-full bg-background-dark border border-surface-highlight text-white text-sm rounded-lg focus:ring-primary focus:border-primary block pl-10 p-2.5 placeholder-text-secondary/70" placeholder="Search by donor name, ID..." type="text"/>
</div>
<!-- Filter: Type -->
<div class="relative min-w-[140px]">
<select class="w-full bg-background-dark border border-surface-highlight text-white text-sm rounded-lg focus:ring-primary focus:border-primary block p-2.5 appearance-none cursor-pointer">
<option>All Types</option>
<option>One-time</option>
<option>Monthly</option>
<option>Annual</option>
</select>
<span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none text-text-secondary">
<span class="material-symbols-outlined">expand_more</span>
</span>
</div>
<!-- Filter: Date -->
<div class="relative min-w-[160px]">
<select class="w-full bg-background-dark border border-surface-highlight text-white text-sm rounded-lg focus:ring-primary focus:border-primary block p-2.5 appearance-none cursor-pointer">
<option>Last 30 Days</option>
<option>Last 3 Months</option>
<option>This Year</option>
<option>Custom Range</option>
</select>
<span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none text-text-secondary">
<span class="material-symbols-outlined">calendar_today</span>
</span>
</div>
</div>
<button class="text-text-secondary hover:text-primary transition-colors flex items-center gap-1 text-sm font-medium">
<span class="material-symbols-outlined text-[18px]">filter_list</span>
                        More Filters
                    </button>
</div>
<!-- Data Table -->
<div class="bg-surface-dark border border-surface-highlight rounded-xl overflow-hidden shadow-xl">
<div class="overflow-x-auto">
<table class="w-full text-left text-sm text-gray-400">
<thead class="bg-surface-highlight/50 text-text-secondary uppercase text-xs font-semibold tracking-wider">
<tr>
<th class="px-6 py-4 rounded-tl-lg" scope="col">Donor Name</th>
<th class="px-6 py-4" scope="col">Amount</th>
<th class="px-6 py-4" scope="col">Date</th>
<th class="px-6 py-4" scope="col">Type</th>
<th class="px-6 py-4" scope="col">Payment</th>
<th class="px-6 py-4" scope="col">Status</th>
<th class="px-6 py-4 text-right rounded-tr-lg" scope="col">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-highlight">
<!-- Row 1 -->
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-cover bg-center" data-alt="Portrait of Sarah Jenkins" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCb4waPGYchniilb9ca1mdZSjtteVh065ptxVL6QtXcWTedZeGUE9MriqyD2HjNNkjdXCB6X3qTyj3eHRGqCY0KizsATBwCyF4KQ-cqEchtv9amaTm6CTpqY8-7VoLhRrhFqlcGflX-z6rQOnpH3Zw4ba-rKsdNKp4Fv9qHhGLmE-UrU_k1XyKxvrD6N6oA53Sx4itJsX-hdikgccD3Mks19yCwlq0xj6cjXk_S6y-4SGm_i3ou-zhnWXLBqCcRpxzuad8V-BGKU30");'></div>
<div>
<div class="font-medium text-white">Sarah Jenkins</div>
<div class="text-xs text-text-secondary">sarah.j@example.com</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap font-medium text-white font-mono tracking-tight">$50.00</td>
<td class="px-6 py-4 whitespace-nowrap">Oct 24, 2023</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-500/10 text-blue-400">
                                            One-time
                                        </span>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">credit_card</span>
<span>Visa •••• 4242</span>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-primary/20 text-primary border border-primary/20">
<span class="size-1.5 rounded-full bg-primary"></span>
                                            Completed
                                        </div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right relative">
<div class="relative inline-block">
<button class="text-text-secondary hover:text-white p-1 rounded hover:bg-white/10 transition-colors action-dropdown-btn" data-donation-id="1">
<span class="material-symbols-outlined">more_vert</span>
</button>
<div class="action-dropdown-menu hidden absolute right-0 top-full mt-1 w-32 bg-surface-highlight border border-surface-highlight rounded-lg shadow-xl z-50">
<div class="py-1">
<button class="view-donation-btn w-full text-left px-3 py-2 text-sm text-white hover:bg-white/10 flex items-center gap-2 transition-colors" data-donation-id="1">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>View</span>
</button>
<button class="close-dropdown-btn w-full text-left px-3 py-2 text-sm text-text-secondary hover:bg-white/10 hover:text-white flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-sm">close</span>
<span>Close</span>
</button>
</div>
</div>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-cover bg-center" data-alt="Portrait of Michael Chen" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAUTar-pGE0bTo_Dwr7KJ0DszoYqYAiRxgtDxVuIv62Ln-COkuuq5pd72WuQVl3eyOlu4iGdRk9BHKDsU2j_7gkxStQDyZlmzzOhtW2GGVWt5mRYvXTKaOxbcp2N8fq4j_P6aES4OmL_JnqGxaqKLvtns7zFoJ5bmxQDaC1OZIBu63dWKNdIauj7yVpIgCbkHrwOfCH88o2uSsCVqkmhSRgdXsICowaP95qLGQFDh09Bn-ZWIn4vpeBcYxy7K2V1gaLuaUI44qC_wc");'></div>
<div>
<div class="font-medium text-white">Michael Chen</div>
<div class="text-xs text-text-secondary">m.chen@tech.co</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap font-medium text-white font-mono tracking-tight">$120.00</td>
<td class="px-6 py-4 whitespace-nowrap">Oct 23, 2023</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-purple-500/10 text-purple-400">
                                            Monthly
                                        </span>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">account_balance</span>
<span>PayPal</span>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-500/20 text-yellow-500 border border-yellow-500/20">
<span class="size-1.5 rounded-full bg-yellow-500 animate-pulse"></span>
                                            Pending
                                        </div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right relative">
<div class="relative inline-block">
<button class="text-text-secondary hover:text-white p-1 rounded hover:bg-white/10 transition-colors action-dropdown-btn" data-donation-id="2">
<span class="material-symbols-outlined">more_vert</span>
</button>
<div class="action-dropdown-menu hidden absolute right-0 top-full mt-1 w-32 bg-surface-highlight border border-surface-highlight rounded-lg shadow-xl z-50">
<div class="py-1">
<button class="view-donation-btn w-full text-left px-3 py-2 text-sm text-white hover:bg-white/10 flex items-center gap-2 transition-colors" data-donation-id="2">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>View</span>
</button>
<button class="close-dropdown-btn w-full text-left px-3 py-2 text-sm text-text-secondary hover:bg-white/10 hover:text-white flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-sm">close</span>
<span>Close</span>
</button>
</div>
</div>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-primary flex items-center justify-center text-background-dark font-bold text-sm">
                                                EL
                                            </div>
<div>
<div class="font-medium text-white">Emma Larson</div>
<div class="text-xs text-text-secondary">emma.l@domain.net</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap font-medium text-white font-mono tracking-tight">$25.00</td>
<td class="px-6 py-4 whitespace-nowrap">Oct 23, 2023</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-500/10 text-blue-400">
                                            One-time
                                        </span>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">credit_card</span>
<span>Mastercard •••• 8812</span>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-red-500/20 text-red-400 border border-red-500/20">
<span class="size-1.5 rounded-full bg-red-400"></span>
                                            Failed
                                        </div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right relative">
<div class="relative inline-block">
<button class="text-text-secondary hover:text-white p-1 rounded hover:bg-white/10 transition-colors action-dropdown-btn" data-donation-id="3">
<span class="material-symbols-outlined">more_vert</span>
</button>
<div class="action-dropdown-menu hidden absolute right-0 top-full mt-1 w-32 bg-surface-highlight border border-surface-highlight rounded-lg shadow-xl z-50">
<div class="py-1">
<button class="view-donation-btn w-full text-left px-3 py-2 text-sm text-white hover:bg-white/10 flex items-center gap-2 transition-colors" data-donation-id="3">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>View</span>
</button>
<button class="close-dropdown-btn w-full text-left px-3 py-2 text-sm text-text-secondary hover:bg-white/10 hover:text-white flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-sm">close</span>
<span>Close</span>
</button>
</div>
</div>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-cover bg-center" data-alt="Portrait of David Kim" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAn5IUe6XoHKW8aOouVvNisCelO03_56qkwn3R1NqNmOb7zXIwxnwIFh7f6mGiAPGFShFo7Xj3BjZZRXRs9CDsXZrrPRZf7n5bl3GeaZigEZDtD1qSWvHd0rMVNbI564OfVHkL9STXs9ynuXpwOZnHWZYSE-CxK-snbeOsypZvApYCYabEpmn0ER0I3Zo8qSEhZseEo4tb1YZJjbFFORsSihvH3J3K81eD_p7DSZDLD6LEdNF4wCZemdnZBQRkBGoZJzDfQbCXm4k");'></div>
<div>
<div class="font-medium text-white">David Kim</div>
<div class="text-xs text-text-secondary">david.kim@studio.io</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap font-medium text-white font-mono tracking-tight">$500.00</td>
<td class="px-6 py-4 whitespace-nowrap">Oct 22, 2023</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-purple-500/10 text-purple-400">
                                            Monthly
                                        </span>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">credit_card</span>
<span>Amex •••• 1002</span>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-primary/20 text-primary border border-primary/20">
<span class="size-1.5 rounded-full bg-primary"></span>
                                            Completed
                                        </div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right relative">
<div class="relative inline-block">
<button class="text-text-secondary hover:text-white p-1 rounded hover:bg-white/10 transition-colors action-dropdown-btn" data-donation-id="4">
<span class="material-symbols-outlined">more_vert</span>
</button>
<div class="action-dropdown-menu hidden absolute right-0 top-full mt-1 w-32 bg-surface-highlight border border-surface-highlight rounded-lg shadow-xl z-50">
<div class="py-1">
<button class="view-donation-btn w-full text-left px-3 py-2 text-sm text-white hover:bg-white/10 flex items-center gap-2 transition-colors" data-donation-id="4">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>View</span>
</button>
<button class="close-dropdown-btn w-full text-left px-3 py-2 text-sm text-text-secondary hover:bg-white/10 hover:text-white flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-sm">close</span>
<span>Close</span>
</button>
</div>
</div>
</div>
</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-cover bg-center" data-alt="Portrait of Sophia Martinez" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMw1aLQNeu2uNiTiH2tXk-kSPUztbqGeHL1TVYFUctbuSZy4x15p6VgNVdRJkRMBwQVGze9M7Gv6d-k7kH4hHrCtUvzyiKEyJCuHILhO9r_XSG7T1M6EOJcYD98j2irzA-gRna8vR1JbHkqI2YCUXWiU-CdJYst1QG80jGX56TjhRclCLTBLipxsjb7O0CJeL46stPaHFH_3Z4G3_FvZ9PYNHqqLHeySMD8MKtUUkxgXu48TmkxGIm1_zUnAyAQulDZWiC3T3cMMQ");'></div>
<div>
<div class="font-medium text-white">Sophia Martinez</div>
<div class="text-xs text-text-secondary">sophia.m@global.org</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap font-medium text-white font-mono tracking-tight">$75.00</td>
<td class="px-6 py-4 whitespace-nowrap">Oct 22, 2023</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-500/10 text-blue-400">
                                            One-time
                                        </span>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">credit_card</span>
<span>Visa •••• 9921</span>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-primary/20 text-primary border border-primary/20">
<span class="size-1.5 rounded-full bg-primary"></span>
                                            Completed
                                        </div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-right relative">
<div class="relative inline-block">
<button class="text-text-secondary hover:text-white p-1 rounded hover:bg-white/10 transition-colors action-dropdown-btn" data-donation-id="5">
<span class="material-symbols-outlined">more_vert</span>
</button>
<div class="action-dropdown-menu hidden absolute right-0 top-full mt-1 w-32 bg-surface-highlight border border-surface-highlight rounded-lg shadow-xl z-50">
<div class="py-1">
<button class="view-donation-btn w-full text-left px-3 py-2 text-sm text-white hover:bg-white/10 flex items-center gap-2 transition-colors" data-donation-id="5">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>View</span>
</button>
<button class="close-dropdown-btn w-full text-left px-3 py-2 text-sm text-text-secondary hover:bg-white/10 hover:text-white flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-sm">close</span>
<span>Close</span>
</button>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="bg-surface-highlight/20 px-6 py-4 border-t border-surface-highlight flex items-center justify-between">
<p class="text-sm text-text-secondary">
                            Showing <span class="font-medium text-white">1</span> to <span class="font-medium text-white">5</span> of <span class="font-medium text-white">128</span> results
                        </p>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 text-sm font-medium text-text-secondary hover:text-white disabled:opacity-50 disabled:cursor-not-allowed transition-colors rounded hover:bg-white/5" disabled="">
                                Previous
                            </button>
<button class="px-3 py-1.5 text-sm font-medium text-white bg-primary text-[#152112] rounded transition-colors hover:bg-primary/90">
                                1
                            </button>
<button class="px-3 py-1.5 text-sm font-medium text-text-secondary hover:text-white rounded hover:bg-white/5 transition-colors">
                                2
                            </button>
<button class="px-3 py-1.5 text-sm font-medium text-text-secondary hover:text-white rounded hover:bg-white/5 transition-colors">
                                3
                            </button>
<span class="text-text-secondary">...</span>
<button class="px-3 py-1.5 text-sm font-medium text-text-secondary hover:text-white rounded hover:bg-white/5 transition-colors">
                                Next
                            </button>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="mt-12 mb-4 text-center">
<p class="text-text-secondary text-sm">© 2023 Hope Foundation Admin Panel. Designed for change.</p>
</footer>
</div>
</div>
</main>

<!-- Donation Detail Modal -->
<div id="donationModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
<div class="flex items-center justify-center min-h-screen p-4">
<div class="bg-surface-dark border border-surface-highlight rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
<!-- Modal Header -->
<div class="flex items-center justify-between p-6 border-b border-surface-highlight">
<h2 class="text-xl font-bold text-white flex items-center gap-3">
<span class="material-symbols-outlined text-primary">receipt_long</span>
Donation Details
</h2>
<button id="closeModalBtn" class="text-text-secondary hover:text-white transition-colors p-2 hover:bg-white/10 rounded-lg">
<span class="material-symbols-outlined">close</span>
</button>
</div>

<!-- Modal Content -->
<div class="p-6 overflow-y-auto max-h-[calc(90vh-120px)]">
<div id="donationDetailContent">
<!-- Content will be loaded here -->
<div class="flex items-center justify-center py-12">
<div class="animate-spin rounded-full h-8 w-8 border-2 border-primary border-t-transparent"></div>
<span class="ml-3 text-text-secondary">Loading donation details...</span>
</div>
</div>
</div>

<!-- Modal Footer -->
<div class="flex items-center justify-end gap-3 p-6 border-t border-surface-highlight bg-surface-highlight/20">
<button id="closeModalFooterBtn" class="px-4 py-2 text-text-secondary hover:text-white hover:bg-white/10 rounded-lg transition-colors">
Close
</button>
</div>
</div>
</div>
</div>

<!-- JavaScript for Dropdown and Modal -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle dropdown toggle
    document.querySelectorAll('.action-dropdown-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();

            const donationId = this.getAttribute('data-donation-id');
            const dropdown = this.nextElementSibling;

            // Close all other dropdowns
            document.querySelectorAll('.action-dropdown-menu').forEach(menu => {
                if (menu !== dropdown) {
                    menu.classList.add('hidden');
                }
            });

            // Toggle current dropdown
            dropdown.classList.toggle('hidden');
        });
    });

    // Close dropdown when clicking close button
    document.querySelectorAll('.close-dropdown-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdown = this.closest('.action-dropdown-menu');
            dropdown.classList.add('hidden');
        });
    });

    // Handle view donation button
    document.querySelectorAll('.view-donation-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const donationId = this.getAttribute('data-donation-id');

            // Close dropdown
            const dropdown = this.closest('.action-dropdown-menu');
            dropdown.classList.add('hidden');

            // Show modal
            showDonationModal(donationId);
        });
    });

    // Close modal when clicking outside or close buttons
    document.getElementById('donationModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideDonationModal();
        }
    });

    document.getElementById('closeModalBtn').addEventListener('click', hideDonationModal);
    document.getElementById('closeModalFooterBtn').addEventListener('click', hideDonationModal);

    // Close dropdowns when clicking outside
    document.addEventListener('click', function() {
        document.querySelectorAll('.action-dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
    });

    // Prevent dropdown from closing when clicking inside
    document.querySelectorAll('.action-dropdown-menu').forEach(menu => {
        menu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
});

function showDonationModal(donationId) {
    const modal = document.getElementById('donationModal');
    const content = document.getElementById('donationDetailContent');

    // Show modal
    modal.classList.remove('hidden');

    // Load donation details (mock data for demo)
    loadDonationDetails(donationId);
}

function hideDonationModal() {
    const modal = document.getElementById('donationModal');
    modal.classList.add('hidden');
}

function loadDonationDetails(donationId) {
    const content = document.getElementById('donationDetailContent');

    // Mock donation data based on donation ID
    const mockDonations = {
        1: {
            donor: { name: 'Sarah Jenkins', email: 'sarah.j@example.com', phone: '+61 400 123 456' },
            amount: 50.00,
            currency: 'AUD',
            type: 'One-time',
            paymentMethod: 'Stripe',
            paymentDetails: 'Visa ending in 4242',
            transactionId: 'txn_1N8X9B2eZvKYlo2C8X9B2eZv',
            status: 'Completed',
            date: 'October 24, 2023',
            time: '2:30 PM UTC'
        },
        2: {
            donor: { name: 'Michael Chen', email: 'm.chen@tech.co', phone: '+61 401 234 567' },
            amount: 120.00,
            currency: 'AUD',
            type: 'Monthly',
            paymentMethod: 'PayPal',
            paymentDetails: 'PayPal account',
            transactionId: 'PAY-8X9B2eZvKYlo2C8X9B2eZv',
            status: 'Pending',
            date: 'October 23, 2023',
            time: '4:15 PM UTC'
        },
        3: {
            donor: { name: 'Emma Larson', email: 'emma.l@domain.net', phone: '+61 402 345 678' },
            amount: 25.00,
            currency: 'AUD',
            type: 'One-time',
            paymentMethod: 'Stripe',
            paymentDetails: 'Mastercard ending in 8812',
            transactionId: 'txn_2N8X9B2eZvKYlo2C8X9B2eZv',
            status: 'Failed',
            date: 'October 23, 2023',
            time: '1:45 PM UTC'
        },
        4: {
            donor: { name: 'David Kim', email: 'david.kim@studio.io', phone: '+61 403 456 789' },
            amount: 500.00,
            currency: 'AUD',
            type: 'Monthly',
            paymentMethod: 'Stripe',
            paymentDetails: 'Amex ending in 1002',
            transactionId: 'txn_3N8X9B2eZvKYlo2C8X9B2eZv',
            status: 'Completed',
            date: 'October 22, 2023',
            time: '3:20 PM UTC'
        },
        5: {
            donor: { name: 'Sophia Martinez', email: 'sophia.m@global.org', phone: '+61 404 567 890' },
            amount: 75.00,
            currency: 'AUD',
            type: 'One-time',
            paymentMethod: 'Stripe',
            paymentDetails: 'Visa ending in 9921',
            transactionId: 'txn_4N8X9B2eZvKYlo2C8X9B2eZv',
            status: 'Completed',
            date: 'October 22, 2023',
            time: '5:10 PM UTC'
        }
    };

    const donation = mockDonations[donationId];

    if (donation) {
        content.innerHTML = `
            <div class="space-y-6">
                <!-- Donor Information -->
                <div class="bg-surface-highlight/30 rounded-xl p-6 border border-surface-highlight">
                    <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">person</span>
                        Donor Information
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-text-secondary">Full Name</p>
                            <p class="text-white font-medium">${donation.donor.name}</p>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Email Address</p>
                            <p class="text-white font-medium">${donation.donor.email}</p>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Phone Number</p>
                            <p class="text-white font-medium">${donation.donor.phone}</p>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Donation Type</p>
                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-500/10 text-blue-400">
                                ${donation.type}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Payment Information -->
                <div class="bg-surface-highlight/30 rounded-xl p-6 border border-surface-highlight">
                    <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">payments</span>
                        Payment Information
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-text-secondary">Amount</p>
                            <p class="text-2xl font-bold text-primary">A$${donation.amount.toFixed(2)}</p>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Payment Method</p>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">${donation.paymentMethod === 'Stripe' ? 'credit_card' : 'account_balance'}</span>
                                <span class="text-white font-medium">${donation.paymentMethod}</span>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Payment Details</p>
                            <p class="text-white font-medium">${donation.paymentDetails}</p>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Status</p>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium ${donation.status === 'Completed' ? 'bg-primary/20 text-primary border border-primary/20' : donation.status === 'Pending' ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/20' : 'bg-red-500/20 text-red-400 border border-red-500/20'}">
                                <span class="size-1.5 rounded-full ${donation.status === 'Completed' ? 'bg-primary' : donation.status === 'Pending' ? 'bg-yellow-500 animate-pulse' : 'bg-red-400'}"></span>
                                ${donation.status}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Transaction Details -->
                <div class="bg-surface-highlight/30 rounded-xl p-6 border border-surface-highlight">
                    <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">receipt</span>
                        Transaction Details
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-text-secondary">Transaction ID</p>
                            <p class="text-white font-mono text-sm font-medium">${donation.transactionId}</p>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Date & Time</p>
                            <p class="text-white font-medium">${donation.date} at ${donation.time}</p>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Currency</p>
                            <p class="text-white font-medium">${donation.currency}</p>
                        </div>
                        <div>
                            <p class="text-sm text-text-secondary">Processing Fee</p>
                            <p class="text-white font-medium">A$${(donation.amount * 0.029 + 0.30).toFixed(2)}</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="bg-surface-highlight/30 rounded-xl p-6 border border-surface-highlight">
                    <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">info</span>
                        Additional Information
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between py-2 border-b border-surface-highlight">
                            <span class="text-text-secondary">Tax Deductible</span>
                            <span class="text-green-400 font-medium">Yes</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-surface-highlight">
                            <span class="text-text-secondary">Receipt Sent</span>
                            <span class="text-green-400 font-medium">Yes</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-surface-highlight">
                            <span class="text-text-secondary">Email Confirmation</span>
                            <span class="text-green-400 font-medium">Yes</span>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <span class="text-text-secondary">Admin Notification</span>
                            <span class="text-green-400 font-medium">Yes</span>
                        </div>
                    </div>
                </div>
            </div>
        `;
    } else {
        content.innerHTML = `
            <div class="flex items-center justify-center py-12">
                <div class="text-center">
                    <span class="material-symbols-outlined text-6xl text-red-400 mb-4">error</span>
                    <h3 class="text-xl font-bold text-white mb-2">Donation Not Found</h3>
                    <p class="text-text-secondary">Unable to load donation details. Please try again.</p>
                </div>
            </div>
        `;
    }
}
</script>
</div>
@endsection
