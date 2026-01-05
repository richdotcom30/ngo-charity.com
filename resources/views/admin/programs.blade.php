@extends('layouts.admin')

@section('title', 'Admin Programs - NGO Australia')

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
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/volunteers">
<span class="material-symbols-outlined">diversity_3</span>
<span class="text-sm font-medium">Volunteers</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all" href="/admin/programs">
<span class="material-symbols-outlined">calendar_month</span>
<span class="text-sm font-medium">Programs</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/blog">
<span class="material-symbols-outlined">article</span>
<span class="text-sm font-medium">Blog</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/donations">
<span class="material-symbols-outlined">volunteer_activism</span>
<span class="text-sm font-medium">Donations</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="#analytics">
<span class="material-symbols-outlined">analytics</span>
<span class="text-sm font-medium">Analytics</span>
</a>
<div class="pt-4 mt-4 border-t border-border-light dark:border-border-dark">
<p class="px-3 text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-2">System</p>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="#settings">
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
<span class="font-bold text-lg">Programs</span>
</div>
<div class="hidden lg:flex items-center gap-2">
<h2 class="text-lg font-bold">Programs</h2>
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
<span class="material-symbols-outlined text-[18px]">add</span>
<span>Add New</span>
</button>
</div>
</header>
<!-- Scrollable Content Area -->
<div class="flex-1 overflow-y-auto p-4 lg:p-8 scroll-smooth">
<div class="max-w-6xl mx-auto flex flex-col gap-8">
<!-- Page Heading & Actions -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
<div class="flex flex-col gap-2 max-w-2xl">
<h2 class="text-white text-3xl md:text-4xl font-extrabold leading-tight tracking-tight">Manage Programs</h2>
<p class="text-text-muted text-base md:text-lg">Oversee and update the initiatives driving change across Australia. Track impact and manage resources efficiently.</p>
</div>
<button class="flex items-center justify-center gap-2 rounded-xl bg-primary hover:bg-primary-hover text-background-dark px-6 py-3 font-bold transition-all shadow-[0_0_15px_rgba(76,223,32,0.3)] hover:shadow-[0_0_25px_rgba(76,223,32,0.5)] transform hover:-translate-y-0.5 active:translate-y-0">
<span class="material-symbols-outlined">add</span>
                        New Program
                    </button>
</div>
<!-- Key Metrics Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<!-- Stat Card 1 -->
<div class="flex flex-col gap-1 rounded-2xl p-6 bg-surface-dark border border-border-dark hover:border-primary/30 transition-all group">
<div class="flex justify-between items-start">
<p class="text-text-muted text-sm font-medium uppercase tracking-wider">Total Programs</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">inventory_2</span>
</div>
<p class="text-white text-3xl font-bold mt-2">24</p>
<p class="text-primary text-sm font-medium flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-sm">trending_up</span>
                            +2 this month
                        </p>
</div>
<!-- Stat Card 2 -->
<div class="flex flex-col gap-1 rounded-2xl p-6 bg-surface-dark border border-border-dark hover:border-primary/30 transition-all group">
<div class="flex justify-between items-start">
<p class="text-text-muted text-sm font-medium uppercase tracking-wider">Active Campaigns</p>
<span class="material-symbols-outlined text-white bg-white/5 p-2 rounded-lg group-hover:text-primary group-hover:bg-primary/10 transition-colors">campaign</span>
</div>
<p class="text-white text-3xl font-bold mt-2">8</p>
<p class="text-text-muted text-sm font-medium mt-1">Currently running</p>
</div>
<!-- Stat Card 3 -->
<div class="flex flex-col gap-1 rounded-2xl p-6 bg-surface-dark border border-border-dark hover:border-primary/30 transition-all group">
<div class="flex justify-between items-start">
<p class="text-text-muted text-sm font-medium uppercase tracking-wider">Funds Raised</p>
<span class="material-symbols-outlined text-white bg-white/5 p-2 rounded-lg group-hover:text-primary group-hover:bg-primary/10 transition-colors">attach_money</span>
</div>
<p class="text-white text-3xl font-bold mt-2">$1.2M</p>
<p class="text-primary text-sm font-medium flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-sm">trending_up</span>
                            +12% vs last year
                        </p>
</div>
</div>
<!-- Filters & Search Bar -->
<div class="flex flex-col md:flex-row gap-4 p-4 bg-surface-dark rounded-2xl border border-border-dark items-center justify-between">
<div class="relative flex-1">
<span class="absolute left-3 top-1/2 -translate-y-1/2 text-text-muted material-symbols-outlined">search</span>
<input class="w-full bg-background-dark border border-border-dark rounded-xl pl-10 pr-4 py-2.5 text-white placeholder-text-muted focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="Search programs..." type="text"/>
</div>
<div class="flex flex-wrap items-center gap-3 w-full md:w-auto">
<div class="relative">
<select class="appearance-none bg-background-dark border border-border-dark text-white text-sm rounded-xl pl-4 pr-10 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none cursor-pointer hover:bg-border-dark/30 transition-colors">
<option>Status: All</option>
<option>Active</option>
<option>Completed</option>
<option>Draft</option>
</select>
<span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-lg">expand_more</span>
</div>
<div class="relative">
<select class="appearance-none bg-background-dark border border-border-dark text-white text-sm rounded-xl pl-4 pr-10 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none cursor-pointer hover:bg-border-dark/30 transition-colors">
<option>Category: All</option>
<option>Environment</option>
<option>Education</option>
<option>Health</option>
</select>
<span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 text-text-muted pointer-events-none text-lg">expand_more</span>
</div>
<button class="flex items-center justify-center size-10 rounded-xl bg-background-dark border border-border-dark text-text-muted hover:text-white hover:border-white/20 transition-all">
<span class="material-symbols-outlined">filter_list</span>
</button>
</div>
</div>
<!-- Program List -->
<div class="flex flex-col gap-4">
<!-- Header Row (Hidden on mobile) -->
<div class="hidden md:grid grid-cols-12 gap-4 px-6 text-xs font-semibold uppercase tracking-wider text-text-muted">
<div class="col-span-5">Program Details</div>
<div class="col-span-3">Status</div>
<div class="col-span-3">Impact Metrics</div>
<div class="col-span-1 text-right">Actions</div>
</div>
<!-- Program Item 1 -->
<div class="bg-surface-dark border border-border-dark rounded-2xl p-4 hover:border-primary/30 transition-all duration-300 group shadow-sm hover:shadow-md">
<div class="flex flex-col md:grid md:grid-cols-12 gap-6 items-center">
<!-- Main Info -->
<div class="col-span-5 flex items-center gap-4 w-full">
<div class="shrink-0 size-16 md:size-20 rounded-xl bg-cover bg-center overflow-hidden relative shadow-inner" data-alt="Community gardening project in Sydney" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrvKrhNGNVUYGgstP1QF5X13EL5gk7ptW179aRo6avXhhpEdutJ8Bu5m-NguBiMWUWcqe_hgExF8FDu4wFFsf6e6hpgyGhdFDMEbzENFumKoB5dWBIWWDbelv6YNoJn4EnhfjO-UCrzmaAXGcEgVPaQyrMec4sFDA-bJQuuamjl9s_MPlCDphUAIqCz-sQLEJwSWTWqUBnZbT29vJpCkz8xpXxZHG4005-Z6TSZSVMk1TQOFdUGTSymsg9eVpWQJuW6gPuCHBGiAQ");'>
<div class="absolute inset-0 bg-black/10"></div>
</div>
<div class="flex flex-col gap-1 min-w-0">
<h3 class="text-white font-bold text-lg truncate group-hover:text-primary transition-colors">Sydney Urban Greening</h3>
<div class="flex items-center gap-2 text-sm text-text-muted">
<span class="material-symbols-outlined text-sm">location_on</span>
<span data-location="Sydney">Sydney, AU</span>
<span class="size-1 bg-text-muted rounded-full mx-1"></span>
<span>Environment</span>
</div>
</div>
</div>
<!-- Status -->
<div class="col-span-3 w-full flex md:block">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-[#1e3a18] text-[#4cdf20] border border-[#4cdf20]/20">
<span class="size-2 rounded-full bg-[#4cdf20] animate-pulse"></span>
                                    Active Campaign
                                </span>
<p class="text-text-muted text-xs mt-2">Ends in 12 days</p>
</div>
<!-- Metrics -->
<div class="col-span-3 w-full flex flex-col gap-2">
<div class="flex justify-between text-sm">
<span class="text-white font-bold">$45,000</span>
<span class="text-text-muted">of $50k</span>
</div>
<div class="h-2 w-full bg-background-dark rounded-full overflow-hidden border border-border-dark/50">
<div class="h-full bg-primary rounded-full" style="width: 90%"></div>
</div>
<p class="text-text-muted text-xs">90% Funded • 142 Donors</p>
</div>
<!-- Actions -->
<div class="col-span-1 w-full flex justify-end gap-2">
<button class="size-9 rounded-lg flex items-center justify-center text-text-muted hover:text-white hover:bg-background-dark transition-colors" title="Edit Program">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<div class="relative group/menu">
<button class="size-9 rounded-lg flex items-center justify-center text-text-muted hover:text-white hover:bg-background-dark transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</div>
</div>
</div>
<!-- Program Item 2 -->
<div class="bg-surface-dark border border-border-dark rounded-2xl p-4 hover:border-primary/30 transition-all duration-300 group shadow-sm hover:shadow-md">
<div class="flex flex-col md:grid md:grid-cols-12 gap-6 items-center">
<!-- Main Info -->
<div class="col-span-5 flex items-center gap-4 w-full">
<div class="shrink-0 size-16 md:size-20 rounded-xl bg-cover bg-center overflow-hidden relative shadow-inner" data-alt="Classroom full of diverse children learning" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBjxrKW4quFREKWCh5pgkCaOyYw4boVKCCSpP86i10V8Cxqqq3YjxWnru7BqmChXJ_j59_etAj02Ijwlv67frVvpj313gH6s_h1GupCk3MV_5MDv8h_prnmTOohQlncJDlXJyl0AIZPHP-wDyNlmAUuIFLRTWfRJk8_aZyeIRo7S03NKY1Dctb9VxdOblt1nYRlofS_p2GDDFck8tQao4zrzhDo6iZTblwCXXsAdPZxfAU8eWNpfMYxTw2AKKpDaYfgNqANLMkrk");'>
<div class="absolute inset-0 bg-black/10"></div>
</div>
<div class="flex flex-col gap-1 min-w-0">
<h3 class="text-white font-bold text-lg truncate group-hover:text-primary transition-colors">Indigenous Youth Tech</h3>
<div class="flex items-center gap-2 text-sm text-text-muted">
<span class="material-symbols-outlined text-sm">location_on</span>
<span data-location="Melbourne">Melbourne, AU</span>
<span class="size-1 bg-text-muted rounded-full mx-1"></span>
<span>Education</span>
</div>
</div>
</div>
<!-- Status -->
<div class="col-span-3 w-full flex md:block">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-[#1e3a18] text-[#4cdf20] border border-[#4cdf20]/20">
<span class="size-2 rounded-full bg-[#4cdf20] animate-pulse"></span>
                                    Active Campaign
                                </span>
<p class="text-text-muted text-xs mt-2">Ends in 45 days</p>
</div>
<!-- Metrics -->
<div class="col-span-3 w-full flex flex-col gap-2">
<div class="flex justify-between text-sm">
<span class="text-white font-bold">$12,450</span>
<span class="text-text-muted">of $80k</span>
</div>
<div class="h-2 w-full bg-background-dark rounded-full overflow-hidden border border-border-dark/50">
<div class="h-full bg-primary rounded-full" style="width: 15%"></div>
</div>
<p class="text-text-muted text-xs">15% Funded • 34 Donors</p>
</div>
<!-- Actions -->
<div class="col-span-1 w-full flex justify-end gap-2">
<button class="size-9 rounded-lg flex items-center justify-center text-text-muted hover:text-white hover:bg-background-dark transition-colors" title="Edit Program">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="size-9 rounded-lg flex items-center justify-center text-text-muted hover:text-white hover:bg-background-dark transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</div>
</div>
<!-- Program Item 3 (Completed) -->
<div class="bg-surface-dark border border-border-dark rounded-2xl p-4 hover:border-gray-500 transition-all duration-300 group opacity-80 hover:opacity-100">
<div class="flex flex-col md:grid md:grid-cols-12 gap-6 items-center">
<!-- Main Info -->
<div class="col-span-5 flex items-center gap-4 w-full">
<div class="shrink-0 size-16 md:size-20 rounded-xl bg-cover bg-center overflow-hidden relative shadow-inner grayscale group-hover:grayscale-0 transition-all" data-alt="Volunteer doctors checking patient health" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfK3x8hkEowegEfxddJxDoHrny4aHcHJcJi4ghLgpWSr3H8RLMhYtNOwd4tPTWxd6cBAh18xZweEWST_1GJFfrCkyaAS827j_r04l2gmJp5_JGlJdRlDIqlfO32bV4PLUDqZEZ5U32L398EpL91VePzKIG3E0W3j8m6V_Ttu7Bw41Ma8lHCk94oKU6wjGJomn5hcCgJFyrXu0n0qVkBeq9AhCdfEFiepbkXe3-T9V9TKN4hkbodMHYxPb4HyDbmKeAuQPasMBB1ow");'>
<div class="absolute inset-0 bg-black/10"></div>
</div>
<div class="flex flex-col gap-1 min-w-0">
<h3 class="text-white font-bold text-lg truncate">Rural Health Initiative</h3>
<div class="flex items-center gap-2 text-sm text-text-muted">
<span class="material-symbols-outlined text-sm">location_on</span>
<span data-location="Queensland">Queensland, AU</span>
<span class="size-1 bg-text-muted rounded-full mx-1"></span>
<span>Health</span>
</div>
</div>
</div>
<!-- Status -->
<div class="col-span-3 w-full flex md:block">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white/10 text-white border border-white/10">
<span class="material-symbols-outlined text-[14px]">check_circle</span>
                                    Completed
                                </span>
<p class="text-text-muted text-xs mt-2">Ended Oct 2023</p>
</div>
<!-- Metrics -->
<div class="col-span-3 w-full flex flex-col gap-2">
<div class="flex justify-between text-sm">
<span class="text-white font-bold">$120,000</span>
<span class="text-primary font-bold">Goal Met!</span>
</div>
<div class="h-2 w-full bg-background-dark rounded-full overflow-hidden border border-border-dark/50">
<div class="h-full bg-white rounded-full" style="width: 100%"></div>
</div>
<p class="text-text-muted text-xs">100% Funded • 840 Donors</p>
</div>
<!-- Actions -->
<div class="col-span-1 w-full flex justify-end gap-2">
<button class="size-9 rounded-lg flex items-center justify-center text-text-muted hover:text-white hover:bg-background-dark transition-colors" title="View Report">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
<button class="size-9 rounded-lg flex items-center justify-center text-text-muted hover:text-white hover:bg-background-dark transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
</div>
</div>
<!-- Program Item 4 (Draft) -->
<div class="bg-surface-dark border border-border-dark border-dashed rounded-2xl p-4 hover:border-primary/50 transition-all duration-300 group">
<div class="flex flex-col md:grid md:grid-cols-12 gap-6 items-center">
<!-- Main Info -->
<div class="col-span-5 flex items-center gap-4 w-full">
<div class="shrink-0 size-16 md:size-20 rounded-xl bg-surface-dark flex items-center justify-center border-2 border-dashed border-border-dark text-text-muted group-hover:border-primary/50 group-hover:text-primary transition-colors">
<span class="material-symbols-outlined text-3xl">image</span>
</div>
<div class="flex flex-col gap-1 min-w-0">
<h3 class="text-text-muted group-hover:text-white font-bold text-lg truncate transition-colors italic">Clean Oceans 2024 (Draft)</h3>
<div class="flex items-center gap-2 text-sm text-text-muted">
<span class="material-symbols-outlined text-sm">edit_note</span>
<span>Last edited 2 hours ago</span>
</div>
</div>
</div>
<!-- Status -->
<div class="col-span-3 w-full flex md:block">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-yellow-500/10 text-yellow-500 border border-yellow-500/20">
<span class="material-symbols-outlined text-[14px] fill-1">draft</span>
                                    Draft
                                </span>
</div>
<!-- Metrics -->
<div class="col-span-3 w-full flex flex-col gap-2">
<div class="flex justify-between text-sm">
<span class="text-text-muted italic">Goal not set</span>
</div>
<div class="h-2 w-full bg-background-dark rounded-full overflow-hidden border border-border-dark/50">
</div>
</div>
<!-- Actions -->
<div class="col-span-1 w-full flex justify-end gap-2">
<button class="px-3 py-1.5 rounded-lg flex items-center justify-center bg-primary/10 text-primary hover:bg-primary hover:text-black transition-colors text-xs font-bold uppercase tracking-wide">
                                    Resume
                                </button>
<button class="size-9 rounded-lg flex items-center justify-center text-text-muted hover:text-red-400 hover:bg-background-dark transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="flex items-center justify-between border-t border-border-dark pt-6 mt-4">
<p class="text-sm text-text-muted">Showing <span class="text-white font-bold">1-4</span> of <span class="text-white font-bold">24</span> programs</p>
<div class="flex gap-2">
<button class="px-4 py-2 rounded-lg bg-surface-dark border border-border-dark text-text-muted cursor-not-allowed opacity-50 text-sm font-medium">Previous</button>
<button class="px-4 py-2 rounded-lg bg-surface-dark border border-border-dark text-white hover:border-primary/50 hover:text-primary transition-colors text-sm font-medium">Next</button>
</div>
</div>
</div>
</div>
</main>
<!-- Floating Action Button (Mobile) -->
<div class="fixed bottom-6 right-6 lg:hidden z-30">
<button class="bg-primary hover:bg-primary-hover text-white rounded-full p-4 shadow-lg shadow-primary/40 flex items-center justify-center transition-transform hover:scale-105 active:scale-95">
<span class="material-symbols-outlined text-[24px]">add</span>
</button>
</div>
</div>
@endsection
