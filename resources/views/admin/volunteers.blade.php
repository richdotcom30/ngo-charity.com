@extends('layouts.admin')

@section('title', 'Admin Volunteers - NGO Australia')

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
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all" href="/admin/volunteers">
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
<span class="font-bold text-lg">Volunteers</span>
</div>
<div class="hidden lg:flex items-center gap-2">
<h2 class="text-lg font-bold">Volunteers</h2>
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
<div class="max-w-7xl mx-auto flex flex-col gap-8 pb-10">
<!-- Page Heading -->
<div class="flex flex-wrap justify-between items-end gap-4">
<div class="flex flex-col gap-2">
<h2 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Volunteer Management</h2>
<p class="text-gray-500 dark:text-gray-400 text-lg max-w-2xl">Manage your registered volunteers, assign tasks, and track their impact on your community.</p>
</div>
<div class="flex items-center gap-3">
<button class="hidden sm:flex items-center gap-2 px-5 py-2.5 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-sm font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-gray-700 dark:text-gray-200">
<span class="material-symbols-outlined text-[20px]">download</span>
                                Export CSV
                            </button>
<button class="flex items-center gap-2 px-6 py-2.5 rounded-full bg-primary hover:bg-[#42c51b] text-background-dark text-sm font-bold shadow-lg shadow-primary/20 transition-all active:scale-95">
<span class="material-symbols-outlined text-[20px]">add</span>
                                Add New Volunteer
                            </button>
</div>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="p-6 rounded-xl bg-white dark:bg-surface-dark border border-gray-100 dark:border-white/5 shadow-sm flex flex-col gap-4 group hover:border-primary/30 transition-colors">
<div class="flex items-center justify-between">
<span class="text-gray-500 dark:text-gray-400 font-medium">Total Volunteers</span>
<div class="p-2 rounded-full bg-blue-100 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400">
<span class="material-symbols-outlined text-[20px]">groups</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold dark:text-white">1,240</span>
<span class="text-sm font-medium text-primary">+5% this month</span>
</div>
</div>
<div class="p-6 rounded-xl bg-white dark:bg-surface-dark border border-gray-100 dark:border-white/5 shadow-sm flex flex-col gap-4 group hover:border-primary/30 transition-colors">
<div class="flex items-center justify-between">
<span class="text-gray-500 dark:text-gray-400 font-medium">Active Today</span>
<div class="p-2 rounded-full bg-primary/20 text-green-700 dark:text-primary">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold dark:text-white">85</span>
<span class="text-sm font-medium text-primary">+12% vs yesterday</span>
</div>
</div>
<div class="p-6 rounded-xl bg-white dark:bg-surface-dark border border-gray-100 dark:border-white/5 shadow-sm flex flex-col gap-4 group hover:border-primary/30 transition-colors">
<div class="flex items-center justify-between">
<span class="text-gray-500 dark:text-gray-400 font-medium">Pending Approval</span>
<div class="p-2 rounded-full bg-orange-100 dark:bg-orange-500/20 text-orange-600 dark:text-orange-400">
<span class="material-symbols-outlined text-[20px]">pending</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold dark:text-white">12</span>
<span class="text-sm font-medium text-orange-500">Requires attention</span>
</div>
</div>
</div>
<!-- Search & Filters -->
<div class="flex flex-col md:flex-row gap-4">
<div class="flex-1 relative">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400 text-[22px]">search</span>
</div>
<input class="w-full h-12 pl-11 pr-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="Search by name, email, or role..." type="text"/>
</div>
<div class="flex gap-3">
<div class="relative min-w-[140px]">
<select class="appearance-none w-full h-12 px-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer">
<option>All Roles</option>
<option>Driver</option>
<option>Event Staff</option>
<option>Coordinator</option>
</select>
<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400 text-[20px]">expand_more</span>
</div>
</div>
<div class="relative min-w-[140px]">
<select class="appearance-none w-full h-12 px-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer">
<option>Status: Any</option>
<option>Active</option>
<option>Pending</option>
<option>On Leave</option>
</select>
<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400 text-[20px]">expand_more</span>
</div>
</div>
</div>
</div>
<!-- Volunteers List Table -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-2xl overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead class="bg-gray-50 dark:bg-white/5 border-b border-gray-100 dark:border-white/5">
<tr>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Volunteer</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Role</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Location</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Status</th>
<th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Last Active</th>
<th class="py-4 px-6 text-right text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-100 dark:divide-white/5">
<!-- Row 1 -->
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-cover bg-center ring-2 ring-white dark:ring-surface-dark" data-alt="Portrait of Sarah Jenkins, a volunteer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAGHKfugfCLCzgtUEpxK-O7FA2Z-SQTEdFTcH6KR0kN03SfD6XQkI2aIZIbTZIwqREBQNviGmlgJCneq7NQydVlPOVKPYXaDcr3p2sqcI1wmdlX-Ac_N_XnRaRKhQOIQxkfQpwf28megGI32G5Mo8BjMHoz8prmQrIuLhpHEYxpv1CJxTYpM00gUCtxrfkZVUX77lr0-R8CFlHl6LnFY7bnnzsKvbv3D-WCmZqK1RVM3SaRFw-t0w5tkzMQZ6fS9LN-PzkH8y3eTaw");'></div>
<div class="flex flex-col">
<span class="text-sm font-bold text-gray-900 dark:text-white">Sarah Jenkins</span>
<span class="text-xs text-gray-500 dark:text-gray-400">sarah.j@example.com</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-purple-100 dark:bg-purple-500/10 text-purple-700 dark:text-purple-300 border border-purple-200 dark:border-purple-500/20">
                                                Coordinator
                                            </span>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-1 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-[16px] text-gray-400">location_on</span>
                                                Melbourne, VIC
                                            </div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="size-2 rounded-full bg-primary animate-pulse"></div>
<span class="text-sm font-medium text-gray-700 dark:text-gray-200">Active</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</span>
</td>
<td class="py-4 px-6 text-right">
<button class="text-gray-400 hover:text-primary transition-colors p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-cover bg-center ring-2 ring-white dark:ring-surface-dark" data-alt="Portrait of David Lo, a volunteer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC6B2IvY3eBXeVo3TzGpXDLFP1GqTflaUwVysAV3iXudBaaWMpCBeq1hDwv5bK4g6cnB3CKPyppe6rudZ5WjALsxs_jZQ6ZgPWMeUJ7RV6fqEWbylUPgrBZZxLYcD12liCGWuthsGXdPN0X3pQ7Sti5YeZAzu5EiEeceNpK0V0R1mJERsNSxbXS-XkgRBSBpe_PVmwCChO-fgAKcCEgW4yedhV0GagDnuBRlT5psH_7T9ySzmFTs1PigHWGD1fX7LP43JPWTBc9F8");'></div>
<div class="flex flex-col">
<span class="text-sm font-bold text-gray-900 dark:text-white">David Lo</span>
<span class="text-xs text-gray-500 dark:text-gray-400">david.lo@example.com</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-500/10 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-500/20">
                                                Driver
                                            </span>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-1 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-[16px] text-gray-400">location_on</span>
                                                Sydney, NSW
                                            </div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="size-2 rounded-full bg-yellow-400"></div>
<span class="text-sm font-medium text-gray-700 dark:text-gray-200">On Leave</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-gray-500 dark:text-gray-400">3 days ago</span>
</td>
<td class="py-4 px-6 text-right">
<button class="text-gray-400 hover:text-primary transition-colors p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-cover bg-center ring-2 ring-white dark:ring-surface-dark" data-alt="Portrait of Ayesha Malik, a volunteer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCMzeYokrjG3tuuiRYTJsT5pK1qWAlYu9J_zPKVIUHONZhiSqxHDbKAFYkKGUrhwWhSPi9NZz9mTy4iXm_HLI7_JF47gRqa2nCbBGnOTM5R2hR1Xxk0VGk_sYl6zgX0o1C_D-TyAHe2QAr1t0Opob3e1iQl85f9wvxLuByuEJfAA_9FA6Xdcp_CTiJrZ_yOTQzds3nBVR6wLKDG7C4kx6q1D_9Hm3k8hV-IPZ72pyu8wwJLBoHroXkqvXAGCsjlItO2eNU-rzaP3_k");'></div>
<div class="flex flex-col">
<span class="text-sm font-bold text-gray-900 dark:text-white">Ayesha Malik</span>
<span class="text-xs text-gray-500 dark:text-gray-400">ayesha.m@example.com</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 dark:bg-green-500/10 text-green-700 dark:text-green-300 border border-green-200 dark:border-green-500/20">
                                                Event Staff
                                            </span>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-1 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-[16px] text-gray-400">location_on</span>
                                                Brisbane, QLD
                                            </div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="size-2 rounded-full bg-gray-300 dark:bg-gray-500"></div>
<span class="text-sm font-medium text-gray-700 dark:text-gray-200">Pending</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-gray-500 dark:text-gray-400">Never</span>
</td>
<td class="py-4 px-6 text-right">
<button class="text-gray-400 hover:text-primary transition-colors p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-cover bg-center ring-2 ring-white dark:ring-surface-dark" data-alt="Portrait of Marcus Johnson, a volunteer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBX1PbVXY60ATcu8ojd5b_3xecQYoZayQrgplOYm96I8oTfHYOkXcHLA3gTpr2mkk5pL7Me_OgdS-XxI5nJdZY4wPBMVeFbRpJSWBn0fYuZsycGhD-kS12ZL0Bofu1iMJE1VEYlaLfka3x_aM5guCmx3RQjg5HoSk6xjTiGV2TiC-C-AuGf9Ci_rjKs8qxHNrBlowUL5JYrSTpCifMWOGsboUO5MntXNfSXxDkJF_mjQAckD8CwX4MKbQrj966RgQfckulQP_UwQrk");'></div>
<div class="flex flex-col">
<span class="text-sm font-bold text-gray-900 dark:text-white">Marcus Johnson</span>
<span class="text-xs text-gray-500 dark:text-gray-400">marcus.j@example.com</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-500/10 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-500/20">
                                                Driver
                                            </span>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-1 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-[16px] text-gray-400">location_on</span>
                                                Perth, WA
                                            </div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="size-2 rounded-full bg-primary animate-pulse"></div>
<span class="text-sm font-medium text-gray-700 dark:text-gray-200">Active</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-gray-500 dark:text-gray-400">5 hours ago</span>
</td>
<td class="py-4 px-6 text-right">
<button class="text-gray-400 hover:text-primary transition-colors p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 5 -->
<tr class="group hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-cover bg-center ring-2 ring-white dark:ring-surface-dark" data-alt="Portrait of Leo Chen, a volunteer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAaWNyqf_gJ7JWc8LIoNKMdE09viFuZoB_M-npaFL0ji10hdsMKOMbG5TWs-PXvfIGtr3OM5YeSqmSWtrbYuwCbULrbklhznYVRm45urXlDQd7d4G3O7-7E3XnemGj5p9hheW1FZ3C38vjLK-lWAFr6QHF5p9Z5UYLAdy4lDmwixBk7gn1HV3xBK_jhvbLApds5Qt03CR7A8Ae-7hCVEluO0s_l29jElCm0ZcfFTvqqYfvne5zVJitaeHF537JjCWOb2m8iVpaVirs");'></div>
<div class="flex flex-col">
<span class="text-sm font-bold text-gray-900 dark:text-white">Leo Chen</span>
<span class="text-xs text-gray-500 dark:text-gray-400">leo.chen@example.com</span>
</div>
</div>
</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 dark:bg-green-500/10 text-green-700 dark:text-green-300 border border-green-200 dark:border-green-500/20">
                                                Event Staff
                                            </span>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-1 text-sm text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-[16px] text-gray-400">location_on</span>
                                                Adelaide, SA
                                            </div>
</td>
<td class="py-4 px-6">
<div class="flex items-center gap-2">
<div class="size-2 rounded-full bg-primary animate-pulse"></div>
<span class="text-sm font-medium text-gray-700 dark:text-gray-200">Active</span>
</div>
</td>
<td class="py-4 px-6">
<span class="text-sm text-gray-500 dark:text-gray-400">1 day ago</span>
</td>
<td class="py-4 px-6 text-right">
<button class="text-gray-400 hover:text-primary transition-colors p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 border-t border-gray-200 dark:border-white/5 flex items-center justify-between">
<span class="text-sm text-gray-500 dark:text-gray-400">Showing 1-5 of 1,240</span>
<div class="flex items-center gap-2">
<button class="size-8 flex items-center justify-center rounded-full border border-gray-200 dark:border-white/10 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5 disabled:opacity-50">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
</button>
<button class="size-8 flex items-center justify-center rounded-full bg-primary text-background-dark font-bold text-sm">1</button>
<button class="size-8 flex items-center justify-center rounded-full hover:bg-gray-100 dark:hover:bg-white/5 text-gray-600 dark:text-gray-400 text-sm">2</button>
<button class="size-8 flex items-center justify-center rounded-full hover:bg-gray-100 dark:hover:bg-white/5 text-gray-600 dark:text-gray-400 text-sm">3</button>
<span class="text-gray-400">...</span>
<button class="size-8 flex items-center justify-center rounded-full border border-gray-200 dark:border-white/10 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/5">
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
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
