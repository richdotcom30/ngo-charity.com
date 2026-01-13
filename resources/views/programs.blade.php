@extends('layouts.app')

@section('title', 'Our Programs & Causes - NGO Australia')

@section('content')
<!-- Hero Section -->
<div class="relative w-full">
    <div class="relative flex min-h-[500px] flex-col gap-6 bg-cover bg-center bg-no-repeat items-center justify-center p-8 md:p-16" data-alt="Group of diverse people smiling in a field looking hopeful" style='background-image: linear-gradient(rgba(21, 33, 18, 0.6) 0%, rgba(21, 33, 18, 0.95) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBqROQj3ZL_kVxGaELgHf7RQcu2Fzi4AXOC_aAWOrO1_j0ldgF547ZBAgy70haLs-FfWBbcsSrqc3-T2xoqzCjQ83HLHrN_t3XwqOJ8ALMlSplstABF2Rm3DAiPlllaxeswNS-0AEhC1P4apAfY_-nbNqGU3yq6PjW_sXOrBYNOubE96ZSZS3dHJmOnR-i3D2Y4bfKicYAhXV5lfJGkM7YoE6G70Bn_ZkagT6G-9SoLgVjaK9z9KMTA2drsRlluS6OAdEvZS5AH1Rk");'>
        <div class="flex flex-col gap-4 text-center max-w-[800px] animate-fade-in-up">
            <div class="inline-flex items-center justify-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary w-fit mx-auto">
                <span class="material-symbols-outlined text-sm">public</span>
                <span class="text-xs font-bold uppercase tracking-wider">Making a Difference Since 2004</span>
            </div>
            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-[-0.033em]">
                Empowering Communities<br /><span class="text-primary">Across Australia</span> & Beyond
            </h1>
            <h2 class="text-gray-200 text-base md:text-lg font-normal leading-relaxed max-w-2xl mx-auto">
                We are dedicated to bringing hope, resources, and sustainable change to those who need it most. Join us in building a better tomorrow.
            </h2>
        </div>
        <div class="flex flex-wrap gap-4 mt-4">
            <a href="{{ route('programs') }}" class="flex items-center justify-center rounded-full h-12 px-8 bg-primary hover:scale-105 transition-transform text-[#152112] text-base font-bold">
                <span class="mr-2">Explore Causes</span>
                <span class="material-symbols-outlined text-sm font-bold">arrow_downward</span>
            </a>
            <a href="{{ route('faqs') }}" class="flex items-center justify-center rounded-full h-12 px-8 bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-colors text-white text-base font-bold">
                <span>How We Work</span>
            </a>
        </div>
    </div>
</div>
<!-- Stats Section -->
<div class="w-full bg-background-dark border-b border-[#2d4625]">
    <div class="max-w-[1200px] mx-auto px-4 md:px-10 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col gap-2 rounded-2xl p-6 bg-[#20321b] border border-[#2d4625] hover:border-primary/30 transition-colors">
                <div class="flex items-center gap-3 mb-2">
                    <div class="p-2 rounded-full bg-primary/20 text-primary">
                        <span class="material-symbols-outlined">favorite</span>
                    </div>
                    <p class="text-gray-300 text-sm font-medium uppercase tracking-wider">Lives Impacted</p>
                </div>
                <p class="text-white text-4xl font-bold leading-tight">50,000+</p>
                <p class="text-xs text-gray-400">Direct assistance provided this year</p>
            </div>
            <div class="flex flex-col gap-2 rounded-2xl p-6 bg-[#20321b] border border-[#2d4625] hover:border-primary/30 transition-colors">
                <div class="flex items-center gap-3 mb-2">
                    <div class="p-2 rounded-full bg-primary/20 text-primary">
                        <span class="material-symbols-outlined">construction</span>
                    </div>
                    <p class="text-gray-300 text-sm font-medium uppercase tracking-wider">Projects Completed</p>
                </div>
                <p class="text-white text-4xl font-bold leading-tight">120</p>
                <p class="text-xs text-gray-400">Across 15 different regions</p>
            </div>
            <div class="flex flex-col gap-2 rounded-2xl p-6 bg-[#20321b] border border-[#2d4625] hover:border-primary/30 transition-colors">
                <div class="flex items-center gap-3 mb-2">
                    <div class="p-2 rounded-full bg-primary/20 text-primary">
                        <span class="material-symbols-outlined">verified</span>
                    </div>
                    <p class="text-gray-300 text-sm font-medium uppercase tracking-wider">Transparency</p>
                </div>
                <p class="text-white text-4xl font-bold leading-tight">100%</p>
                <p class="text-xs text-gray-400">Of donations go directly to the field</p>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Area -->
<div class="flex-1 w-full bg-background-dark">
    <div class="flex flex-col items-center py-10">
        <!-- Filter Chips (Sticky) -->
        <div class="sticky top-[73px] z-40 w-full bg-background-dark/95 backdrop-blur-md border-y border-[#2d4625] py-4 mb-8">
            <div class="max-w-[1200px] mx-auto px-4 overflow-x-auto no-scrollbar">
                <div class="flex gap-3 min-w-max">
                    <button class="filter-btn active flex h-10 items-center justify-center gap-x-2 rounded-full bg-primary text-[#152112] px-5 transition-all hover:scale-105 shadow-[0_0_10px_rgba(76,223,32,0.3)]" data-filter="all">
                        <span class="material-symbols-outlined text-[20px]">grid_view</span>
                        <span class="text-sm font-bold">All Causes</span>
                    </button>
                    <button class="filter-btn flex h-10 items-center justify-center gap-x-2 rounded-full bg-[#2d4625] hover:bg-[#3d5c33] px-5 transition-all hover:text-white group" data-filter="education">
                        <span class="material-symbols-outlined text-[20px] text-gray-300 group-hover:text-white">school</span>
                        <span class="text-white text-sm font-medium">Education</span>
                    </button>
                    <button class="filter-btn flex h-10 items-center justify-center gap-x-2 rounded-full bg-[#2d4625] hover:bg-[#3d5c33] px-5 transition-all hover:text-white group" data-filter="health">
                        <span class="material-symbols-outlined text-[20px] text-gray-300 group-hover:text-white">cardiology</span>
                        <span class="text-white text-sm font-medium">Health</span>
                    </button>
                    <button class="filter-btn flex h-10 items-center justify-center gap-x-2 rounded-full bg-[#2d4625] hover:bg-[#3d5c33] px-5 transition-all hover:text-white group" data-filter="environment">
                        <span class="material-symbols-outlined text-[20px] text-gray-300 group-hover:text-white">eco</span>
                        <span class="text-white text-sm font-medium">Environment</span>
                    </button>
                    <button class="filter-btn flex h-10 items-center justify-center gap-x-2 rounded-full bg-[#2d4625] hover:bg-[#3d5c33] px-5 transition-all hover:text-white group" data-filter="disaster-relief">
                        <span class="material-symbols-outlined text-[20px] text-gray-300 group-hover:text-white">flood</span>
                        <span class="text-white text-sm font-medium">Disaster Relief</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Causes Grid -->
        <div class="w-full max-w-[1200px] px-4 md:px-10 pb-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1: Water -->
                <div class="program-card group flex flex-col bg-[#20321b] rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-300 hover:shadow-glow border border-[#2d4625]" data-category="all">
                    <div class="relative h-56 bg-cover bg-center" data-alt="Clean water flowing from a tap in a rural area" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAwtHvjwSHrvVz1eaQDP5LYVQ0n4Qrq6HAVGSTetebEup8G9zHQlXdNxyUWjfIv1Oq-0MJf4krURAUjbI4oLgAsy9KJ2yvLrq4zszqR_G6FHE-XMZhE3dDHwxJoUjleIBS7vIhMMQBoQbX6Q_4gUjDL7cGmFNmVMioWIfR8k-uDcl99veoLeM9D6u-9q-v3vWJA2_uyzqOXC_y4W5PtL6cEVyQMWrlnvL38f6goPzNFm6kkmWsiOEI65Qlw32-nUHvFLMnQC7XLkZk");'>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-black/60 backdrop-blur-md rounded-full text-xs font-bold text-white border border-white/10 uppercase tracking-wide">Infrastructure</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-primary text-[#152112] rounded-full text-xs font-bold flex items-center gap-1 shadow-lg">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Tax Deductible
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-white text-xl font-bold leading-tight mb-2 group-hover:text-primary transition-colors">Clean Water for Outback</h3>
                        <p class="text-[#a0c695] text-sm leading-relaxed mb-6 line-clamp-2">Helping remote communities access safe and sustainable drinking water sources through solar pumps.</p>
                        <div class="mt-auto">
                            <div class="flex justify-between text-xs font-medium mb-2">
                                <span class="text-white">$15,400 raised</span>
                                <span class="text-gray-400">Goal: $20,000</span>
                            </div>
                            <div class="w-full bg-[#152112] h-2 rounded-full overflow-hidden mb-6">
                                <div class="bg-primary h-full rounded-full transition-all duration-1000" style="width: 77%"></div>
                            </div>
                            <div class="flex gap-3">
                                <a href="/donate" class="flex-1 h-10 bg-primary hover:bg-white hover:text-black text-[#152112] font-bold rounded-full text-sm transition-colors text-center leading-10">Donate Now</a>
                                <button class="h-10 w-10 flex items-center justify-center rounded-full border border-[#2d4625] text-white hover:border-primary hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2: Education -->
                <div class="program-card group flex flex-col bg-[#20321b] rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-300 hover:shadow-glow border border-[#2d4625]" data-category="education">
                    <div class="relative h-56 bg-cover bg-center" data-alt="Children sitting in a classroom smiling" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCCdI9xupjvdBElaZAOmjodPf8UzeaOEMrNZCCqD2IzRcLX1vAtVpQdrfjY0S2aJmzvIbTMQmr_dr2Xn5M8gxFKLJ6EFA1gI56ItqxD17riwEGUUj0uoZcKoEEW6oJVoRQECzxICJAV1TJ2h5q1eY7Ais6nCEH469Oi8-ZbbdqfjSXV99glTRpbsnIhTpcdWwafOjBrbRN35kdj4j9b1BgJPfMAdusjgHqBNPDw6_QfW0rQC5OgQURFTVeVK6umAK7uY1ovUerIuV8");'>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-black/60 backdrop-blur-md rounded-full text-xs font-bold text-white border border-white/10 uppercase tracking-wide">Education</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-primary text-[#152112] rounded-full text-xs font-bold flex items-center gap-1 shadow-lg">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Tax Deductible
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-white text-xl font-bold leading-tight mb-2 group-hover:text-primary transition-colors">Tech for Rural Schools</h3>
                        <p class="text-[#a0c695] text-sm leading-relaxed mb-6 line-clamp-2">Providing laptops and internet connectivity to under-resourced schools in regional areas.</p>
                        <div class="mt-auto">
                            <div class="flex justify-between text-xs font-medium mb-2">
                                <span class="text-white">$8,250 raised</span>
                                <span class="text-gray-400">Goal: $12,000</span>
                            </div>
                            <div class="w-full bg-[#152112] h-2 rounded-full overflow-hidden mb-6">
                                <div class="bg-primary h-full rounded-full transition-all duration-1000" style="width: 68%"></div>
                            </div>
                            <div class="flex gap-3">
                                <a href="{{ route('donate') }}" class="flex-1 h-10 bg-primary hover:bg-white hover:text-black text-[#152112] font-bold rounded-full text-sm transition-colors text-center leading-10">Donate Now</a>
                                <button class="h-10 w-10 flex items-center justify-center rounded-full border border-[#2d4625] text-white hover:border-primary hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Environment (Completed) -->
                <div class="program-card group flex flex-col bg-[#20321b] rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-300 hover:shadow-glow border border-[#2d4625]" data-category="environment">
                    <div class="relative h-56 bg-cover bg-center" data-alt="Close up of a seedling being planted in soil" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuClczdDsECj80aSJ7nXMaFQaBGUST6cDc8kViyPbHI9nUu0JxLalSjbdg0s0Jftt6aOpmuK-dK9uQSK6aNDuLHz1mpKMjX7r01YLTVDilkdacL5IOByK2wJNioai7i3FpR_EKd7HA1QMcnORLdSSkqDGhCm-jB27mxEnztB8wFGM1qFc-YRNauiZU4dOvlRD0z5eRG0TPzLr3-_QGJhXVKMXuAYxPXUeNhxQPVMop-4LWAWD0LEpNIspD3h0zfcu-_QOX_lTifsGUA");'>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-black/60 backdrop-blur-md rounded-full text-xs font-bold text-white border border-white/10 uppercase tracking-wide">Environment</span>
                        </div>
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="bg-white text-black px-4 py-2 rounded-full font-bold text-sm">View Impact Report</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors">Reforestation Project QLD</h3>
                        </div>
                        <p class="text-[#a0c695] text-sm leading-relaxed mb-6 line-clamp-2">Restoring native habitats for wildlife corridors. 10,000 trees planted successfully.</p>
                        <div class="mt-auto">
                            <div class="flex justify-between text-xs font-medium mb-2">
                                <span class="text-primary font-bold">Fully Funded!</span>
                                <span class="text-gray-400">Goal: $50,000</span>
                            </div>
                            <div class="w-full bg-[#152112] h-2 rounded-full overflow-hidden mb-6">
                                <div class="bg-primary h-full rounded-full" style="width: 100%"></div>
                            </div>
                            <div class="flex gap-3">
                                <button class="flex-1 h-10 bg-[#2d4625] text-white font-bold rounded-full text-sm transition-colors border border-transparent hover:border-primary">Read Report</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4: Health -->
                <div class="program-card group flex flex-col bg-[#20321b] rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-300 hover:shadow-glow border border-[#2d4625]" data-category="health">
                    <div class="relative h-56 bg-cover bg-center" data-alt="A doctor checking a child's health in a clinic" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDzjYORRi4pbikdoULzArPfyYnk2t8-_hepiHc2nJuSaCqS4KTV1pL4pWmn4U6ULznBhXkREBSo9DnBLV9YuJoskBUyR408dLwucbfFHzMsX7M8aqDB0YHXkPavZ9IT-3iMMgvDG9O4xqXQXRmNQcZk7g0Iwm8MXiq9N6an0_C_VUAjt_BwWJhMOjQAv30Rec9Do7Oe9JMHD_H0MOr5iIFm4eW8mSCtzW6stwwoEYj_MnobxPB4AYA6MU70bRtBT5AjiJLTIUe2usE");'>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-black/60 backdrop-blur-md rounded-full text-xs font-bold text-white border border-white/10 uppercase tracking-wide">Health</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-primary text-[#152112] rounded-full text-xs font-bold flex items-center gap-1 shadow-lg">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Tax Deductible
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-white text-xl font-bold leading-tight mb-2 group-hover:text-primary transition-colors">Mobile Health Clinics</h3>
                        <p class="text-[#a0c695] text-sm leading-relaxed mb-6 line-clamp-2">Bringing essential medical services to indigenous communities with limited access to hospitals.</p>
                        <div class="mt-auto">
                            <div class="flex justify-between text-xs font-medium mb-2">
                                <span class="text-white">$45,000 raised</span>
                                <span class="text-gray-400">Goal: $60,000</span>
                            </div>
                            <div class="w-full bg-[#152112] h-2 rounded-full overflow-hidden mb-6">
                                <div class="bg-primary h-full rounded-full transition-all duration-1000" style="width: 75%"></div>
                            </div>
                            <div class="flex gap-3">
                                <a href="{{ route('donate') }}" class="flex-1 h-10 bg-primary hover:bg-white hover:text-black text-[#152112] font-bold rounded-full text-sm transition-colors text-center leading-10">Donate Now</a>
                                <button class="h-10 w-10 flex items-center justify-center rounded-full border border-[#2d4625] text-white hover:border-primary hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 5: Emergency -->
                <div class="program-card group flex flex-col bg-[#20321b] rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-300 hover:shadow-glow border border-[#2d4625]" data-category="disaster-relief">
                    <div class="relative h-56 bg-cover bg-center" data-alt="Flood affected area with emergency workers" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBz_8R7Kj3gUzOQw9YEbxgPjIYx0ig9FYYtD0-uIUfNzWt5JFVyIkWknMus52fUpVipN9GfgjvibIFTuVHRZGWu7SnPwLdcg-hjgaNwnFJ2qfLi7uB40tydy5Cadal_HdqfRaZQbqZD7KTeaJefU1TXxzGQtpK8dHuEn_RqczAIe9k3CjfwlDBKRtkGJUujjyy4l2fkLMVTC7W6D1NgbOVGIke7pPlXGt4pbTww2jDj2Xr2EQ-sC8dysjeQdBK4ts1S6NxQ4hst30M");'>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-red-600/90 backdrop-blur-md rounded-full text-xs font-bold text-white border border-white/10 uppercase tracking-wide flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">warning</span> Emergency
                            </span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-primary text-[#152112] rounded-full text-xs font-bold flex items-center gap-1 shadow-lg">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Tax Deductible
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-white text-xl font-bold leading-tight mb-2 group-hover:text-primary transition-colors">Flood Recovery Fund</h3>
                        <p class="text-[#a0c695] text-sm leading-relaxed mb-6 line-clamp-2">Immediate support for families displaced by recent floods in Northern NSW.</p>
                        <div class="mt-auto">
                            <div class="flex justify-between text-xs font-medium mb-2">
                                <span class="text-white">$120,500 raised</span>
                                <span class="text-gray-400">Goal: $200,000</span>
                            </div>
                            <div class="w-full bg-[#152112] h-2 rounded-full overflow-hidden mb-6">
                                <div class="bg-primary h-full rounded-full transition-all duration-1000" style="width: 60%"></div>
                            </div>
                            <div class="flex gap-3">
                                <a href="{{ route('donate') }}" class="flex-1 h-10 bg-primary hover:bg-white hover:text-black text-[#152112] font-bold rounded-full text-sm transition-colors text-center leading-10">Donate Now</a>
                                <button class="h-10 w-10 flex items-center justify-center rounded-full border border-[#2d4625] text-white hover:border-primary hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 6: Youth -->
                <div class="program-card group flex flex-col bg-[#20321b] rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-300 hover:shadow-glow border border-[#2d4625]" data-category="all">
                    <div class="relative h-56 bg-cover bg-center" data-alt="Group of teenagers talking in a circle outdoors" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAqGyjMrhdeWfiuA8z5Qn2JgznNzrgqduw8rt-97-Om5asAvQMqHcDffO15l8K_blTKXMcY_Z951c6xgh4BTXeUpPrN4katbuk90ZQKzGSdJANIQwjtx1L4aU90p09cpQdlCW8HFmygXcXh41jw7_5w5d6v4nauIefeq2zI11JVwsgOfe3EXwb56Hvk2PpW6O3oV7LBTmQ-z2pY33hUgyFIUm4etU7TpPFrG_kb5AJbt1VXFnzRLaDqI6xdXyIPa2ajWzq_2Ni4Z8w");'>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-black/60 backdrop-blur-md rounded-full text-xs font-bold text-white border border-white/10 uppercase tracking-wide">Community</span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-primary text-[#152112] rounded-full text-xs font-bold flex items-center gap-1 shadow-lg">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Tax Deductible
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-white text-xl font-bold leading-tight mb-2 group-hover:text-primary transition-colors">Youth Mental Health</h3>
                        <p class="text-[#a0c695] text-sm leading-relaxed mb-6 line-clamp-2">Counselling and support groups for at-risk youth in urban centers.</p>
                        <div class="mt-auto">
                            <div class="flex justify-between text-xs font-medium mb-2">
                                <span class="text-white">$22,100 raised</span>
                                <span class="text-gray-400">Goal: $30,000</span>
                            </div>
                            <div class="w-full bg-[#152112] h-2 rounded-full overflow-hidden mb-6">
                                <div class="bg-primary h-full rounded-full transition-all duration-1000" style="width: 73%"></div>
                            </div>
                            <div class="flex gap-3">
                                <a href="{{ route('donate') }}" class="flex-1 h-10 bg-primary hover:bg-white hover:text-black text-[#152112] font-bold rounded-full text-sm transition-colors text-center leading-10">Donate Now</a>
                                <button class="h-10 w-10 flex items-center justify-center rounded-full border border-[#2d4625] text-white hover:border-primary hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- Gallery Section -->
        <div class="w-full border-t border-[#2d4625] py-20 bg-[#1a2917]">
            <div class="max-w-[1200px] mx-auto px-4 md:px-10 mb-8 flex justify-between items-end">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-2">Impact in the Field</h2>
                    <p class="text-gray-400">See the real-world difference your donations make.</p>
                </div>
                <div class="hidden md:flex gap-2">
                    <button class="w-10 h-10 rounded-full border border-[#2d4625] flex items-center justify-center text-white hover:bg-white hover:text-black transition-colors">
                        <span class="material-symbols-outlined">arrow_back</span>
                    </button>
                    <button class="w-10 h-10 rounded-full border border-[#2d4625] flex items-center justify-center text-white hover:bg-white hover:text-black transition-colors">
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </div>
            <!-- Horizontal Scroll Container -->
            <div class="w-full overflow-x-auto no-scrollbar pl-4 md:pl-[calc((100vw-1200px)/2+2.5rem)] pr-4">
                <div class="flex gap-6 w-max pb-8">
                    <div class="relative w-[300px] h-[400px] rounded-2xl overflow-hidden group shrink-0">
                        <img alt="Volunteer teaching children in a remote village" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQNJzbmMkQxIsqZFZaDylDnDrpJkjipr8glqCT5DFnTw-wLfq_ZJNtVpbJ3OWQ2s3iTuVsv19uGa1qLMV4gOOL__4xFFiDagtIcAnH02io7cs8-TUx_zH14Fjt5BJr9xHFqQdzsJj6Jw4lJOFnuPi7KZJApWPprLRCl5VpnL4a0OU2cUuw_UbKU9Himh0qorQzz3XKO7-_PrkCIy5oKpBrmNFDoeB6Q7eO_i095ySWwpanA_GSpivjstWBe2sAgxHSzKThZG9JlNQ" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <p class="text-xs text-primary font-bold uppercase tracking-wider mb-1">Education</p>
                            <p class="text-white text-lg font-bold leading-tight">New classroom opening in Dubbo</p>
                        </div>
                    </div>
                    <div class="relative w-[300px] h-[400px] rounded-2xl overflow-hidden group shrink-0">
                        <img alt="Volunteers planting trees in a field" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdpEHxzslyjNmn1uJIyyoE0Y2SfmjS4wtdgV668YbUv7sE1_owPopsr_E4S20ozGXGnTGtI2Foh7QDef4TYy5_4b-NJzE-XcC7zO2PxneZk_n4lKRJfIMjEqqTtzF0N0fosyGZTu6bFwsQRNyBBG0nlpfoFcphzeQOkY6-6LMSLA-VNU2lVqUYx4rkHG-4mBIrf8WAbyGfEc-j8coOEcyR813FY5hi9ClXI3KnHUU3g7B-0r-2mQ3qRyv5XuSm_ovK8On0Yvh5YVU" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <p class="text-xs text-primary font-bold uppercase tracking-wider mb-1">Environment</p>
                            <p class="text-white text-lg font-bold leading-tight">5,000th tree planted today</p>
                        </div>
                    </div>
                    <div class="relative w-[300px] h-[400px] rounded-2xl overflow-hidden group shrink-0">
                        <img alt="Doctor examining a patient in a mobile clinic" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDndGrMqFb6YLur0_ZC0gbMnB9qh3whvzW197y2-SOWc1Ksh6LPnW98tEjuUA5W5ozAdLkwplduEvSGMHpDOVLte9nTaU0z23Le8DugO7xm_sMKHKwi3eQYSOmd1zI0OuxCNwb_Vv-QFSsK1M0ai3soqQAf9kmO_atO5ZX_-KkLhVVoefIkpnl4Je-XdB3nTDaQ4V_u6MDiy-lT-o8sUMp_zxeWa-QL0fzfTynfaicARwU2QMAJy1RNjNWsAiBlPPNlemIgvrG-xR8" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <p class="text-xs text-primary font-bold uppercase tracking-wider mb-1">Health</p>
                            <p class="text-white text-lg font-bold leading-tight">Mobile clinic reaches remote town</p>
                        </div>
                    </div>
                    <div class="relative w-[300px] h-[400px] rounded-2xl overflow-hidden group shrink-0">
                        <img alt="Happy children running in a field" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCzyQhLsm-TJSxyl7BJVlMsfhuTNOfzKDH07QVscIp0bM8rdTx229TqaWmokYkyEOGv-Jn5TPTm4qY28B7sHbD3JX_1XYCpN3-1yZCbJolirKBWFC2iJ-jv1Imc5l5JqpiHy6-Vf-TpnIimTwGX2DXaAVKw_J0GM_Kd6wOtPtuNbpyQtLIs9LCg2cRnuBP83RH-Sv-EmMqcAX-HQ0iPkpelNeeeDxskxmujEcLmsWe20tP6A5ILM9bmtwftQrFRw-eGpSaWLXslBE" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <p class="text-xs text-primary font-bold uppercase tracking-wider mb-1">Community</p>
                            <p class="text-white text-lg font-bold leading-tight">Summer camp success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filter JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterButtons = document.querySelectorAll('.filter-btn');
                const programCards = document.querySelectorAll('.program-card');

                filterButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const filterValue = this.getAttribute('data-filter');

                        // Update active button state
                        filterButtons.forEach(btn => btn.classList.remove('active'));
                        this.classList.add('active');

                        // Filter program cards
                        programCards.forEach(card => {
                            const cardCategory = card.getAttribute('data-category');

                            if (filterValue === 'all' || cardCategory === filterValue) {
                                card.style.display = 'flex';
                                card.style.opacity = '0';
                                // Trigger reflow
                                card.offsetHeight;
                                card.style.transition = 'opacity 0.3s ease';
                                card.style.opacity = '1';
                            } else {
                                card.style.transition = 'opacity 0.3s ease';
                                card.style.opacity = '0';
                                setTimeout(() => {
                                    card.style.display = 'none';
                                }, 300);
                            }
                        });
                    });
                });
            });
        </script>
        @endsection
