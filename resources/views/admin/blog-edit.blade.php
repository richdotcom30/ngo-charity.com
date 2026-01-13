@extends('layouts.admin')

@section('title', 'Edit Blog Post - NGO Australia')

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
<span class="font-bold text-lg">Edit Blog Post</span>
</div>
<div class="hidden lg:flex items-center gap-2">
<h2 class="text-lg font-bold">Edit Blog Post</h2>
<span class="bg-orange-500/10 text-orange-400 px-2 py-0.5 rounded text-xs font-semibold">Editing</span>
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
<button class="hidden sm:flex items-center justify-center gap-2 rounded-lg h-9 px-4 bg-orange-500 hover:bg-orange-600 text-white text-sm font-bold shadow-md shadow-orange-500/20 transition-all">
<span class="material-symbols-outlined text-[18px]">save</span>
<span>Update Post</span>
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
<span>/</span>
<span class="text-white">Edit</span>
</div>
<h1 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white tracking-tight">Edit Blog Post</h1>
<p class="text-slate-500 dark:text-text-secondary max-w-xl">Update your story and share the latest impact from the field.</p>
</div>
<div class="flex items-center gap-3">
<a href="{{ route('admin.blog') }}" class="hidden md:flex items-center justify-center h-11 w-11 rounded-lg border border-[#2d3829] bg-surface-dark text-text-secondary hover:text-white hover:border-white/20 transition-all" title="Back to Blog">
<span class="material-symbols-outlined">arrow_back</span>
</a>
<button type="submit" form="blogForm" class="flex items-center gap-2 h-11 px-5 rounded-lg bg-primary text-background-dark text-sm font-bold hover:bg-primary-hover shadow-[0_0_15px_rgba(76,223,32,0.3)] transition-all transform active:scale-95">
<span class="material-symbols-outlined" style="font-size: 20px;">publish</span>
                            Update Post
                        </button>
</div>
</div>

@if($errors->any())
<div class="bg-red-100 dark:bg-red-900/20 border border-red-400 text-red-700 dark:text-red-400 px-4 py-3 rounded-lg">
<ul class="list-disc list-inside">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@if(session('success'))
<div class="bg-green-100 dark:bg-green-900/20 border border-green-400 text-green-700 dark:text-green-400 px-4 py-3 rounded-lg">
{{ session('success') }}
</div>
@endif

<form id="blogForm" method="POST" action="{{ route('admin.blog.update', $post) }}" enctype="multipart/form-data" class="space-y-8">
@csrf
@method('PATCH')

<!-- Main Content Panel -->
<div class="flex flex-col lg:flex-row gap-8">
<!-- Left: Form Fields -->
<div class="flex-1 flex flex-col gap-6">
<!-- Title -->
<div class="bg-surface-dark border border-[#2d3829] rounded-xl p-6">
<h3 class="text-lg font-bold text-white mb-4">Post Details</h3>
<div class="space-y-4">
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-2">Title *</label>
<input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-3 text-white placeholder-text-secondary focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Enter an inspiring title..." required>
</div>
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-2">Slug *</label>
<input type="text" name="slug" value="{{ old('slug', $post->slug) }}" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-3 text-white placeholder-text-secondary focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="url-friendly-slug" required>
</div>
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-2">Excerpt *</label>
<textarea name="excerpt" rows="3" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-3 text-white placeholder-text-secondary focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-none" placeholder="Brief summary of your post..." required>{{ old('excerpt', $post->excerpt) }}</textarea>
</div>
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-2">Content *</label>
<textarea name="content" rows="12" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-3 text-white placeholder-text-secondary focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-none" placeholder="Write your story here..." required>{{ old('content', $post->content) }}</textarea>
</div>
</div>
</div>

<!-- Featured Image -->
<div class="bg-surface-dark border border-[#2d3829] rounded-xl p-6">
<h3 class="text-lg font-bold text-white mb-4">Featured Image</h3>
@if($post->featured_image)
<div class="mb-4">
<div class="relative inline-block">
<img src="{{ $post->featured_image_url }}" alt="Current featured image" class="w-32 h-24 object-cover rounded-lg border border-[#42523d]">
<button type="button" onclick="removeCurrentImage()" class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center text-white hover:bg-red-600 transition-colors">
<span class="material-symbols-outlined text-xs">close</span>
</button>
</div>
<p class="text-xs text-text-secondary mt-2">Current featured image</p>
</div>
@endif
<div class="space-y-4">
<div class="relative">
<input type="file" name="featured_image" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
<div class="border-2 border-dashed border-[#42523d] rounded-lg p-8 text-center hover:border-primary transition-colors">
<div class="text-text-secondary mb-2">
<span class="material-symbols-outlined text-4xl">add_photo_alternate</span>
</div>
<p class="text-sm text-text-secondary">{{ $post->featured_image ? 'Click to replace featured image' : 'Click to upload featured image' }}</p>
<p class="text-xs text-text-secondary/70 mt-1">PNG, JPG, GIF up to 2MB</p>
</div>
</div>
</div>
</div>
</div>

<!-- Right: Meta Information -->
<div class="w-full lg:w-[400px] shrink-0">
<div class="bg-surface-dark border border-[#2d3829] rounded-xl p-6 space-y-6">
<!-- Status -->
<div>
<h4 class="text-white font-bold mb-3">Status</h4>
<div class="space-y-2">
<label class="flex items-center">
<input type="radio" name="status" value="draft" {{ old('status', $post->status) === 'draft' ? 'checked' : '' }} class="text-primary focus:ring-primary">
<span class="ml-2 text-text-secondary">Draft</span>
</label>
<label class="flex items-center">
<input type="radio" name="status" value="published" {{ old('status', $post->status) === 'published' ? 'checked' : '' }} class="text-primary focus:ring-primary">
<span class="ml-2 text-text-secondary">Published</span>
</label>
<label class="flex items-center">
<input type="radio" name="status" value="archived" {{ old('status', $post->status) === 'archived' ? 'checked' : '' }} class="text-primary focus:ring-primary">
<span class="ml-2 text-text-secondary">Archived</span>
</label>
</div>
</div>

<!-- Category -->
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-2">Category *</label>
<select name="category" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" required>
<option value="">Select category...</option>
<option value="community" {{ old('category', $post->category) === 'community' ? 'selected' : '' }}>Community</option>
<option value="education" {{ old('category', $post->category) === 'education' ? 'selected' : '' }}>Education</option>
<option value="environment" {{ old('category', $post->category) === 'environment' ? 'selected' : '' }}>Environment</option>
<option value="fundraising" {{ old('category', $post->category) === 'fundraising' ? 'selected' : '' }}>Fundraising</option>
<option value="volunteers" {{ old('category', $post->category) === 'volunteers' ? 'selected' : '' }}>Volunteers</option>
<option value="impact" {{ old('category', $post->category) === 'impact' ? 'selected' : '' }}>Impact</option>
<option value="technology" {{ old('category', $post->category) === 'technology' ? 'selected' : '' }}>Technology</option>
</select>
</div>

<!-- Author Information -->
<div>
<h4 class="text-white font-bold mb-3">Author Information</h4>
<div class="space-y-3">
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-1">Author Name *</label>
<input type="text" name="author_name" value="{{ old('author_name', $post->author_name) }}" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-2 text-white placeholder-text-secondary focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-sm" required>
</div>
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-1">Author Role</label>
<input type="text" name="author_role" value="{{ old('author_role', $post->author_role) }}" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-2 text-white placeholder-text-secondary focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-sm" placeholder="e.g., Community Director">
</div>
</div>
</div>

<!-- Publishing Options -->
<div>
<h4 class="text-white font-bold mb-3">Publishing Options</h4>
<div class="space-y-3">
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-1">Publish Date</label>
<input type="datetime-local" name="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-2 text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-sm">
<p class="text-xs text-text-secondary/70 mt-1">Leave empty to publish immediately</p>
</div>
<div>
<label class="block text-text-secondary text-xs font-bold uppercase tracking-wider mb-1">Read Time (minutes)</label>
<input type="number" name="read_time" value="{{ old('read_time', $post->read_time) }}" min="1" class="w-full bg-[#1e261c] border border-[#42523d] rounded-lg px-4 py-2 text-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-sm" placeholder="5">
</div>
<div class="text-xs text-text-secondary">
<p><strong>Views:</strong> {{ number_format($post->views) }}</p>
<p><strong>Created:</strong> {{ $post->created_at->format('M d, Y H:i') }}</p>
<p><strong>Last Updated:</strong> {{ $post->updated_at->format('M d, Y H:i') }}</p>
</div>
</div>
</div>

<!-- Action Buttons -->
<div class="pt-4 border-t border-[#2d3829]">
<div class="flex gap-3">
<button type="submit" class="flex-1 flex items-center justify-center gap-2 px-4 py-3 rounded-lg bg-primary text-background-dark text-sm font-bold hover:bg-primary-hover transition-all">
<span class="material-symbols-outlined text-[18px]">publish</span>
Update Post
</button>
<a href="{{ route('blog.show', $post->slug) }}" target="_blank" class="flex-1 flex items-center justify-center gap-2 px-4 py-3 rounded-lg border border-[#42523d] text-text-secondary hover:text-white hover:border-white/20 text-sm font-bold transition-all">
<span class="material-symbols-outlined text-[18px]">visibility</span>
View Live
</a>
</div>
</div>
</div>
</div>
</form>

<script>
function removeCurrentImage() {
    if (confirm('Are you sure you want to remove the current featured image?')) {
        // Add a hidden input to indicate image removal
        const form = document.getElementById('blogForm');
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'remove_featured_image';
        input.value = '1';
        form.appendChild(input);

        // Submit the form
        form.submit();
    }
}
</script>
</div>
</main>
</div>
@endsection
