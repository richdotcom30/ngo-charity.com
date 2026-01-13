@extends('layouts.admin')

@section('title', 'Admin Blog - NGO Australia')

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
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.volunteers') }}">
<span class="material-symbols-outlined">diversity_3</span>
<span class="text-sm font-medium">Volunteers</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.programs') }}">
<span class="material-symbols-outlined">calendar_month</span>
<span class="text-sm font-medium">Programs</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white transition-all" href="{{ route('admin.blog') }}">
<span class="material-symbols-outlined">article</span>
<span class="text-sm font-medium">Blog</span>
</a>
<a class="group flex items-center gap-3 px-3 py-3 rounded-lg text-text-muted-light dark:text-text-muted-dark hover:bg-background-light dark:hover:bg-[#2d2317] hover:text-primary dark:hover:text-white transition-all" href="{{ route('admin.analytics') }}">
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
<span class="font-bold text-lg">Blog</span>
</div>
<div class="hidden lg:flex items-center gap-2">
<h2 class="text-lg font-bold">Blog</h2>
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
<div class="flex-1 overflow-y-auto p-6 md:p-10 max-w-7xl mx-auto w-full flex flex-col gap-8">
<!-- Page Heading & Actions -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2 text-sm text-text-secondary mb-1">
<span class="material-symbols-outlined" style="font-size: 16px;">dashboard</span>
<span>Dashboard</span>
<span>/</span>
<span class="text-white">Blog</span>
</div>
<h1 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white tracking-tight">Manage Stories</h1>
<p class="text-slate-500 dark:text-text-secondary max-w-xl">Share impact stories, community updates, and news from the field across Australia.</p>
</div>
<div class="flex items-center gap-3">
<button class="hidden md:flex items-center justify-center h-11 w-11 rounded-lg border border-[#2d3829] bg-surface-dark text-text-secondary hover:text-white hover:border-white/20 transition-all" title="View Published Site">
<span class="material-symbols-outlined">public</span>
</button>
<button class="flex items-center gap-2 h-11 px-5 rounded-lg bg-primary text-background-dark text-sm font-bold hover:bg-primary-hover shadow-[0_0_15px_rgba(76,223,32,0.3)] transition-all transform active:scale-95">
<span class="material-symbols-outlined" style="font-size: 20px;">add_circle</span>
                            Create New Post
                        </button>
</div>
</div>
<!-- Stats Overview -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="flex flex-col gap-1 p-5 rounded-xl border border-[#2d3829] bg-surface-dark relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-primary" style="font-size: 64px;">article</span>
</div>
<p class="text-text-secondary text-sm font-medium">Total Posts</p>
<div class="flex items-end gap-3">
<p class="text-white text-3xl font-bold">{{ $posts->total() }}</p>
<span class="text-primary text-sm font-bold bg-primary/10 px-2 py-0.5 rounded-md mb-1">Active</span>
</div>
</div>
<div class="flex flex-col gap-1 p-5 rounded-xl border border-[#2d3829] bg-surface-dark relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-blue-400" style="font-size: 64px;">visibility</span>
</div>
<p class="text-text-secondary text-sm font-medium">Total Views (All Time)</p>
<div class="flex items-end gap-3">
<p class="text-white text-3xl font-bold">{{ number_format(\App\Models\BlogPost::sum('views')) }}</p>
<span class="text-primary text-sm font-bold bg-primary/10 px-2 py-0.5 rounded-md mb-1">Total</span>
</div>
</div>
<div class="flex flex-col gap-1 p-5 rounded-xl border border-[#2d3829] bg-surface-dark relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-orange-400" style="font-size: 64px;">edit_document</span>
</div>
<p class="text-text-secondary text-sm font-medium">Draft Posts</p>
<div class="flex items-end gap-3">
<p class="text-white text-3xl font-bold">{{ \App\Models\BlogPost::where('status', 'draft')->count() }}</p>
<span class="text-yellow-400 text-sm font-bold bg-yellow-400/10 px-2 py-0.5 rounded-md mb-1">Pending</span>
</div>
</div>
</div>
<!-- Main Content Panel -->
<div class="flex flex-col lg:flex-row gap-8">
<!-- Left: Post List & Filters -->
<div class="flex-1 flex flex-col gap-6">
<!-- Search & Filters -->
<div class="flex flex-col md:flex-row gap-4">
<div class="relative flex-1">
<span class="absolute left-4 top-1/2 -translate-y-1/2 text-text-secondary material-symbols-outlined">search</span>
<input class="w-full h-12 pl-12 pr-4 rounded-lg bg-surface-dark border border-[#2d3829] text-white placeholder-text-secondary focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Search posts by title, author..." type="text"/>
</div>
<select class="h-12 px-4 rounded-lg bg-surface-dark border border-[#2d3829] text-white focus:outline-none focus:border-primary cursor-pointer min-w-[160px]">
<option>All Categories</option>
<option>Community Stories</option>
<option>Fundraising</option>
<option>Field Updates</option>
</select>
<select class="h-12 px-4 rounded-lg bg-surface-dark border border-[#2d3829] text-white focus:outline-none focus:border-primary cursor-pointer min-w-[140px]">
<option>All Status</option>
<option>Published</option>
<option>Draft</option>
<option>Scheduled</option>
</select>
</div>
<!-- Posts List -->
<div class="flex flex-col gap-3">
@if($posts->count() > 0)
@foreach($posts as $post)
<div class="group flex flex-col sm:flex-row items-start sm:items-center gap-4 p-4 rounded-xl bg-surface-dark border border-[#2d3829] hover:border-[#42523d] transition-all">
<div class="h-16 w-16 sm:h-20 sm:w-20 shrink-0 rounded-lg bg-slate-700 bg-cover bg-center" style="background-image: url('{{ $post->featured_image_url ?? asset('images/placeholder-blog.jpg') }}');"></div>
<div class="flex-1 min-w-0">
<div class="flex items-center gap-2 mb-1">
@if($post->status === 'published')
<span class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-primary/20 text-primary">Published</span>
@elseif($post->status === 'draft')
<span class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-slate-700 text-slate-300">Draft</span>
@elseif($post->status === 'archived')
<span class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-gray-700 text-gray-300">Archived</span>
@endif
<span class="text-xs text-text-secondary">{{ $post->created_at->format('M d, Y') }} • {{ ucfirst($post->category) }}</span>
@if($post->views > 0)
<span class="text-xs text-text-secondary"> • {{ number_format($post->views) }} views</span>
@endif
</div>
<h3 class="text-white font-bold text-lg leading-tight truncate group-hover:text-primary transition-colors cursor-pointer">{{ $post->title }}</h3>
<p class="text-text-secondary text-sm mt-1 truncate">{{ Str::limit(strip_tags($post->excerpt ?? $post->content), 80) }}</p>
</div>
<div class="flex items-center gap-2 self-end sm:self-center mt-2 sm:mt-0">
<a href="{{ route('admin.blog') }}/{{ $post->id }}/edit" class="p-2 rounded-lg text-text-secondary hover:text-white hover:bg-[#2d3829] transition-colors" title="Edit">
<span class="material-symbols-outlined" style="font-size: 20px;">edit</span>
</a>
<form method="POST" action="{{ route('admin.blog.destroy', $post) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this blog post?')">
@csrf
@method('DELETE')
<button type="submit" class="p-2 rounded-lg text-text-secondary hover:text-red-400 hover:bg-red-500/10 transition-colors" title="Delete">
<span class="material-symbols-outlined" style="font-size: 20px;">delete</span>
</button>
</form>
</div>
</div>
@endforeach
@else
<div class="text-center py-12">
<div class="text-text-secondary mb-4">
<span class="material-symbols-outlined text-6xl">article</span>
</div>
<h3 class="text-xl font-bold text-white mb-2">No blog posts yet</h3>
<p class="text-text-secondary mb-6">Create your first blog post to share stories and updates with the community.</p>
<a href="{{ route('admin.blog.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-[#152112] text-sm font-bold rounded-lg hover:bg-primary/90 transition-all">
<span class="material-symbols-outlined">add</span>
Create First Post
</a>
</div>
@endif
</div>
<!-- Pagination -->
@if($posts->hasPages())
<div class="flex items-center justify-between mt-4">
<span class="text-sm text-text-secondary">
    Showing {{ $posts->firstItem() }}-{{ $posts->lastItem() }} of {{ $posts->total() }} posts
</span>
<div class="flex gap-2">
    @if($posts->onFirstPage())
        <span class="px-3 py-1.5 rounded-lg border border-[#2d3829] text-text-secondary/50 text-sm cursor-not-allowed">Previous</span>
    @else
        <a href="{{ $posts->previousPageUrl() }}" class="px-3 py-1.5 rounded-lg border border-[#2d3829] text-text-secondary hover:text-white hover:border-white/20 text-sm transition-colors">Previous</a>
    @endif

    @if($posts->hasMorePages())
        <a href="{{ $posts->nextPageUrl() }}" class="px-3 py-1.5 rounded-lg border border-[#2d3829] text-text-secondary hover:text-white hover:border-white/20 text-sm transition-colors">Next</a>
    @else
        <span class="px-3 py-1.5 rounded-lg border border-[#2d3829] text-text-secondary/50 text-sm cursor-not-allowed">Next</span>
    @endif
</div>
</div>
@endif
</div>
<!-- Right: Quick Editor / Draft Preview (Visible on larger screens) -->
<div class="w-full lg:w-[480px] shrink-0">
<div class="bg-surface-dark border border-[#2d3829] rounded-xl flex flex-col h-auto lg:min-h-[600px] sticky top-6">
<!-- Editor Header -->
<div class="p-4 border-b border-[#2d3829] flex items-center justify-between">
<h2 class="text-white font-bold">Quick Draft</h2>
<span class="text-xs text-text-secondary bg-surface-dark-lighter px-2 py-1 rounded">Unsaved Changes</span>
</div>
<!-- Content Inputs -->
<div class="p-6 flex flex-col gap-5 flex-1">
<!-- Featured Image Placeholder -->
<div class="relative w-full aspect-video rounded-lg border-2 border-dashed border-[#42523d] bg-[#1e261c] flex flex-col items-center justify-center cursor-pointer hover:border-primary hover:bg-[#2d3829] transition-all group">
<span class="material-symbols-outlined text-text-secondary group-hover:text-primary mb-2">add_photo_alternate</span>
<p class="text-xs text-text-secondary font-medium">Add Cover Image</p>
</div>
<!-- Title Input -->
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-2">Title</label>
<input class="w-full bg-transparent border-0 border-b border-[#2d3829] px-0 py-2 text-xl font-bold text-white placeholder-slate-600 focus:ring-0 focus:border-primary transition-colors" placeholder="Enter an inspiring title..." type="text"/>
</div>
<!-- Rich Text Toolbar (Mock) -->
<div class="flex flex-col gap-2 flex-1">
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider">Content</label>
<div class="flex items-center gap-1 p-1 bg-[#1e261c] rounded-lg w-fit border border-[#2d3829] mb-2">
<button class="p-1.5 text-text-secondary hover:text-white rounded hover:bg-white/10"><span class="material-symbols-outlined text-[18px]">format_bold</span></button>
<button class="p-1.5 text-text-secondary hover:text-white rounded hover:bg-white/10"><span class="material-symbols-outlined text-[18px]">format_italic</span></button>
<button class="p-1.5 text-text-secondary hover:text-white rounded hover:bg-white/10"><span class="material-symbols-outlined text-[18px]">format_list_bulleted</span></button>
<div class="w-px h-4 bg-[#2d3829] mx-1"></div>
<button class="p-1.5 text-text-secondary hover:text-white rounded hover:bg-white/10"><span class="material-symbols-outlined text-[18px]">link</span></button>
<button class="p-1.5 text-text-secondary hover:text-white rounded hover:bg-white/10"><span class="material-symbols-outlined text-[18px]">image</span></button>
</div>
<textarea class="w-full flex-1 bg-transparent border-none resize-none px-0 text-text-secondary focus:ring-0 text-base leading-relaxed h-48 lg:h-auto" placeholder="Start writing your story here..."></textarea>
</div>
<!-- Meta Fields -->
<div class="grid grid-cols-2 gap-4 pt-4 border-t border-[#2d3829]">
<div>
<label class="block text-text-secondary text-xs font-bold mb-1">Category</label>
<select class="w-full bg-[#1e261c] border border-[#2d3829] rounded-md text-sm text-white py-1.5 px-2 focus:ring-1 focus:ring-primary focus:border-primary">
<option>Select...</option>
<option>Community</option>
<option>News</option>
</select>
</div>
<div>
<label class="block text-text-secondary text-xs font-bold mb-1">Tags</label>
<input class="w-full bg-[#1e261c] border border-[#2d3829] rounded-md text-sm text-white py-1.5 px-2 focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Add tags..." type="text"/>
</div>
</div>
</div>
<!-- Footer Actions -->
<div class="p-4 border-t border-[#2d3829] bg-surface-dark-lighter/30 rounded-b-xl flex justify-between items-center">
<button class="text-sm font-bold text-text-secondary hover:text-white px-3 py-2 rounded hover:bg-white/5 transition-colors">Save Draft</button>
<div class="flex gap-2">
<button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-primary/20 text-primary text-sm font-bold hover:bg-primary hover:text-background-dark transition-all">
                                        Publish
                                        <span class="material-symbols-outlined text-[16px]">send</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
@endsection
