@extends('layouts.app')

@section('title', $blog['title'] . ' - NGO Australia')

@section('content')
<!-- Hero Section -->
<div class="relative w-full h-80 bg-gradient-to-br from-[#152111] to-[#111a0e] flex items-center justify-center">
<div class="absolute inset-0 bg-black/40"></div>
<img alt="{{ $blog['title'] }}" class="absolute inset-0 w-full h-full object-cover" src="{{ asset('asset/images/featured-causes/' . $blog['image']) }}"/>
<div class="relative z-10 text-center px-6">
<div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/20 backdrop-blur-sm text-white text-sm font-medium mb-4">
<span class="material-symbols-outlined text-sm">{{ $blog['icon'] }}</span>
{{ $blog['category'] }}
</div>
<h1 class="text-3xl md:text-5xl font-black text-white mb-4">{{ $blog['title'] }}</h1>
<div class="flex items-center justify-center gap-6 text-white/80 text-sm">
<span>{{ $blog['date'] }}</span>
<span class="w-1 h-1 bg-white/50 rounded-full"></span>
<span>{{ $blog['read_time'] }} min read</span>
<span class="w-1 h-1 bg-white/50 rounded-full"></span>
<span>{{ $blog['views'] }} views</span>
</div>
</div>
</div>

<!-- Article Content -->
<section class="py-16 bg-[#152111]">
<div class="max-w-4xl mx-auto px-6">
<!-- Article Meta -->
<div class="flex items-center justify-between mb-8 pb-8 border-b border-[#2d4625]">
<div class="flex items-center gap-4">
<img alt="{{ $blog['author']['name'] }}" class="w-12 h-12 rounded-full object-cover border-2 border-primary" src="{{ asset('asset/images/' . $blog['author']['avatar']) }}"/>
<div>
<p class="text-white font-bold">{{ $blog['author']['name'] }}</p>
<p class="text-gray-400 text-sm">{{ $blog['author']['role'] }}</p>
</div>
</div>
<div class="flex items-center gap-2">
<button class="p-2 rounded-lg bg-[#2d4625] text-white hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-sm">share</span>
</button>
<button class="p-2 rounded-lg bg-[#2d4625] text-white hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-sm">bookmark_border</span>
</button>
</div>
</div>

<!-- Article Body -->
<div class="prose prose-lg prose-invert max-w-none">
<p class="text-xl text-gray-300 leading-relaxed mb-8">
{{ $blog['excerpt'] }}
</p>

@if(isset($blog['sections']))
@foreach($blog['sections'] as $section)
@if($section['type'] === 'heading')
<h2 class="text-2xl font-bold text-white mt-12 mb-6">{{ $section['content'] }}</h2>
@elseif($section['type'] === 'paragraph')
<p class="text-gray-300 leading-relaxed mb-6">{{ $section['content'] }}</p>
@elseif($section['type'] === 'highlight')
<div class="bg-[#1e2f1b] p-8 rounded-2xl my-12 border border-[#2d4625]">
<h3 class="text-xl font-bold text-white mb-4">{{ $section['title'] }}</h3>
<ul class="space-y-3 text-gray-300">
@foreach($section['items'] as $item)
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
<span><strong>{{ $item['label'] }}:</strong> {{ $item['description'] }}</span>
</li>
@endforeach
</ul>
</div>
@elseif($section['type'] === 'quote')
<div class="bg-primary/10 border border-primary/30 p-8 rounded-2xl my-12">
<h3 class="text-xl font-bold text-white mb-4">{{ $section['title'] }}</h3>
<p class="text-gray-300 mb-6">{{ $section['quote'] }}</p>
@if(isset($section['cta']))
<div class="flex flex-col sm:flex-row gap-4">
<a href="{{ route($section['cta']['link']) }}" class="inline-flex items-center justify-center h-12 px-6 bg-primary hover:bg-primary-dark text-[#152112] font-bold rounded-lg transition-colors">
{{ $section['cta']['text'] }}
</a>
@if(isset($section['cta']['secondary']))
<a href="{{ route($section['cta']['secondary']['link']) }}" class="inline-flex items-center justify-center h-12 px-6 bg-transparent border-2 border-primary text-primary hover:bg-primary hover:text-[#152112] font-bold rounded-lg transition-colors">
{{ $section['cta']['secondary']['text'] }}
</a>
@endif
</div>
@endif
</div>
@endif
@endforeach
@endif
</div>

<!-- Article Footer -->
<div class="mt-16 pt-8 border-t border-[#2d4625]">
<div class="flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-4 text-sm text-gray-400">
<span>Published {{ $blog['date'] }}</span>
<span class="w-1 h-1 bg-gray-600 rounded-full"></span>
<span>{{ $blog['read_time'] }} min read</span>
</div>
<div class="flex items-center gap-2">
<span class="text-gray-400 text-sm">Share this article:</span>
<div class="flex gap-2">
<button class="p-2 rounded-lg bg-[#2d4625] text-gray-400 hover:text-white hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-sm">share</span>
</button>
<button class="p-2 rounded-lg bg-[#2d4625] text-gray-400 hover:text-white hover:bg-blue-600 transition-colors">
<span class="material-symbols-outlined text-sm">public</span>
</button>
</div>
</div>
</div>
</div>

<!-- Related Articles -->
<div class="mt-16">
<h3 class="text-2xl font-bold text-white mb-8">Related Articles</h3>
<div class="grid md:grid-cols-2 gap-6">
@foreach($blog['related'] as $related)
<div class="group bg-surface-dark rounded-2xl overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300">
<div class="h-40 overflow-hidden relative">
<img alt="{{ $related['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('asset/images/featured-causes/' . $related['image']) }}"/>
<div class="absolute top-3 left-3 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-2 py-1 rounded-full">
{{ $related['category'] }}
</div>
</div>
<div class="p-4">
<h4 class="text-white font-bold mb-2 group-hover:text-primary transition-colors">{{ $related['title'] }}</h4>
<p class="text-gray-400 text-sm mb-3">{{ $related['excerpt'] }}</p>
<a href="{{ route($related['route']) }}" class="text-primary hover:text-white text-sm font-bold transition-colors">Read More →</a>
</div>
</div>
@endforeach
</div>
</div>

<!-- Navigation -->
<div class="flex justify-between items-center mt-12 pt-8 border-t border-[#2d4625]">
<a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-primary hover:text-white font-bold transition-colors">
<span class="material-symbols-outlined">arrow_back</span>
Back to Blog
</a>
<div class="flex gap-2">
<a href="#" class="p-2 rounded-lg bg-[#2d4625] text-gray-400 hover:text-white hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-sm">navigate_before</span>
</a>
<a href="#" class="p-2 rounded-lg bg-[#2d4625] text-gray-400 hover:text-white hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-sm">navigate_next</span>
</a>
</div>
</div>
</div>
</section>
@endsection
