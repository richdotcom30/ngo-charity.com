@extends('layouts.admin')

@section('title', 'Admin Dashboard - NGO Australia')

@section('content')
    <!-- Main Layout -->
    <div class="min-h-screen flex w-full overflow-hidden bg-background-light dark:bg-background-dark">
        <!-- Sidebar -->
        <aside
            class="hidden lg:flex flex-col w-72 h-screen bg-card-light dark:bg-[#1a140e] border-r border-border-light dark:border-border-dark flex-shrink-0 transition-colors duration-300 z-20">
            <div class="p-6 pb-2">
                <div class="flex items-center gap-3 mb-8">
                    <div
                        class="bg-primary aspect-square rounded-full size-10 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-primary/20">
                        AR
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-bold leading-tight tracking-tight">Admin Portal</h1>
                        <p
                            class="text-text-muted-light dark:text-text-muted-dark text-xs font-medium uppercase tracking-wider">
                            Australian Relief</p>
                    </div>
                </div>
            </div>
            <nav class="flex-1 overflow-y-auto px-4 pb-4 space-y-1">
                <a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all"
                    href="{{ route('admin.dashboard') }}">
                    <span class="material-symbols-outlined filled">grid_view</span>
                    <span class="text-sm font-bold">Dashboard</span>
                </a>
                <a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all"
                    href="{{ route('admin.donations') }}">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                    <span class="text-sm font-medium">Donations</span>
                </a>
                <a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all"
                    href="{{ route('admin.volunteers') }}">
                    <span class="material-symbols-outlined">diversity_3</span>
                    <span class="text-sm font-medium">Volunteers</span>
                </a>
                <a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all"
                    href="{{ route('admin.programs') }}">
                    <span class="material-symbols-outlined">calendar_month</span>
                    <span class="text-sm font-medium">Programs</span>
                </a>
                <a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all"
                    href="{{ route('admin.blog') }}">
                    <span class="material-symbols-outlined">article</span>
                    <span class="text-sm font-medium">Blog</span>
                </a>
                <a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all"
                    href="{{ route('admin.analytics') }}">
                    <span class="material-symbols-outlined">analytics</span>
                    <span class="text-sm font-medium">Analytics</span>
                </a>
                <div class="pt-4 mt-4 border-t border-border-light dark:border-border-dark">
                    <p
                        class="px-3 text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-2">
                        System</p>
                    <a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all"
                        href="{{ route('admin.settings') }}">
                        <span class="material-symbols-outlined">settings</span>
                        <span class="text-sm font-medium">Settings</span>
                    </a>
                </div>
            </nav>
            <div class="p-4 border-t border-border-light dark:border-border-dark">
                <div class="flex items-center gap-3 px-2 mb-4">
                    <div class="relative">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/30"
                            data-alt="Profile picture of the admin user"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB2zN1ABC5rlTOUa09ojJ_EFqVl893s9SrO79krSdo3xfvZJ9A4rMbmnYQj83z8D2Vqtz74zy6_HI8j0nUEwy8RKyBFYLeAPaaMtAaPPPNWRydFBb3TF-ZgLb4TUWYrMZTnJ3948--dNQ3IDJ7gby6Q4OwbYjj23icF0e03IC4Y6cCkheYxvNyW9tQV-PyKzxWLmbiix1KD5xMkyya6iKzfLgJ2Cp9gUBuujeVqnoLMXuzi-KpO26sCCAAm2aKogIBgaMzui10Zv8Q");'>
                        </div>
                        <div
                            class="absolute bottom-0 right-0 size-3 bg-green-500 rounded-full border-2 border-white dark:border-[#1a140e]">
                        </div>
                    </div>
                    <div class="flex flex-col overflow-hidden">
                        <p class="text-sm font-bold truncate">NGO Admin</p>
                        <p class="text-text-muted-light dark:text-text-muted-dark text-xs truncate">sarah@ausrelief.org</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}" class="w-full">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-card-light dark:bg-[#2d2317] hover:bg-red-50 dark:hover:bg-red-900/20 text-text-main-light dark:text-text-main-dark hover:text-red-600 dark:hover:text-red-400 border border-border-light dark:border-border-dark transition-colors text-sm font-bold">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                        Logout
                    </button>
                </form>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 flex flex-col h-screen relative overflow-hidden">
            <!-- Top Navbar -->
            <header
                class="flex-shrink-0 h-16 bg-card-light dark:bg-background-dark/80 backdrop-blur-md border-b border-border-light dark:border-border-dark flex items-center justify-between px-6 z-10 sticky top-0">
                <div class="flex items-center gap-4 lg:hidden">
                    <button class="text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <span class="font-bold text-lg">Dashboard</span>
                </div>
                <div class="hidden lg:flex items-center gap-2">
                    <h2 class="text-lg font-bold">Overview</h2>
                    <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-xs font-semibold">Admin View</span>
                </div>
                <div class="flex items-center justify-end gap-4 flex-1 lg:flex-none">
                    <!-- Search -->
                    <div class="hidden md:flex relative group w-64 transition-all focus-within:w-80">
                        <div
                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-text-muted-light dark:text-text-muted-dark">
                            <span class="material-symbols-outlined text-[20px]">search</span>
                        </div>
                        <input
                            class="block w-full pl-10 pr-3 py-2 border border-border-light dark:border-border-dark rounded-lg leading-5 bg-background-light dark:bg-[#2d2317] placeholder-text-muted-light dark:placeholder-text-muted-dark focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm transition-all text-text-main-light dark:text-text-main-dark"
                            placeholder="Search records..." type="text" />
                    </div>
                    <div class="flex items-center gap-3 border-l border-border-light dark:border-border-dark pl-4 ml-2">
                        <button
                            class="relative p-2 rounded-full text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary transition-colors"
                            title="Notifications">
                            <span class="material-symbols-outlined">notifications</span>
                            <span
                                class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-[#211911]"></span>
                        </button>
                        <button
                            class="p-2 rounded-full text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary transition-colors"
                            onclick="document.documentElement.classList.toggle('dark')" title="Toggle Theme">
                            <span class="material-symbols-outlined dark:hidden">dark_mode</span>
                            <span class="material-symbols-outlined hidden dark:block">light_mode</span>
                        </button>
                    </div>
                    <button
                        class="hidden sm:flex items-center justify-center gap-2 rounded-lg h-9 px-4 bg-primary hover:bg-primary-hover text-white text-sm font-bold shadow-md shadow-primary/20 transition-all">
                        <span class="material-symbols-outlined text-[18px]">add</span>
                        <span>Add New</span>
                    </button>
                </div>
            </header>
            <!-- Scrollable Content Area -->
            <div class="flex-1 overflow-y-auto p-4 lg:p-8 scroll-smooth">
                <div class="max-w-7xl mx-auto flex flex-col gap-8 pb-10">
                    <!-- Welcome Section -->
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold tracking-tight mb-2">Welcome back, Sarah</h1>
                        <p class="text-text-muted-light dark:text-text-muted-dark text-base">Here is what's happening with
                            your organization today.</p>
                    </div>
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                        <!-- Stat Card 1 -->
                        <div
                            class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-border-light dark:border-border-dark shadow-sm flex flex-col relative group hover:border-primary/50 transition-colors">
                            <div class="flex items-start justify-between mb-4">
                                <div
                                    class="bg-green-100 dark:bg-green-900/30 p-2 rounded-lg text-green-600 dark:text-green-400">
                                    <span class="material-symbols-outlined">paid</span>
                                </div>
                                <span
                                    class="flex items-center text-xs font-bold text-green-600 bg-green-100 dark:bg-green-900/30 dark:text-green-400 px-2 py-1 rounded-full">
                                    <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                                    +12%
                                </span>
                            </div>
                            <p class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium mb-1">Total
                                Donations</p>
                            <p class="text-2xl font-bold tracking-tight">$124,500</p>
                        </div>
                        <!-- Stat Card 2 -->
                        <div
                            class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-border-light dark:border-border-dark shadow-sm flex flex-col group hover:border-primary/50 transition-colors">
                            <div class="flex items-start justify-between mb-4">
                                <div
                                    class="bg-blue-100 dark:bg-blue-900/30 p-2 rounded-lg text-blue-600 dark:text-blue-400">
                                    <span class="material-symbols-outlined">groups</span>
                                </div>
                                <span
                                    class="flex items-center text-xs font-bold text-green-600 bg-green-100 dark:bg-green-900/30 dark:text-green-400 px-2 py-1 rounded-full">
                                    <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                                    +5%
                                </span>
                            </div>
                            <p class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium mb-1">Active
                                Volunteers</p>
                            <p class="text-2xl font-bold tracking-tight">450</p>
                        </div>
                        <!-- Stat Card 3 -->
                        <div
                            class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-border-light dark:border-border-dark shadow-sm flex flex-col group hover:border-primary/50 transition-colors">
                            <div class="flex items-start justify-between mb-4">
                                <div
                                    class="bg-purple-100 dark:bg-purple-900/30 p-2 rounded-lg text-purple-600 dark:text-purple-400">
                                    <span class="material-symbols-outlined">event_available</span>
                                </div>
                                <span
                                    class="flex items-center text-xs font-bold text-text-muted-light bg-gray-100 dark:bg-gray-800 dark:text-text-muted-dark px-2 py-1 rounded-full">
                                    0%
                                </span>
                            </div>
                            <p class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium mb-1">Programs
                                Running</p>
                            <p class="text-2xl font-bold tracking-tight">12</p>
                        </div>
                        <!-- Stat Card 4 -->
                        <div
                            class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-border-light dark:border-border-dark shadow-sm flex flex-col group hover:border-primary/50 transition-colors">
                            <div class="flex items-start justify-between mb-4">
                                <div class="bg-primary/20 dark:bg-primary/20 p-2 rounded-lg text-primary dark:text-primary">
                                    <span class="material-symbols-outlined">favorite</span>
                                </div>
                                <span
                                    class="flex items-center text-xs font-bold text-green-600 bg-green-100 dark:bg-green-900/30 dark:text-green-400 px-2 py-1 rounded-full">
                                    <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                                    +8%
                                </span>
                            </div>
                            <p class="text-text-muted-light dark:text-text-muted-dark text-sm font-medium mb-1">Lives
                                Impacted</p>
                            <p class="text-2xl font-bold tracking-tight">8,230</p>
                        </div>
                    </div>
                    <!-- Charts & Activity Area -->
                    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                        <!-- Main Chart -->
                        <div
                            class="xl:col-span-2 bg-card-light dark:bg-card-dark p-6 rounded-xl border border-border-light dark:border-border-dark shadow-sm flex flex-col h-96">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold">Donations Overview</h3>
                                <select
                                    class="bg-background-light dark:bg-[#211911] border border-border-light dark:border-border-dark text-sm rounded-lg p-2 focus:ring-primary focus:border-primary">
                                    <option>Year to Date</option>
                                    <option>Last 6 Months</option>
                                    <option>Last 30 Days</option>
                                </select>
                            </div>
                            <!-- Chart Placeholder -->
                            <div class="flex-1 w-full relative">
                                <div class="absolute inset-0 flex items-end justify-between px-2 pb-6 gap-2">
                                    <!-- Bars -->
                                    <div class="w-full bg-primary/10 rounded-t-sm h-[30%] relative group">
                                        <div
                                            class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-background-dark text-white text-xs py-1 px-2 rounded">
                                            $12k</div>
                                    </div>
                                    <div class="w-full bg-primary/20 rounded-t-sm h-[45%] relative group">
                                        <div
                                            class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-background-dark text-white text-xs py-1 px-2 rounded">
                                            $24k</div>
                                    </div>
                                    <div class="w-full bg-primary/30 rounded-t-sm h-[35%] relative group">
                                        <div
                                            class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-background-dark text-white text-xs py-1 px-2 rounded">
                                            $18k</div>
                                    </div>
                                    <div class="w-full bg-primary/40 rounded-t-sm h-[60%] relative group">
                                        <div
                                            class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-background-dark text-white text-xs py-1 px-2 rounded">
                                            $45k</div>
                                    </div>
                                    <div class="w-full bg-primary/30 rounded-t-sm h-[50%] relative group">
                                        <div
                                            class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-background-dark text-white text-xs py-1 px-2 rounded">
                                            $32k</div>
                                    </div>
                                    <div class="w-full bg-primary/60 rounded-t-sm h-[75%] relative group">
                                        <div
                                            class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-background-dark text-white text-xs py-1 px-2 rounded">
                                            $62k</div>
                                    </div>
                                    <div class="w-full bg-primary/80 rounded-t-sm h-[65%] relative group">
                                        <div
                                            class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-background-dark text-white text-xs py-1 px-2 rounded">
                                            $58k</div>
                                    </div>
                                    <div
                                        class="w-full bg-primary rounded-t-sm h-[90%] relative group shadow-[0_0_15px_-3px_rgba(207,115,23,0.5)]">
                                        <div
                                            class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-background-dark text-white text-xs py-1 px-2 rounded">
                                            $85k</div>
                                    </div>
                                </div>
                                <!-- Y-axis lines -->
                                <div
                                    class="absolute inset-0 flex flex-col justify-between pointer-events-none text-text-muted-light dark:text-text-muted-dark/20 z-0">
                                    <div class="border-b border-dashed border-current w-full h-px"></div>
                                    <div class="border-b border-dashed border-current w-full h-px"></div>
                                    <div class="border-b border-dashed border-current w-full h-px"></div>
                                    <div class="border-b border-dashed border-current w-full h-px"></div>
                                    <div class="border-b border-current w-full h-px"></div>
                                </div>
                            </div>
                            <div
                                class="flex justify-between mt-2 text-xs text-text-muted-light dark:text-text-muted-dark px-2">
                                <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span><span>Jul</span><span>Aug</span>
                            </div>
                        </div>
                        <!-- Secondary Visual / Summary -->
                        <div class="xl:col-span-1 flex flex-col gap-6">
                            <div
                                class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-border-light dark:border-border-dark shadow-sm flex-1">
                                <h3 class="text-lg font-bold mb-4">Volunteer Distribution</h3>
                                <div class="flex items-center justify-center h-48 relative">
                                    <!-- Pie Chart Representation using CSS Conic Gradient -->
                                    <div class="rounded-full size-40 relative shadow-xl"
                                        style="background: conic-gradient(#cf7317 0% 35%, #925110 35% 60%, #473624 60% 100%);">
                                        <div
                                            class="absolute inset-0 m-auto size-24 bg-card-light dark:bg-card-dark rounded-full flex flex-col items-center justify-center">
                                            <span class="text-2xl font-bold">450</span>
                                            <span
                                                class="text-[10px] text-text-muted-light dark:text-text-muted-dark">Total</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 flex flex-col gap-3">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2">
                                            <span class="size-3 rounded-full bg-primary"></span>
                                            <span>Field Workers</span>
                                        </div>
                                        <span class="font-bold">35%</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2">
                                            <span class="size-3 rounded-full bg-[#925110]"></span>
                                            <span>Event Staff</span>
                                        </div>
                                        <span class="font-bold">25%</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-2">
                                            <span class="size-3 rounded-full bg-[#473624]"></span>
                                            <span>Admin Support</span>
                                        </div>
                                        <span class="font-bold">40%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Activity Table -->
                    <div
                        class="bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm overflow-hidden">
                        <div
                            class="p-6 border-b border-border-light dark:border-border-dark flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <h3 class="text-lg font-bold">Recent Donations</h3>
                            <div class="flex items-center gap-2">
                                <button
                                    class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-border-light dark:border-border-dark text-sm hover:bg-background-light dark:hover:bg-[#211911]">
                                    <span class="material-symbols-outlined text-[18px]">filter_list</span>
                                    Filter
                                </button>
                                <button
                                    class="flex items-center gap-2 px-3 py-1.5 rounded-lg border border-border-light dark:border-border-dark text-sm hover:bg-background-light dark:hover:bg-[#211911]">
                                    <span class="material-symbols-outlined text-[18px]">download</span>
                                    Export
                                </button>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left">
                                <thead
                                    class="text-xs text-text-muted-light dark:text-text-muted-dark uppercase bg-background-light dark:bg-[#211911]/50 border-b border-border-light dark:border-border-dark">
                                    <tr>
                                        <th class="px-6 py-4 font-semibold" scope="col">Donor Name</th>
                                        <th class="px-6 py-4 font-semibold" scope="col">Campaign</th>
                                        <th class="px-6 py-4 font-semibold" scope="col">Date</th>
                                        <th class="px-6 py-4 font-semibold" scope="col">Amount</th>
                                        <th class="px-6 py-4 font-semibold" scope="col">Status</th>
                                        <th class="px-6 py-4 font-semibold text-right" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-border-light dark:divide-border-dark">
                                    <tr class="hover:bg-background-light dark:hover:bg-[#211911]/30 transition-colors">
                                        <td
                                            class="px-6 py-4 font-medium text-text-main-light dark:text-text-main-dark flex items-center gap-3">
                                            <div class="size-8 rounded-full bg-cover bg-center"
                                                data-alt="Portrait of James Wilson"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCv9vg9sHRbgoKprCn7crcZOQCuTt1g9uiXz9wCR9SQREEy66I_m5v980j-441c9NBxNKWkm8qUh7trJKFQRt-pNv_l6y0WmJlN4VamulT928CtXiHRBa6nfM4n8mQd59xQACp0ZxVhPKM-Lw8bExmRxxTmomFRGxnIxS7Kha2ARlDqzLmwS2jxHj6k6qosx1qOzRiZP0xeh3GtPvvBU89KEF6p4uwaBO6JT4dwoA_ige8-oYSusj98IZ5pjiFa1QESVpO0ulPFSyY");'>
                                            </div>
                                            James Wilson
                                        </td>
                                        <td class="px-6 py-4 text-text-muted-light dark:text-text-muted-dark">Bushfire
                                            Relief Fund</td>
                                        <td class="px-6 py-4 text-text-muted-light dark:text-text-muted-dark">Oct 24, 2023
                                        </td>
                                        <td class="px-6 py-4 font-bold text-text-main-light dark:text-text-main-dark">
                                            $500.00</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs px-2.5 py-0.5 rounded-full font-medium border border-green-200 dark:border-green-900/50">Completed</span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-background-light dark:hover:bg-[#211911]/30 transition-colors">
                                        <td
                                            class="px-6 py-4 font-medium text-text-main-light dark:text-text-main-dark flex items-center gap-3">
                                            <div class="size-8 rounded-full bg-cover bg-center"
                                                data-alt="Portrait of Elena Rodriguez"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDJ0IPPQe8kXAZAFRjfr5Ono1s5Z9vQlkCW1krp_8rOBiIgEJWe2-fIO6jnpUUuAjGnXP6Tomc-_R2rC36-ohCw8SNbpLUFRlbQ2gPLKaVz4LnD_pUazAwVAw1Zr8XTw5H8bKN4mkERE6bxepvrIHIYU-faTOWvsEVaNCVpUqJcBeqo1k0O1iltTfhwB8vr45nj8h38Wbr0dpvM5ewJSQH3vkScfHSE95hlEzDqgKaUnLlddJaaA7HWv-q_f6FYz1MBowZR2fwtXMc");'>
                                            </div>
                                            Elena Rodriguez
                                        </td>
                                        <td class="px-6 py-4 text-text-muted-light dark:text-text-muted-dark">Children's
                                            Education</td>
                                        <td class="px-6 py-4 text-text-muted-light dark:text-text-muted-dark">Oct 23, 2023
                                        </td>
                                        <td class="px-6 py-4 font-bold text-text-main-light dark:text-text-main-dark">
                                            $120.00</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs px-2.5 py-0.5 rounded-full font-medium border border-green-200 dark:border-green-900/50">Completed</span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-background-light dark:hover:bg-[#211911]/30 transition-colors">
                                        <td
                                            class="px-6 py-4 font-medium text-text-main-light dark:text-text-main-dark flex items-center gap-3">
                                            <div class="size-8 rounded-full bg-cover bg-center"
                                                data-alt="Portrait of Michael Chen"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAvWReFNTRic5D5ByoI_WNoRjVSgH0drDJx3Zwsk9UZI2BQWMyASdbHNzAdYS8hn2pkOywlAsfOzThv_Px8cfzCJ8iATHV-2lXv5WvNMSqbazpM7bc0nWIWb3ra-hfS2MmoXcj3X5Ga49GYt1azzHdZjaP9KO9FAQkcv7z9U3-MlBjou-TizMdSMetU0CSNr3elMHcI-UjZ54RWSb7ajeid3OjbMO8SgNSEWJQgSti4SZV_8MSTBiGhTdsQW__33LutpdeNnzAr5hM");'>
                                            </div>
                                            Michael Chen
                                        </td>
                                        <td class="px-6 py-4 text-text-muted-light dark:text-text-muted-dark">General
                                            Support</td>
                                        <td class="px-6 py-4 text-text-muted-light dark:text-text-muted-dark">Oct 23, 2023
                                        </td>
                                        <td class="px-6 py-4 font-bold text-text-main-light dark:text-text-main-dark">
                                            $2,500.00</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-400 text-xs px-2.5 py-0.5 rounded-full font-medium border border-yellow-200 dark:border-yellow-900/50">Pending</span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-background-light dark:hover:bg-[#211911]/30 transition-colors">
                                        <td
                                            class="px-6 py-4 font-medium text-text-main-light dark:text-text-main-dark flex items-center gap-3">
                                            <div class="size-8 rounded-full bg-cover bg-center"
                                                data-alt="Portrait of Olivia Smith"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCH35fOVDPa4kyP_svISzLgf0PTYtilZeZFqQdfn8sT9D61HXVfox9eaWhlrCd_TJgJzGlhc4JxjmbaZQk4cQsUZ0ufVgIfiEycQ5O10_UIEoEJQVY_aNxXZz5zAi18tg_77wJ8Q4BEXYZe2hi8EjkqBDprUnfLbgrNUphdq7AyLk9_ZC5khHjLah57zyHlVyVcxyN6F_NSWpUow863F_5usHXjWcgApSjepN0AjpD-HV4e5JDZLlhLxui4ahm_Gsd2uifw0x6KSKI");'>
                                            </div>
                                            Olivia Smith
                                        </td>
                                        <td class="px-6 py-4 text-text-muted-light dark:text-text-muted-dark">Wildlife
                                            Protection</td>
                                        <td class="px-6 py-4 text-text-muted-light dark:text-text-muted-dark">Oct 22, 2023
                                        </td>
                                        <td class="px-6 py-4 font-bold text-text-main-light dark:text-text-main-dark">$75.00
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs px-2.5 py-0.5 rounded-full font-medium border border-green-200 dark:border-green-900/50">Completed</span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-muted-light dark:text-text-muted-dark hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="p-4 border-t border-border-light dark:border-border-dark flex items-center justify-between">
                            <span class="text-xs text-text-muted-light dark:text-text-muted-dark">Showing 4 of 128
                                transactions</span>
                            <div class="flex items-center gap-2">
                                <button
                                    class="p-1 rounded-md hover:bg-background-light dark:hover:bg-[#211911] text-text-muted-light dark:text-text-muted-dark disabled:opacity-50"
                                    disabled="">
                                    <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                                </button>
                                <button
                                    class="p-1 rounded-md hover:bg-background-light dark:hover:bg-[#211911] text-text-muted-light dark:text-text-muted-dark">
                                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Posts Grid -->
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold">Latest Updates</h3>
                            <a class="text-sm text-primary font-medium hover:underline" href="#">View All Posts</a>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Post 1 -->
                            <div
                                class="bg-card-light dark:bg-card-dark rounded-xl overflow-hidden shadow-sm group cursor-pointer border border-border-light dark:border-border-dark hover:border-primary/50 transition-colors">
                                <div class="h-40 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Volunteer planting a tree in dry soil"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAS0shbuAFNlwkwuJR0zN4_JZW0HwOluvq-x_f-_IqJ3g3HIrBJQMdXOWC9-6JAIdPHRr2Ynyyq2z4N9nwDORA4R-PAfIvNxsFR9YSttgslGGy_EoWH9F-BjJy2dn7k-3ZCQEONtHc6qt5UQzTqkm1j87WhKt3hHqjzg4s5F6FTXzlj54nFFypYDq_ydcq0vhhUbvki46vpb2U7_YbxVd2erSLmKlslneNpPMVyiE2rnm7YYR8bDWgHrgp69aKdsnwftMpUAq-o0y0");'>
                                </div>
                                <div class="p-4">
                                    <div
                                        class="flex items-center gap-2 text-xs text-text-muted-light dark:text-text-muted-dark mb-2">
                                        <span
                                            class="bg-primary/10 text-primary px-2 py-0.5 rounded-full font-semibold">Environment</span>
                                        <span>•</span>
                                        <span>2 days ago</span>
                                    </div>
                                    <h4 class="font-bold text-base mb-2 group-hover:text-primary transition-colors">New
                                        Reforestation Initiative Launches in NSW</h4>
                                    <p class="text-sm text-text-muted-light dark:text-text-muted-dark line-clamp-2">Our
                                        latest project aims to plant over 50,000 native trees to restore habitats lost in
                                        recent fires.</p>
                                </div>
                            </div>
                            <!-- Post 2 -->
                            <div
                                class="bg-card-light dark:bg-card-dark rounded-xl overflow-hidden shadow-sm group cursor-pointer border border-border-light dark:border-border-dark hover:border-primary/50 transition-colors">
                                <div class="h-40 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Happy children receiving food aid"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCAD64zVmYOFjxvSDFQW7EPJM9fLPLiKw00umiUFBE-5GmTtWViqbFIJPpJ9HdQPNyfJhYXymz3IN6AW0fjcRIcTgRtG2hhbyu-a_kuhMmQCTsB1-jjhn4hCVtpzEfq-PLJLybQwTGLTT14Oeah-RtRARSz5GpiNnJTAEfsk6ok4dnByoGbaHs6ta8ShK_Gl2qRu_t_96J8nAyRKf0YF8jwZXTmaHrW3lg4Gna3hplWJ7KhM5AwAKqdk3Ze1ETb1mDyN1fptMZDv0s");'>
                                </div>
                                <div class="p-4">
                                    <div
                                        class="flex items-center gap-2 text-xs text-text-muted-light dark:text-text-muted-dark mb-2">
                                        <span
                                            class="bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 px-2 py-0.5 rounded-full font-semibold">Community</span>
                                        <span>•</span>
                                        <span>4 days ago</span>
                                    </div>
                                    <h4 class="font-bold text-base mb-2 group-hover:text-primary transition-colors">Food
                                        Drive Success: 10,000 Meals Delivered</h4>
                                    <p class="text-sm text-text-muted-light dark:text-text-muted-dark line-clamp-2">Thanks
                                        to our amazing volunteers, we've successfully distributed essential food supplies to
                                        families in need.</p>
                                </div>
                            </div>
                            <!-- Post 3 -->
                            <div
                                class="bg-card-light dark:bg-card-dark rounded-xl overflow-hidden shadow-sm group cursor-pointer border border-border-light dark:border-border-dark hover:border-primary/50 transition-colors">
                                <div class="h-40 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Group of volunteers smiling at camera"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBbMUUL_4GcED9SoV6enVpy96P7y1GOsrf1X4n2CCNZ0nNZMirzdmo1rGs-xH6H6aPf1EgjM56PwiuT6DtF_B2NPsfi8kC0bk_jWAc6XQuXYk2pRc7HT0-CW3GPV547WhPcFCd5FVWAM9DZ8EZ9XkFSroN3pDdysIyIESE1eGnHpHDXZAPTgutBxyw4k6e9XFqpHsCIUaQGaEoFPJW4vpVtlJxiiTI6s7X5CV41lomO5fZKTP85w6-hPKWFAX0W7p7xLKRiSjOFcuU");'>
                                </div>
                                <div class="p-4">
                                    <div
                                        class="flex items-center gap-2 text-xs text-text-muted-light dark:text-text-muted-dark mb-2">
                                        <span
                                            class="bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 px-2 py-0.5 rounded-full font-semibold">Volunteers</span>
                                        <span>•</span>
                                        <span>1 week ago</span>
                                    </div>
                                    <h4 class="font-bold text-base mb-2 group-hover:text-primary transition-colors">
                                        Volunteer Spotlight: Meet the Heroes</h4>
                                    <p class="text-sm text-text-muted-light dark:text-text-muted-dark line-clamp-2">This
                                        month we're highlighting the incredible work of our regional coordinators who go
                                        above and beyond.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Floating Action Button (Mobile) -->
        <div class="fixed bottom-6 right-6 lg:hidden z-30">
            <button
                class="bg-primary hover:bg-primary-hover text-white rounded-full p-4 shadow-lg shadow-primary/40 flex items-center justify-center transition-transform hover:scale-105 active:scale-95">
                <span class="material-symbols-outlined text-[24px]">add</span>
            </button>
        </div>
    </div>
@endsection