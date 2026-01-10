@extends('layouts.app')

@section('title', 'Blog - Latest News & Stories | NGO Australia')

@section('content')
<!-- Page Header -->
<div class="relative w-full h-64 bg-gradient-to-br from-[#152111] to-[#111a0e] flex items-center justify-center">
<div class="absolute inset-0 bg-black/30"></div>
<div class="relative z-10 text-center px-6 pt-24 md:pt-32">
    <h1 class="text-4xl md:text-6xl font-black text-white mb-4">Latest News & Stories</h1>
    <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto">Stay informed about our impact, community stories, and the latest developments in our mission to build stronger communities.</p>
</div>

</div>

<!-- Blog Posts Grid -->
<section class="py-24 bg-[#152111]">
<div class="max-w-[1100px] mx-auto px-6">
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Blog Post 1 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-56 overflow-hidden relative">
<img alt="Community Garden Project Success" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCDpRAFDSkA9IQsl9FazExhDTH3Yy7Zbp-VYBrm4az7edbp8gE32vLM0QDvCwtOl8qJ86BgyYdbdq56PmVvMtY-ET5czLpwDS8q-S2xKXsLL46w9jXNr3vX9aTMhWE01gLChu3HEE5GfYdsY3GAreosim0Hwsr1_EIPv7iWi_Vu7QshuuAuTgJwhC0qISAstWDIsup17D7gyEgWo2DVPCtcnP86AoGaC3taZB7vxramksQQdTq6z-2JkF4MR5IUpQVV6lUI6KUfgE"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Community
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>December 15, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>5 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Community Garden Project Transforms Urban Food Access</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">How our community garden initiative in inner-city Sydney is providing fresh produce to over 200 families weekly, creating both nutritional and social benefits.</p>
<div class="flex items-center justify-between">
<a href="{{ route('blog.community-garden') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
<div class="flex items-center gap-1 text-gray-500 text-xs">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>2.4k views</span>
</div>
</div>
</div>
</article>

<!-- Blog Post 2 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-56 overflow-hidden relative">
<img alt="Indigenous Youth Leadership Program" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAA0mrmOiSHCvLYAnSrq4ZpL59wBQAzJSTDkBU_dDW5MU3BwEoACgL8pOfM0L5nyTLcsn_JO5JciZMMCyIluvaPYAyhhAGn91ImiCr5TSXpXgazm3ijrcyaGn5gh0IXWGB5Vu2fepwj9VDdIMsFZjIA1ZDACLN4AOwdhuMsnP__Jr2VMJ4IvgSOsBJzgbwdty-UfdOjYwKubAnXpO32M8-SdVGI4kVazcGJ7hnKxBZHpMBQoinQOhRuod6H8lrJoACIvfh_pVDM-fc"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Education
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>December 10, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>7 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Empowering Indigenous Youth Through Digital Skills Training</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">Our groundbreaking program teaching coding and digital literacy to Indigenous youth in remote communities, opening doors to new career opportunities.</p>
<div class="flex items-center justify-between">
<a href="{{ route('blog.indigenous-youth') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
<div class="flex items-center gap-1 text-gray-500 text-xs">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>1.8k views</span>
</div>
</div>
</div>
</article>

<!-- Blog Post 3 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-56 overflow-hidden relative">
<img alt="Bushfire Recovery Progress" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('asset/images/featured-causes/bush-fire-recovery.jpg') }}"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Environment
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>December 5, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>6 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">One Year After the Fires: Hope Blooms in Replanted Forests</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">Celebrating the remarkable recovery of bushfire-affected regions as native vegetation returns, bringing wildlife and hope to devastated communities.</p>
<div class="flex items-center justify-between">
<a href="{{ route('blog.bushfire-recovery') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
<div class="flex items-center gap-1 text-gray-500 text-xs">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>3.1k views</span>
</div>
</div>
</div>
</article>

<!-- Blog Post 4 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-56 overflow-hidden relative">
<img alt="Rural Education Technology" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('asset/images/featured-causes/education.jpg') }}"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Technology
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>November 28, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>8 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Solar-Powered Learning: Bringing Internet to Remote Schools</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">How renewable energy and technology are bridging the digital divide for students in Australia's most isolated communities.</p>
<div class="flex items-center justify-between">
<a href="{{ route('blog.solar-learning') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
<div class="flex items-center gap-1 text-gray-500 text-xs">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>2.7k views</span>
</div>
</div>
</div>
</article>

<!-- Blog Post 5 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-56 overflow-hidden relative">
<img alt="Food Security Community Impact" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('asset/images/featured-causes/food-security-network.png') }}"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Impact
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>November 20, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>5 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">From Struggle to Stability: Food Bank Success Stories</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">Real stories of families who have transitioned from food insecurity to self-sufficiency through our community food network program.</p>
<div class="flex items-center justify-between">
<a href="{{ route('blog.food-security') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
<div class="flex items-center gap-1 text-gray-500 text-xs">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>1.9k views</span>
</div>
</div>
</div>
</article>

<!-- Blog Post 6 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-56 overflow-hidden relative">
<img alt="Volunteer Training Program" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPsENbRHuOPkKk6Yad_HDRehtScGRQ4W9XyZbMQEKxqNvZjhi1PdXdEr3Pmu3dogvZgZ-_lfqeUzOqOoEDDBADU8F9ZFhUs96tCaVxAwAEjMfOndoDpIJF10Iv5Tuc8O56h3OTnQjJVIAuFtBmGiFvOhrhAy4LJZCg3jHeEFtw6cEnUNuZbPLRvn-7zU-I0XCL6ogYVboc99lzlAFC6DdHj4brnFhkBhDT0yjQChYEupXJ-Y_fxCJtdgRCIw"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Volunteers
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>November 15, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>4 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Building Tomorrow's Leaders: Our Volunteer Development Program</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">How we're investing in our volunteers through comprehensive training programs that develop leadership skills and create lasting community impact.</p>
<div class="flex items-center justify-between">
<a href="{{ route('blog.volunteer-development') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
<div class="flex items-center gap-1 text-gray-500 text-xs">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>2.2k views</span>
</div>
</div>
</div>
</article>

<!-- Blog Post 7 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-56 overflow-hidden relative">
<img alt="Climate Action Initiative" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsrKpqsENEsdC79uHCv8ZFB21Esh89D2hkXGmh6XPHj-hTlwBTSFlA1ph_bBMv4QRqUsU3Ejed2DS5zV7wPcok_KnSlovwRu0oNXSiGMpe3L2t4GQ_5raubMwuECIzi68D9QPwoyGQ1A1zn7eFesq3_5i7ltg3NQILb8smlbnG2nVHuMarK_GiuWI14GdshvXUyYdBjKFFKDf0LG-q1-H2-AkA5ApNq9nOopD2ZriHjmvOZXW1X7SgQUOBSxiZKNifGhyWhZuDitA"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Climate
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>November 8, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>9 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Climate Resilience: Adapting Communities for a Sustainable Future</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">Our comprehensive approach to climate adaptation, from coastal communities to inland towns, ensuring Australia remains resilient in the face of environmental change.</p>
<div class="flex items-center justify-between">
<a href="{{ route('blog.climate-resilience') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
<div class="flex items-center gap-1 text-gray-500 text-xs">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>3.8k views</span>
</div>
</div>
</div>
</article>

<!-- Blog Post 8 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-56 overflow-hidden relative">
<img alt="Healthcare Access Program" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCDpRAFDSkA9IQsl9FazExhDTH3Yy7Zbp-VYBrm4az7edbp8gE32vLM0QDvCwtOl8qJ86BgyYdbdq56PmVvMtY-ET5czLpwDS8q-S2xKXsLL46w9jXNr3vX9aTMhWE01gLChu3HEE5GfYdsY3GAreosim0Hwsr1_EIPv7iWi_Vu7QshuuAuTgJwhC0qISAstWDIsup17D7gyEgWo2DVPCtcnP86AoGaC3taZB7vxramksQQdTq6z-2JkF4MR5IUpQVV6lUI6KUfgE"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Health
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>November 1, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>6 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Breaking Barriers: Mobile Health Clinics Reach Remote Communities</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">Our mobile health initiative bringing essential medical services to communities that have historically lacked adequate healthcare access.</p>
<div class="flex items-center justify-between">
<a href="{{ route('blog.mobile-health') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
<div class="flex items-center gap-1 text-gray-500 text-xs">
<span class="material-symbols-outlined text-sm">visibility</span>
<span>2.9k views</span>
</div>
</div>
</div>
</article>
</div>

<!-- Pagination -->
<div class="flex justify-center mt-16">
<div class="flex items-center gap-2">
<a href="#" class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold hover:bg-primary-dark transition-colors">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</a>
<a href="#" class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold">1</a>
<a href="#" class="w-10 h-10 rounded-lg bg-surface-dark text-gray-400 flex items-center justify-center font-bold hover:bg-surface-dark hover:text-white transition-colors">2</a>
<a href="#" class="w-10 h-10 rounded-lg bg-surface-dark text-gray-400 flex items-center justify-center font-bold hover:bg-surface-dark hover:text-white transition-colors">3</a>
<a href="#" class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center font-bold hover:bg-primary-dark transition-colors">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</a>
</div>
</div>
</div>
</section>

<!-- Newsletter CTA -->
<section class="py-20 bg-accent-brown-dark relative overflow-hidden">
<!-- Abstract patterns for texture -->
<div class="absolute top-0 right-0 w-64 h-64 bg-accent-brown opacity-20 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
<div class="absolute bottom-0 left-0 w-64 h-64 bg-black opacity-20 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
<div class="max-w-[960px] mx-auto px-6 relative z-10 text-center">
<h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight">
        Stay Connected with Our Journey
    </h2>
<p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto mb-10">
        Get our latest stories, impact reports, and community updates delivered straight to your inbox.
    </p>
<div class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-md mx-auto">
<input class="flex-1 h-12 px-4 rounded-lg bg-white/10 border border-white/30 text-white placeholder-white/60 focus:outline-none focus:border-primary backdrop-blur-sm" placeholder="Enter your email" type="email"/>
<button class="h-12 px-8 bg-primary hover:bg-white text-[#152112] hover:text-accent-brown-dark text-base font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl">
Subscribe
</button>
</div>
</div>
</section>
@endsection
