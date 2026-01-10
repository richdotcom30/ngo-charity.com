@extends('layouts.app')

@section('title', 'NGO Australia - Empowering Communities')

@section('content')
<!-- Hero Section -->
<div class="relative w-full h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
<!-- Background Image with Overlay -->
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-gradient-to-b from-[#152111]/80 via-[#152111]/40 to-[#152111] z-10"></div>
<img alt="Volunteers planting trees" class="w-full h-full object-cover animate-[pulse_10s_ease-in-out_infinite]" data-alt="Group of diverse volunteers working together in a garden, smiling and planting trees" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBN6DKhawFGhn0wfjo-z67Tnlsjj0-8XEuF7sDIJ_Yr0cch1PoFSa1b1OLgZ_K16MMNIrSHZkJlV42b9uI-3YxbhmzoaFyPwc-65ky65rGOtk3LPWYmPTwPKfWI3xaQZIOA6GbvTaaY5S4s9G8W_WatdASbk_ehkEsTTBpMPgdKste74DmfMHgJd_7MEAiQf--IHqQ-ft7GqI6VHfHGg7qGFUil8aoRLbmkasESMicdW3YxTtSwdap04lbLjd2dNEVjPUApTXKae78"/>
</div>
<div class="relative z-20 max-w-[960px] px-6 text-center flex flex-col items-center gap-6 mt-16">
<span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-white/90 text-sm font-medium tracking-wide">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                Making a difference since 2014
            </span>
<h1 class="text-white text-5xl md:text-7xl font-black leading-[1.1] tracking-tight">
                Building Stronger <br/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-white/70">Communities</span>
</h1>
<p class="text-gray-300 text-lg md:text-xl font-medium max-w-2xl leading-relaxed">
                Empowering locals through sustainable initiatives that create lasting change across the continent. Join us in shaping a better future.
            </p>
<div class="flex flex-wrap items-center justify-center gap-4 mt-4">
<a href="/donate" class="h-14 px-8 bg-primary hover:bg-primary-dark text-[#152112] text-base font-bold rounded-full transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-primary/40 flex items-center gap-2">
<span>Donate Now</span>
<span class="material-symbols-outlined text-xl">heart_check</span>
</a>
<button class="h-14 px-8 bg-transparent hover:bg-white/10 border-2 border-white/30 text-white text-base font-bold rounded-full transition-all duration-300 flex items-center gap-2 backdrop-blur-sm">
<span>Become a Volunteer</span>
<span class="material-symbols-outlined text-xl">arrow_forward</span>
</button>
</div>
<!-- Slider Indicators -->
<div class="absolute bottom-[-80px] md:bottom-[-120px] flex gap-3">
<div class="w-12 h-1.5 rounded-full bg-primary shadow-[0_0_10px_rgba(76,223,32,0.5)]"></div>
<div class="w-12 h-1.5 rounded-full bg-white/20 hover:bg-white/40 cursor-pointer transition-colors"></div>
<div class="w-12 h-1.5 rounded-full bg-white/20 hover:bg-white/40 cursor-pointer transition-colors"></div>
</div>
</div>
</div>
<!-- Stats Section -->
<div class="relative w-full bg-[#152111] py-12 border-b border-[#2d4625]">
<div class="max-w-[1100px] mx-auto px-6">
<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
<!-- Stat 1 -->
<div class="flex flex-col items-center p-6 bg-surface-dark rounded-2xl border border-[#2d4625] hover:border-accent-brown/50 transition-colors group">
<div class="mb-3 p-3 bg-accent-brown/20 rounded-full text-accent-brown group-hover:bg-accent-brown group-hover:text-white transition-colors duration-300">
<span class="material-symbols-outlined text-3xl">diversity_1</span>
</div>
<p class="text-white text-3xl md:text-4xl font-black tracking-tight mb-1">15k+</p>
<p class="text-gray-400 text-sm font-medium uppercase tracking-wider">People Helped</p>
</div>
<!-- Stat 2 -->
<div class="flex flex-col items-center p-6 bg-surface-dark rounded-2xl border border-[#2d4625] hover:border-accent-brown/50 transition-colors group">
<div class="mb-3 p-3 bg-accent-brown/20 rounded-full text-accent-brown group-hover:bg-accent-brown group-hover:text-white transition-colors duration-300">
<span class="material-symbols-outlined text-3xl">check_circle</span>
</div>
<p class="text-white text-3xl md:text-4xl font-black tracking-tight mb-1">120</p>
<p class="text-gray-400 text-sm font-medium uppercase tracking-wider">Projects Done</p>
</div>
<!-- Stat 3 -->
<div class="flex flex-col items-center p-6 bg-surface-dark rounded-2xl border border-[#2d4625] hover:border-accent-brown/50 transition-colors group">
<div class="mb-3 p-3 bg-accent-brown/20 rounded-full text-accent-brown group-hover:bg-accent-brown group-hover:text-white transition-colors duration-300">
<span class="material-symbols-outlined text-3xl">volunteer_activism</span>
</div>
<p class="text-white text-3xl md:text-4xl font-black tracking-tight mb-1">500+</p>
<p class="text-gray-400 text-sm font-medium uppercase tracking-wider">Volunteers</p>
</div>
<!-- Stat 4 -->
<div class="flex flex-col items-center p-6 bg-surface-dark rounded-2xl border border-[#2d4625] hover:border-accent-brown/50 transition-colors group">
<div class="mb-3 p-3 bg-accent-brown/20 rounded-full text-accent-brown group-hover:bg-accent-brown group-hover:text-white transition-colors duration-300">
<span class="material-symbols-outlined text-3xl">history</span>
</div>
<p class="text-white text-3xl md:text-4xl font-black tracking-tight mb-1">10</p>
<p class="text-gray-400 text-sm font-medium uppercase tracking-wider">Years Impact</p>
</div>
</div>
</div>
</div>
<!-- About Section -->
<section class="py-20 bg-[#152111]">
<div class="max-w-[1100px] mx-auto px-6">
<div class="grid lg:grid-cols-2 gap-12 items-center">
<div class="relative order-2 lg:order-1">
<div class="absolute -top-4 -left-4 w-24 h-24 bg-primary/20 rounded-full blur-xl"></div>
<div class="absolute -bottom-4 -right-4 w-32 h-32 bg-accent-brown/20 rounded-full blur-xl"></div>
<img alt="Volunteers smiling" class="relative rounded-[2.5rem] w-full object-cover shadow-2xl border border-[#2d4625]" data-alt="Two volunteers smiling while reviewing a document on a clipboard outdoors" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCDpRAFDSkA9IQsl9FazExhDTH3Yy7Zbp-VYBrm4az7edbp8gE32vLM0QDvCwtOl8qJ86BgyYdbdq56PmVvMtY-ET5czLpwDS8q-S2xKXsLL46w9jXNr3vX9aTMhWE01gLChu3HEE5GfYdsY3GAreosim0Hwsr1_EIPv7iWi_Vu7QshuuAuTgJwhC0qISAstWDIsup17D7gyEgWo2DVPCtcnP86AoGaC3taZB7vxramksQQdTq6z-2JkF4MR5IUpQVV6lUI6KUfgE"/>
<!-- Floating Card -->
<div class="absolute -bottom-6 -left-6 bg-surface-dark p-4 rounded-2xl border border-[#2d4625] shadow-xl max-w-[200px] hidden md:block">
<div class="flex items-center gap-3 mb-2">
<div class="w-10 h-10 rounded-full bg-accent-brown flex items-center justify-center text-white">
<span class="material-symbols-outlined text-xl">format_quote</span>
</div>
<p class="text-xs text-gray-300 font-bold">Trusted by Locals</p>
</div>
<p class="text-xs text-gray-400 italic">"Their support changed our entire community structure for the better."</p>
</div>
</div>
<div class="flex flex-col gap-6 order-1 lg:order-2">
<div class="flex items-center gap-2 text-accent-brown font-bold tracking-wider uppercase text-sm">
<span class="w-8 h-[2px] bg-accent-brown"></span>
                        Our Mission
                    </div>
<h2 class="text-4xl md:text-5xl font-black text-white leading-tight">
                        Fostering Resilience & Hope Across Australia
                    </h2>
<p class="text-gray-300 text-lg leading-relaxed">
                        We are dedicated to fostering resilience and hope in communities across the continent. From disaster relief to long-term education support, our goal is to build a future where everyone has the opportunity to thrive.
                    </p>
<p class="text-gray-400 leading-relaxed">
                        We believe in a hands-on approach, working directly with local leaders to identify needs and implement sustainable solutions that last for generations.
                    </p>
<div class="pt-4">
<button class="inline-flex h-12 px-8 bg-[#2d4625] hover:bg-surface-dark text-white text-base font-bold rounded-full items-center justify-center transition-all duration-300 border border-[#3e5e34] hover:border-primary gap-2 group">
                            Read Our Story
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Causes Section -->
<section class="py-24 bg-[#111a0e]">
<div class="max-w-[1100px] mx-auto px-6">
<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
<div class="max-w-2xl">
<h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Featured Causes</h2>
<p class="text-gray-400 text-lg">Your support goes directly to these critical programs.</p>
</div>
<a class="text-primary hover:text-white font-bold flex items-center gap-1 transition-colors" href="/programs">
                    View All Programs <span class="material-symbols-outlined">chevron_right</span>
</a>
</div>
<div class="grid md:grid-cols-3 gap-8">
<!-- Card 1 -->
<div class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5 flex flex-col">
<div class="h-56 overflow-hidden relative">
<img alt="Education Support" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('asset/images/featured-causes/education.jpg') }}"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Education
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Rural Education Initiative</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">Providing books, solar power, and internet access to remote schools in the outback.</p>
<!-- Progress Bar -->
<div class="mb-4">
<div class="flex justify-between text-xs font-bold text-gray-300 mb-2">
<span>Raised: $12,400</span>
<span>Goal: $20,000</span>
</div>
<div class="w-full bg-black/40 rounded-full h-2">
<div class="bg-primary h-2 rounded-full w-[62%] relative overflow-hidden">
<div class="absolute inset-0 bg-white/30 animate-[shimmer_2s_infinite]"></div>
</div>
</div>
</div>
<button class="w-full py-3 rounded-xl bg-[#2d4625] text-white font-bold text-sm hover:bg-primary hover:text-[#152112] transition-colors duration-300">
                            Support This Cause
                        </button>
</div>
</div>
<!-- Card 2 -->
<div class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5 flex flex-col">
<div class="h-56 overflow-hidden relative">
<img alt="Bushfire Recovery" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('asset/images/featured-causes/bush-fire-recovery.jpg') }}"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Environment
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Bushfire Recovery</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">Replanting native forests and supporting wildlife rehabilitation centers across affected regions.</p>
<!-- Progress Bar -->
<div class="mb-4">
<div class="flex justify-between text-xs font-bold text-gray-300 mb-2">
<span>Raised: $45,000</span>
<span>Goal: $50,000</span>
</div>
<div class="w-full bg-black/40 rounded-full h-2">
<div class="bg-primary h-2 rounded-full w-[90%]"></div>
</div>
</div>
<button class="w-full py-3 rounded-xl bg-[#2d4625] text-white font-bold text-sm hover:bg-primary hover:text-[#152112] transition-colors duration-300">
                            Support This Cause
                        </button>
</div>
</div>
<!-- Card 3 -->
<div class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5 flex flex-col">
<div class="h-56 overflow-hidden relative">
<img alt="Food Security Network" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('asset/images/featured-causes/food-security-network.png') }}"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Community
                        </div>
</div>
<div class="p-6 flex flex-col flex-1">
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Food Security Network</h3>
<p class="text-gray-400 text-sm mb-6 flex-1">Ensuring vulnerable families have access to nutritious meals through local food banks.</p>
<!-- Progress Bar -->
<div class="mb-4">
<div class="flex justify-between text-xs font-bold text-gray-300 mb-2">
<span>Raised: $8,200</span>
<span>Goal: $15,000</span>
</div>
<div class="w-full bg-black/40 rounded-full h-2">
<div class="bg-primary h-2 rounded-full w-[54%]"></div>
</div>
</div>
<button class="w-full py-3 rounded-xl bg-[#2d4625] text-white font-bold text-sm hover:bg-primary hover:text-[#152112] transition-colors duration-300">
                            Support This Cause
                        </button>
</div>
</div>
</div>
</div>
</section>
<!-- Donation CTA Banner -->
<section class="py-20 relative overflow-hidden bg-accent-brown-dark">
<!-- Abstract patterns for texture -->
<div class="absolute top-0 right-0 w-64 h-64 bg-accent-brown opacity-20 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
<div class="absolute bottom-0 left-0 w-64 h-64 bg-black opacity-20 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
<div class="max-w-[960px] mx-auto px-6 relative z-10 text-center">
<h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight">
                Your contribution changes lives immediately.
            </h2>
<p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto mb-10">
                Every dollar you donate goes directly to on-ground efforts. Join 15,000+ others who are making Australia stronger today.
            </p>
<div class="flex flex-col sm:flex-row items-center justify-center gap-4">
<a href="/donate" class="h-14 px-10 bg-primary hover:bg-white text-[#152112] hover:text-accent-brown-dark text-lg font-bold rounded-full transition-all duration-300 shadow-[0_0_20px_rgba(76,223,32,0.4)] hover:shadow-xl animate-[pulse_3s_ease-in-out_infinite]">
                    Make a Donation
                </a>
<div class="text-white/60 text-sm font-medium">or</div>
<a class="text-white font-bold border-b border-white/40 hover:border-white hover:text-primary transition-colors pb-0.5" href="#">
                    Start a Fundraiser
                </a>
</div>
</div>
</section>
<!-- Testimonials Slider -->
<section class="py-24 bg-[#152111] overflow-hidden">
<div class="max-w-[1100px] mx-auto px-6 mb-12 text-center">
<h2 class="text-3xl font-bold text-white mb-2">Voices of Impact</h2>
<p class="text-gray-400">Hear from our volunteers and community members.</p>
</div>
<div class="flex gap-6 animate-[scroll_40s_linear_infinite] w-max hover:[animation-play-state:paused] px-6">
<!-- Testimonial 1 -->
<div class="w-[400px] p-8 bg-surface-dark rounded-[2rem] border border-[#2d4625]">
<div class="flex gap-1 text-primary mb-4">
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
</div>
<p class="text-gray-300 text-lg italic mb-6">"Volunteering with NGO Australia has been the most rewarding experience of my life. Seeing the direct impact on families is incredible."</p>
<div class="flex items-center gap-4">
<img alt="Sarah Jenkins" class="w-12 h-12 rounded-full object-cover border-2 border-primary" data-alt="Portrait of Sarah Jenkins" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7kB231B3FU6r3WrSWMx-nQ6dnzzovKkZj7_jMCcLaED8ymmH1N_Szm9xN7mRqCKkgroRVSVlX6UOx5K0Xj_Noiah9mBI33K2OrXDxtkE7AMAiLib_DuLgPaILY8KO7RC2UhqUbPyT1nSQccdPnoo70JeuQ0uYePkMfcqANkct-TVez37ERisLw_Sx2ggbFGP24uKgP0iMSr417cfCbkst8-AH913Jxz8QA1_UD4vlR4E97bzjVMeeguvgxyt9S5mB2ehJ5sEtoJ0"/>
<div>
<p class="text-white font-bold">Sarah Jenkins</p>
<p class="text-xs text-gray-500 uppercase tracking-wide">Volunteer, Sydney</p>
</div>
</div>
</div>
<!-- Testimonial 2 -->
<div class="w-[400px] p-8 bg-surface-dark rounded-[2rem] border border-[#2d4625]">
<div class="flex gap-1 text-primary mb-4">
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
</div>
<p class="text-gray-300 text-lg italic mb-6">"After the floods, we had nothing. This organization was there the next day with supplies and hope. We are forever grateful."</p>
<div class="flex items-center gap-4">
<img alt="Mark Thompson" class="w-12 h-12 rounded-full object-cover border-2 border-primary" data-alt="Portrait of Mark Thompson" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJsWTNaAHiSuXkf7KPnR-88QfQ3lgkw65RXgMnuWJ9w7_1_LCCAbsMGGlUKPbGTutughkRt3Ct-ijIw65EH2InCRVVX9_5mWNeyFcysvbE5TZuRY2GK0c8ag5sg6lcupAE2RPggY18Hn2c2IvDa8zqoDO95wpgPmMrUMN5ins9oumwqqvpDaKmyMyKKxh5bh6JX-CFzCIiVRe3qCFHdM1HxWiHQeqElVwmlGny0rj8en2ZjlbmL87L_jC8iITTCdfp1AWQ5VUCa0s"/>
<div>
<p class="text-white font-bold">Mark Thompson</p>
<p class="text-xs text-gray-500 uppercase tracking-wide">Beneficiary, QLD</p>
</div>
</div>
</div>
<!-- Testimonial 3 -->
<div class="w-[400px] p-8 bg-surface-dark rounded-[2rem] border border-[#2d4625]">
<div class="flex gap-1 text-primary mb-4">
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
</div>
<p class="text-gray-300 text-lg italic mb-6">"The transparency and efficiency of this team are unmatched. I know exactly where my donation goes."</p>
<div class="flex items-center gap-4">
<img alt="Emily Chen" class="w-12 h-12 rounded-full object-cover border-2 border-primary" data-alt="Portrait of Emily Chen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCM1ovxUwlQVbdWcgi_eqGjmlNfcJczVBJHAsKEtiQ_5M-PSPL3Q5Kdsyfzx0KBCXMLFy78ODYmI_C8nC0dEVSjh8nl-6WzmepY7W5ZDKYMsu-qiwGo4cW68891sTDAKQtLHqV3NrlVJgbx3TJXHd0GaRlFgDB9JzLRfPdKygPd0pQxqjBXgTGftRbrNRyEt0nBVtfneiM7j4xZ722asa1FhWxxyl4XBc9AyyDGi_VVmFvwdEasodPZxh_D7OHqa99uay0yi0WhEn8"/>
<div>
<p class="text-white font-bold">Emily Chen</p>
<p class="text-xs text-gray-500 uppercase tracking-wide">Donor, Melbourne</p>
</div>
</div>
</div>
<!-- Repeat for smooth scroll -->
<div class="w-[400px] p-8 bg-surface-dark rounded-[2rem] border border-[#2d4625]">
<div class="flex gap-1 text-primary mb-4">
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
<span class="material-symbols-outlined text-sm">star</span>
</div>
<p class="text-gray-300 text-lg italic mb-6">"Volunteering with NGO Australia has been the most rewarding experience of my life. Seeing the direct impact on families is incredible."</p>
<div class="flex items-center gap-4">
<img alt="Sarah Jenkins" class="w-12 h-12 rounded-full object-cover border-2 border-primary" data-alt="Portrait of Sarah Jenkins" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKH51KWFgGAiwRFl6zw2PnXJv1-AgD5itd5BKWGw3EgLGupfLUWPwgnBAdYoy5MJw74vALjszZtHa2GSCEPIPjwzauOYb4tzMDxDOpZNafKlq_9svSZ_rzlfpJVmci3f84FvJFOTjhXG-yzcSUMehl0H04w6t8ipx7jTOzpwHk3y0Ly2jqb6M4KSQ4bR-7P7N1MuJ8bk0usecBd2loYLGaxyCXfNFzo_R9P4UKgoz_CW534RPOzSxNSWQTtUwx2c-F9DgTooTzMkc"/>
<div>
<p class="text-white font-bold">Sarah Jenkins</p>
<p class="text-xs text-gray-500 uppercase tracking-wide">Volunteer, Sydney</p>
</div>
</div>
</div>
</div>
</section>
<!-- Blog Section -->
<section class="py-24 bg-[#152111]">
<div class="max-w-[1100px] mx-auto px-6">
<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
<div class="max-w-2xl">
<h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Latest Stories & Updates</h2>
<p class="text-gray-400 text-lg">Stay informed about our impact and community initiatives.</p>
</div>
<a href="{{ route('blog') }}" class="text-primary hover:text-white font-bold flex items-center gap-1 transition-colors">
                    View More Stories <span class="material-symbols-outlined">chevron_right</span>
</a>
</div>
<div class="grid md:grid-cols-3 gap-8">
<!-- Blog Preview 1 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-48 overflow-hidden relative">
<img alt="Community Garden Project" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCDpRAFDSkA9IQsl9FazExhDTH3Yy7Zbp-VYBrm4az7edbp8gE32vLM0QDvCwtOl8qJ86BgyYdbdq56PmVvMtY-ET5czLpwDS8q-S2xKXsLL46w9jXNr3vX9aTMhWE01gLChu3HEE5GfYdsY3GAreosim0Hwsr1_EIPv7iWi_Vu7QshuuAuTgJwhC0qISAstWDIsup17D7gyEgWo2DVPCtcnP86AoGaC3taZB7vxramksQQdTq6z-2JkF4MR5IUpQVV6lUI6KUfgE"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Community
                        </div>
</div>
<div class="p-6">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>December 15, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>5 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Community Garden Project Transforms Urban Food Access</h3>
<p class="text-gray-400 text-sm mb-4">How our community garden initiative in inner-city Sydney is providing fresh produce to over 200 families weekly.</p>
<a href="{{ route('blog') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
</div>
</article>

<!-- Blog Preview 2 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-48 overflow-hidden relative">
<img alt="Indigenous Youth Program" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAA0mrmOiSHCvLYAnSrq4ZpL59wBQAzJSTDkBU_dDW5MU3BwEoACgL8pOfM0L5nyTLcsn_JO5JciZMMCyIluvaPYAyhhAGn91ImiCr5TSXpXgazm3ijrcyaGn5gh0IXWGB5Vu2fepwj9VDdIMsFZjIA1ZDACLN4AOwdhuMsnP__Jr2VMJ4IvgSOsBJzgbwdty-UfdOjYwKubAnXpO32M8-SdVGI4kVazcGJ7hnKxBZHpMBQoinQOhRuod6H8lrJoACIvfh_pVDM-fc"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Education
                        </div>
</div>
<div class="p-6">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>December 10, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>7 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">Empowering Indigenous Youth Through Digital Skills</h3>
<p class="text-gray-400 text-sm mb-4">Our groundbreaking program teaching coding and digital literacy to Indigenous youth in remote communities.</p>
<a href="{{ route('blog') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
</div>
</article>

<!-- Blog Preview 3 -->
<article class="group bg-surface-dark rounded-[2rem] overflow-hidden border border-[#2d4625] hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary/5">
<div class="h-48 overflow-hidden relative">
<img alt="Bushfire Recovery" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ asset('asset/images/featured-causes/bush-fire-recovery.jpg') }}"/>
<div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Environment
                        </div>
</div>
<div class="p-6">
<div class="flex items-center gap-2 text-accent-brown text-sm font-bold mb-3">
<span>December 5, 2024</span>
<span class="w-1 h-1 bg-accent-brown rounded-full"></span>
<span>6 min read</span>
</div>
<h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">One Year After the Fires: Hope Blooms in Replanted Forests</h3>
<p class="text-gray-400 text-sm mb-4">Celebrating the remarkable recovery of bushfire-affected regions as native vegetation returns.</p>
<a href="{{ route('blog') }}" class="text-primary hover:text-white font-bold text-sm transition-colors">Read More →</a>
</div>
</article>
</div>
</div>
</section>

<!-- Partners Section -->
<section class="py-12 bg-[#111a0e] border-t border-[#2d4625]">
<div class="max-w-[1100px] mx-auto px-6">
<p class="text-center text-gray-500 text-sm font-bold uppercase tracking-widest mb-8">Our Partners & Sponsors</p>
<div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
<!-- Using text placeholders styled as logos for demo, simulating SVGs -->
<div class="text-2xl font-black text-white flex items-center gap-2"><span class="material-symbols-outlined">forest</span> GreenCorp</div>
<div class="text-2xl font-black text-white flex items-center gap-2"><span class="material-symbols-outlined">water_drop</span> AquaLife</div>
<div class="text-2xl font-black text-white flex items-center gap-2"><span class="material-symbols-outlined">sunny</span> SunPower</div>
<div class="text-2xl font-black text-white flex items-center gap-2"><span class="material-symbols-outlined">handshake</span> CommunityFirst</div>
<div class="text-2xl font-black text-white flex items-center gap-2"><span class="material-symbols-outlined">school</span> EduFuture</div>
</div>
</div>
</section>
@endsection
