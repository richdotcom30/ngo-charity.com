@extends('layouts.admin')

@section('title', 'Admin Settings - NGO Australia')

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
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="/admin/analytics">
<span class="material-symbols-outlined">analytics</span>
<span class="text-sm font-medium">Analytics</span>
</a>
<div class="pt-4 mt-4 border-t border-border-light dark:border-border-dark">
<p class="px-3 text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-2">System</p>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all" href="/admin/settings">
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
<span class="font-bold text-lg">Settings</span>
</div>
<div class="hidden lg:flex items-center gap-2">
<h2 class="text-lg font-bold">Settings</h2>
<span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-xs font-semibold">Admin View</span>
</div>
<div class="flex items-center justify-end gap-4 flex-1 lg:flex-none">
<!-- Search -->
<div class="hidden md:flex relative group w-64 transition-all focus-within:w-80">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-text-muted-light dark:text-text-muted-dark">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-2 border border-border-light dark:border-border-dark rounded-lg leading-5 bg-background-light dark:bg-[#2d2317] placeholder-text-muted-light dark:placeholder-text-muted-dark focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm transition-all text-text-main-light dark:text-text-main-dark" placeholder="Search settings..." type="text"/>
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
</header>
<!-- Scrollable Content Area -->
<div class="flex-1 overflow-y-auto p-4 lg:p-8 scroll-smooth">
<div class="max-w-6xl mx-auto flex flex-col gap-8 pb-10">
<!-- Page Heading -->
<div class="flex flex-wrap justify-between items-end gap-4">
<div class="flex flex-col gap-1">
<h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight">Settings</h2>
<p class="text-gray-500 dark:text-gray-400 text-base">Manage your account preferences and system configuration</p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-white bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-all shadow-sm flex items-center gap-2">
<span class="material-symbols-outlined" style="font-size: 18px;">undo</span>
                                Reset to Default
                            </button>
<button class="px-4 py-2 text-sm font-bold text-black bg-primary rounded-lg hover:bg-[#3ec71a] transition-colors shadow-[0_0_15px_rgba(76,223,32,0.3)] flex items-center gap-2">
<span class="material-symbols-outlined" style="font-size: 18px;">save</span>
                                Save Changes
                            </button>
</div>
</div>
<!-- Settings Sections -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Profile Settings -->
<div class="lg:col-span-2 space-y-6">
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-xl shadow-sm overflow-hidden">
<div class="p-6 border-b border-gray-200 dark:border-white/5">
<h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person</span>
                                Profile Settings
                            </h3>
<p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Update your personal information and profile details</p>
</div>
<div class="p-6 space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">First Name</label>
<input class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" type="text" value="Sarah"/>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Last Name</label>
<input class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" type="text" value="Johnson"/>
</div>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
<input class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" type="email" value="sarah@ausrelief.org"/>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone Number</label>
<input class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" type="tel" value="+61 400 123 456"/>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bio</label>
<textarea class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors resize-none" rows="3" placeholder="Tell us about yourself...">Experienced administrator with 8+ years in NGO management and community development.</textarea>
</div>
</div>
</div>
<!-- Security Settings -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-xl shadow-sm overflow-hidden">
<div class="p-6 border-b border-gray-200 dark:border-white/5">
<h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">security</span>
                                Security
                            </h3>
<p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Manage your account security and authentication</p>
</div>
<div class="p-6 space-y-6">
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Current Password</label>
<input class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" type="password"/>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">New Password</label>
<input class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" type="password"/>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm New Password</label>
<input class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors" type="password"/>
</div>
<button class="w-full px-4 py-2 bg-primary hover:bg-[#3ec71a] text-white font-semibold rounded-lg transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined" style="font-size: 18px;">lock</span>
                                Update Password
                            </button>
</div>
</div>
</div>
<!-- Right Sidebar Settings -->
<div class="space-y-6">
<!-- Notifications -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-xl shadow-sm overflow-hidden">
<div class="p-6 border-b border-gray-200 dark:border-white/5">
<h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">notifications</span>
                                Notifications
                            </h3>
<p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Configure how you receive updates</p>
</div>
<div class="p-6 space-y-4">
<div class="flex items-center justify-between">
<span class="text-sm font-medium text-gray-700 dark:text-gray-300">Email Notifications</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox" checked/>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/25 dark:peer-focus:ring-primary/25 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<span class="text-sm font-medium text-gray-700 dark:text-gray-300">Push Notifications</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/25 dark:peer-focus:ring-primary/25 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<span class="text-sm font-medium text-gray-700 dark:text-gray-300">SMS Alerts</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox" checked/>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/25 dark:peer-focus:ring-primary/25 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
<!-- System Settings -->
<div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/5 rounded-xl shadow-sm overflow-hidden">
<div class="p-6 border-b border-gray-200 dark:border-white/5">
<h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">settings_suggest</span>
                                System
                            </h3>
<p class="text-sm text-gray-500 dark:text-gray-400 mt-1">General system preferences</p>
</div>
<div class="p-6 space-y-4">
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Language</label>
<select class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
<option>English (Australia)</option>
<option>English (US)</option>
<option>Spanish</option>
<option>French</option>
</select>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Timezone</label>
<select class="w-full px-3 py-2 border border-gray-200 dark:border-white/10 rounded-lg bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
<option>Australia/Sydney</option>
<option>Australia/Melbourne</option>
<option>Australia/Brisbane</option>
<option>UTC</option>
</select>
</div>
<div class="flex items-center justify-between">
<span class="text-sm font-medium text-gray-700 dark:text-gray-300">Auto-save</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox" checked/>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/25 dark:peer-focus:ring-primary/25 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
@endsection
