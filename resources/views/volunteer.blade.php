@extends('layouts.app')

@section('title', 'Volunteer - NGO Australia')

@section('content')
<!-- Hero Section -->
<div class="relative w-full py-6 px-4 md:px-10 lg:px-20 xl:px-40">
<div class="max-w-[1200px] mx-auto">
<div class="relative overflow-hidden rounded-3xl min-h-[500px] flex flex-col items-center justify-center text-center p-6 md:p-12 gap-6 bg-cover bg-center" data-alt="Diverse group of volunteers planting trees in Australian outback" style='background-image: linear-gradient(rgba(21, 33, 18, 0.4), rgba(21, 33, 18, 0.7)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuA3-MCyzlk6eVqaqyLRisZyFN-ikekfdULjq441wiiqlkklYkVJKzf4007i6hbncSawFKy9Ifm5I5Q5fzxcUXxFFWsnW352v-ZGiqFDc6eTr0jnsmO8YV65d2-JCZjOQOwj3IxBGNk-BAUNWVseNO0f05QyaPBo2emrIW2adgx8ND59mk9CLIbYeJ9VfbF4eR_q642hAGIbtrZLY3touQPCwRucke8JmAWaQPaz5BTb051JKka3LhKVj0JmHcKRTyfWFTVjjEO-LGw");'>
<div class="flex flex-col gap-4 max-w-2xl z-10">
<span class="inline-block mx-auto px-4 py-1 rounded-full bg-primary/20 text-primary border border-primary/30 text-xs font-bold uppercase tracking-wider backdrop-blur-md">Join the movement</span>
<h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-black leading-tight tracking-[-0.033em]">
                        Lend a Hand, <span class="text-primary">Change a Life</span>
</h1>
<p class="text-white/90 text-base md:text-lg font-medium leading-relaxed max-w-lg mx-auto">
                        Join Australia’s most dedicated community of changemakers. From Sydney to the Outback, your time makes a world of difference.
</p>
</div>
<div class="flex flex-wrap gap-4 justify-center z-10 pt-4">
<a class="flex items-center justify-center rounded-full h-12 px-8 bg-primary text-[#152112] text-base font-bold transition-transform hover:scale-105" href="#opportunities">
                        View Opportunities
</a>
<button class="flex items-center justify-center rounded-full h-12 px-8 bg-white/10 backdrop-blur-sm border border-white/20 text-white text-base font-bold hover:bg-white/20 transition-colors">
                        Watch Video <span class="material-symbols-outlined ml-2 text-xl">play_circle</span>
</button>
</div>
</div>
</div>
</div>
<!-- Stats -->
<section class="py-10 px-4 md:px-10 lg:px-20 xl:px-40 bg-background-dark">
<div class="max-w-[1200px] mx-auto">
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-8">
<div class="flex flex-col gap-2 rounded-2xl p-6 md:p-8 bg-surface-dark border border-surface-highlight hover:border-primary/30 transition-colors group">
<div class="size-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined">groups</span>
</div>
<p class="text-white text-sm font-medium uppercase tracking-wider">Volunteers Mobilized</p>
<p class="text-white text-3xl md:text-4xl font-bold leading-tight">5,000+</p>
</div>
<div class="flex flex-col gap-2 rounded-2xl p-6 md:p-8 bg-surface-dark border border-surface-highlight hover:border-primary/30 transition-colors group">
<div class="size-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined">schedule</span>
</div>
<p class="text-white text-sm font-medium uppercase tracking-wider">Hours Donated</p>
<p class="text-white text-3xl md:text-4xl font-bold leading-tight">120k+</p>
</div>
<div class="flex flex-col gap-2 rounded-2xl p-6 md:p-8 bg-surface-dark border border-surface-highlight hover:border-primary/30 transition-colors group">
<div class="size-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined">favorite</span>
</div>
<p class="text-white text-sm font-medium uppercase tracking-wider">Lives Impacted</p>
<p class="text-white text-3xl md:text-4xl font-bold leading-tight">50,000</p>
</div>
</div>
</div>
</section>
<!-- Split Section: Opportunities & Application Form -->
<section class="py-10 px-4 md:px-10 lg:px-20 xl:px-40 bg-background-dark" id="opportunities">
<div class="max-w-[1200px] mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Left Column: Opportunities List -->
<div class="lg:col-span-7 flex flex-col gap-8">
<div>
<h2 class="text-white text-3xl font-bold leading-tight mb-2">Current Opportunities</h2>
<p class="text-white">Find a role that fits your skills and schedule.</p>
</div>
<div class="flex flex-col gap-4">
<!-- Card 1 -->
<div class="group flex flex-col sm:flex-row items-stretch rounded-2xl overflow-hidden bg-surface-dark border border-surface-highlight hover:border-primary/50 transition-all shadow-sm hover:shadow-[0_0_15px_rgba(76,223,32,0.1)]">
<div class="sm:w-48 h-48 sm:h-auto bg-cover bg-center" data-alt="Mentor helping young student with homework" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBkXa9Fi001D18aMEjbtE_eOf0Jzt7GZyej_h3UUU3MLqiCISnrS4nXO7RFT_q0X-JrSc6acbMW7IPSWunx0MuCRnEKx4YTypNfm5CfaothVxpdILLVcercIk7aKuMfhrBqt0e10M5Wzvl4NneVzxVzU9747KDTHXZ6Ao5Ki72JfxFdDoVgAEtMmZl7LBMlW-_HRgluryAg0qkUyGfKFfPUXj4-KcQVh0V8HYFpYaVaDjsZ7PWH0-i0zua8HuiShWHlyHq6l5tmVI8");'></div>
<div class="flex-1 p-6 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start mb-2">
<h3 class="text-white text-xl font-bold">Youth Mentor</h3>
<span class="bg-surface-highlight text-primary text-xs px-2 py-1 rounded-md font-bold uppercase">Weekly</span>
</div>
<div class="flex items-center gap-1 text-white text-sm mb-3">
<span class="material-symbols-outlined text-[16px]">location_on</span> Sydney, NSW
</div>
<p class="text-white/80 text-sm mb-4 leading-relaxed line-clamp-2">
                                                Support young people in building resilience and confidence through weekly mentorship sessions. Make a lasting impact on a child's future.
</p>
</div>
<div class="flex gap-2">
<button class="flex-1 rounded-full bg-primary text-[#152112] text-sm font-bold py-2 px-4 hover:bg-[#3bc215] transition-colors">Apply Now</button>
<button class="rounded-full border border-surface-highlight text-white hover:bg-surface-highlight py-2 px-3 transition-colors">
<span class="material-symbols-outlined text-sm">bookmark</span>
</button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="group flex flex-col sm:flex-row items-stretch rounded-2xl overflow-hidden bg-surface-dark border border-surface-highlight hover:border-primary/50 transition-all shadow-sm hover:shadow-[0_0_15px_rgba(76,223,32,0.1)]">
<div class="sm:w-48 h-48 sm:h-auto bg-cover bg-center" data-alt="Volunteer organizing clothes at donation center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBtBkUScYTHi8ZV0oTj4WM1oA6-MdBttIUrNSFNHCwYoymq2y6U8OB8BVP0Sc-gyJXBsIZLSGovUFmMuxJSBM8RL-J5WJxPmKgdbgAYqTYFSZ-rY62jEqFsj5lCnE2TcCJDXbYFo0aFSJfjlQlhmN_k3CaZ5ZrMmVUBIpzm5jdIspOpyxX35V7WmoyRH97aqQ8O1U9fbCkT7HGBhW7eWSIJfZk_dyh9oYuo2uDcGR9HwNDsJS_fBn4gxaUBPooBLtDDK4XkkSvTpcg");'></div>
<div class="flex-1 p-6 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start mb-2">
<h3 class="text-white text-xl font-bold">Shelter Support</h3>
<span class="bg-surface-highlight text-primary text-xs px-2 py-1 rounded-md font-bold uppercase">Weekends</span>
</div>
<div class="flex items-center gap-1 text-white text-sm mb-3">
<span class="material-symbols-outlined text-[16px]">location_on</span> Melbourne, VIC
</div>
<p class="text-white/80 text-sm mb-4 leading-relaxed line-clamp-2">
                                                Assist in the daily operations of our community shelter. Help with meal preparation, sorting donations, and greeting guests.
</p>
</div>
<div class="flex gap-2">
<button class="flex-1 rounded-full bg-primary text-[#152112] text-sm font-bold py-2 px-4 hover:bg-[#3bc215] transition-colors">Apply Now</button>
<button class="rounded-full border border-surface-highlight text-white hover:bg-surface-highlight py-2 px-3 transition-colors">
<span class="material-symbols-outlined text-sm">bookmark</span>
</button>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="group flex flex-col sm:flex-row items-stretch rounded-2xl overflow-hidden bg-surface-dark border border-surface-highlight hover:border-primary/50 transition-all shadow-sm hover:shadow-[0_0_15px_rgba(76,223,32,0.1)]">
<div class="sm:w-48 h-48 sm:h-auto bg-cover bg-center" data-alt="Person working on laptop remotely" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBlZO573CE6zPoTJjCJmPk0cH4jLkEI1PdnlYlTT3sYeHI_GBeOFoMhHYIDZhs0PNF7_fvX9r0k_IrQa-ukRc1oVXzMuahjM3DWwGPc3-e1FlYaNJLESuk4Fll6sxaPsu1St_CKbi9ucsTiYo0v5smAtMJBc8w1k03_C6ncc3RcH8wSE49KxOklYGD_PdDl7k45G2ZdGXNalXlxJb-495l-VRM7ovOZNha1toU_qI5p6ZW9M8aN2D_MYa6GcyR-lxAeH7rAwig3XUU");'></div>
<div class="flex-1 p-6 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start mb-2">
<h3 class="text-white text-xl font-bold">Fundraising Assistant</h3>
<span class="bg-surface-highlight text-primary text-xs px-2 py-1 rounded-md font-bold uppercase">Flexible</span>
</div>
<div class="flex items-center gap-1 text-white text-sm mb-3">
<span class="material-symbols-outlined text-[16px]">wifi</span> Remote / Australia Wide
</div>
<p class="text-white/80 text-sm mb-4 leading-relaxed line-clamp-2">
                                                Help us organize digital campaigns and connect with donors. Perfect for those with strong communication and organizational skills.
</p>
</div>
<div class="flex gap-2">
<button class="flex-1 rounded-full bg-primary text-[#152112] text-sm font-bold py-2 px-4 hover:bg-[#3bc215] transition-colors">Apply Now</button>
<button class="rounded-full border border-surface-highlight text-white hover:bg-surface-highlight py-2 px-3 transition-colors">
<span class="material-symbols-outlined text-sm">bookmark</span>
</button>
</div>
</div>
</div>
</div>
<div class="flex justify-center mt-4">
<button class="text-primary font-bold text-sm hover:underline">View All Opportunities</button>
</div>
</div>
<!-- Right Column: Quick Application Form (Sticky) -->
<div class="lg:col-span-5 relative">
<div class="lg:sticky lg:top-24 bg-[#1a2617] rounded-3xl p-6 border border-surface-highlight shadow-xl">
<div class="mb-6">
<h3 class="text-white text-xl font-bold mb-1">Quick Application</h3>
<p class="text-white text-sm">Start your journey in 3 easy steps.</p>
<!-- Progress Bar -->
<div class="flex items-center gap-2 mt-4">
<div class="h-1.5 flex-1 rounded-full bg-primary"></div>
<div class="h-1.5 flex-1 rounded-full bg-surface-highlight"></div>
<div class="h-1.5 flex-1 rounded-full bg-surface-highlight"></div>
</div>
</div>
<form class="flex flex-col gap-5">
<!-- Step 1: Personal Info -->
<div class="space-y-4">
<div class="relative group">
<span class="absolute left-4 top-1/2 -translate-y-1/2 text-white material-symbols-outlined">person</span>
<input class="w-full bg-surface-dark border border-surface-highlight text-white text-sm rounded-xl pl-12 pr-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-white/50" placeholder="Full Name" type="text"/>
</div>
<div class="relative group">
<span class="absolute left-4 top-1/2 -translate-y-1/2 text-white material-symbols-outlined">email</span>
<input class="w-full bg-surface-dark border border-surface-highlight text-white text-sm rounded-xl pl-12 pr-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-white/50" placeholder="Email Address" type="email"/>
</div>
<div class="relative group">
<span class="absolute left-4 top-1/2 -translate-y-1/2 text-white material-symbols-outlined">call</span>
<input class="w-full bg-surface-dark border border-surface-highlight text-white text-sm rounded-xl pl-12 pr-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-white/50" placeholder="Phone Number" type="tel"/>
</div>
</div>
<div class="pt-2">
<button class="w-full rounded-full bg-primary text-[#152112] font-bold py-3.5 hover:bg-[#3bc215] transition-colors flex items-center justify-center gap-2 group" type="button">
<span>Next Step</span>
<span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
<p class="text-center text-xs text-white mt-3">
                                            By continuing, you agree to our <a class="underline hover:text-white" href="#">Privacy Policy</a>.
</p>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
<!-- Testimonials -->
<section class="py-16 bg-surface-dark/30 border-y border-surface-highlight">
<div class="px-4 md:px-10 lg:px-20 xl:px-40 max-w-[1200px] mx-auto">
<div class="text-center mb-12">
<h2 class="text-white text-3xl font-bold leading-tight mb-3">Voices from the Community</h2>
<p class="text-white">Hear from the people who make it all possible.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Testimonial 1 -->
<div class="bg-surface-dark p-8 rounded-3xl border border-surface-highlight relative">
<span class="material-symbols-outlined text-6xl text-surface-highlight absolute top-6 right-6 opacity-50">format_quote</span>
<div class="flex items-center gap-4 mb-6">
<div class="size-14 rounded-full bg-cover bg-center border-2 border-primary" data-alt="Portrait of Sarah J, a volunteer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuADrfcSUy_EI01Qy2wSAkcLDnPiCppnNd3bt0gKIYJqxalBk-jMfLTA74mLdlkP7RyBDdfK5tZ_g0sOKpxXHW5qSp-OySKrZ5pskyRU0-uADLcuR08jKRqChiiwtmbgTToYhU-NfrxGCa7VDS4rxRfn2b8N_9VDVcmL2bEIAmOInbVyIEsTq6n-e1cn1YGHkcPTKhycr4CmDdEHdlG2UQLX7fwDn5FHqrHo4XRyYy0EbXMAKM4WkzUFqmimI8M1GrY6qaRy5KrZReI");'></div>
<div>
<h4 class="text-white font-bold text-lg">Sarah J.</h4>
<p class="text-white text-sm">Sydney Volunteer</p>
</div>
</div>
<p class="text-white/90 italic leading-relaxed">
                                "Volunteering here gave me more than I gave. It’s a family. I’ve met incredible people and learned skills I use in my daily job."
</p>
</div>
<!-- Testimonial 2 -->
<div class="bg-surface-dark p-8 rounded-3xl border border-surface-highlight relative">
<span class="material-symbols-outlined text-6xl text-surface-highlight absolute top-6 right-6 opacity-50">format_quote</span>
<div class="flex items-center gap-4 mb-6">
<div class="size-14 rounded-full bg-cover bg-center border-2 border-primary" data-alt="Portrait of Michael T, a volunteer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCWgYHE87-xHUj4_aQ865IZD0KldLksqcYVci-VDfEDZoggOsUfX9ty563jE3bKmDg1vLWshsqh4mW_P7ZK4oqk9JzXx_c3-HguJC72I70tUW03vPszhmTLe28ich1hkmXzFbzduNkAevaNWVMXagXEWU0R0FRaOIeq0xHbhr__6KWCuN__jycSs0qaJbbeF-WR7urld7_AVmITFAzW0hh_Fv9WmstUBLS8US6rdl7Vp_JVdm1iSmCkrLP0NCx1pfcJkDIaadjZofI");'></div>
<div>
<h4 class="text-white font-bold text-lg">Michael T.</h4>
<p class="text-white text-sm">Remote Coordinator</p>
</div>
</div>
<p class="text-white/90 italic leading-relaxed">
                                "The flexibility is amazing. I can contribute from home while balancing my studies. Knowing I'm making a difference is the best feeling."
</p>
</div>
<!-- Testimonial 3 -->
<div class="bg-surface-dark p-8 rounded-3xl border border-surface-highlight relative hidden lg:block">
<span class="material-symbols-outlined text-6xl text-surface-highlight absolute top-6 right-6 opacity-50">format_quote</span>
<div class="flex items-center gap-4 mb-6">
<div class="size-14 rounded-full bg-cover bg-center border-2 border-primary" data-alt="Portrait of Elena R, a volunteer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBliFhuOa3-dWhGiEhZWFMg8CA2p8Kgx0iv5xCS__00Z9j1nBkZfyPdLNfAfLtUxpwYhycJvBZMauU_-bT0j-yrKpZe_90wdUzxxfocVSBUknAMz0eue84IgIhPykbIXFmFOScb0X0bueZ9BSedRd4iZxxLB_wlAyzYtBtr8leaFRHI4gvnWaDE2mtVb3IgNavoYvBtUu1QlMeED9kJ91uySTbmRQ2PncXtkZTPDhZUS42FLw5QVxS8wIk0AknzDhviyf1CL2lLDis");'></div>
<div>
<h4 class="text-white font-bold text-lg">Elena R.</h4>
<p class="text-white text-sm">Event Support</p>
</div>
</div>
<p class="text-white/90 italic leading-relaxed">
                                "The events are so well organized and fun! You really feel part of a team working towards a common goal. Highly recommend joining."
</p>
</div>
</div>
</div>
</section>
<!-- FAQ Section -->
<section class="py-16 px-4 md:px-10 lg:px-20 xl:px-40 bg-background-dark">
<div class="max-w-[800px] mx-auto">
<h2 class="text-white text-2xl font-bold leading-tight mb-8 text-center">Frequently Asked Questions</h2>
<div class="flex flex-col gap-4">
<details class="group bg-surface-dark rounded-2xl border border-surface-highlight overflow-hidden">
<summary class="flex justify-between items-center p-5 cursor-pointer list-none text-white font-medium hover:text-primary transition-colors">
<span>Do I need specific qualifications to volunteer?</span>
<span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<div class="px-5 pb-5 text-white text-sm leading-relaxed">
                                Not necessarily! Many roles require enthusiasm and a willingness to learn rather than specific degrees. However, some specialized roles (like counselling) may require certifications, which will be listed in the job description.
</div>
</details>
<details class="group bg-surface-dark rounded-2xl border border-surface-highlight overflow-hidden">
<summary class="flex justify-between items-center p-5 cursor-pointer list-none text-white font-medium hover:text-primary transition-colors">
<span>Is there an age limit for volunteers?</span>
<span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<div class="px-5 pb-5 text-white text-sm leading-relaxed">
                                Generally, volunteers must be at least 18 years old. However, we have a specific youth program for teenagers aged 15-17 with parental consent.
</div>
</details>
<details class="group bg-surface-dark rounded-2xl border border-surface-highlight overflow-hidden">
<summary class="flex justify-between items-center p-5 cursor-pointer list-none text-white font-medium hover:text-primary transition-colors">
<span>What is the minimum time commitment?</span>
<span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<div class="px-5 pb-5 text-white text-sm leading-relaxed">
                                It varies by role. Some event-based roles are one-off, while mentorship programs typically require a commitment of 2-4 hours per week for at least 6 months to ensure stability for our clients.
</div>
</details>
</div>
</div>
</section>
@endsection
