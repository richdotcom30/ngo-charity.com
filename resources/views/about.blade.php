@extends('layouts.app')

@section('title', 'NGO Australia - About Us')

@section('content')
<!-- Hero Section -->
<section class="relative flex min-h-[60vh] flex-col items-center justify-center p-4">
    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-[#152112]/30 via-[#152112]/60 to-[#152112] z-10"></div>
        <div class="h-full w-full bg-cover bg-center" data-alt="Diverse group of volunteers planting trees in Australian landscape" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXW59v_6lnlkwuowz19_lZ7MInyeGoAqUPoDDaE6_PGUfFoFUwWNBbSiFV31dcpbcAgWNjKG-FUx-q3t-MuQLb0KVzZzMAyLGol8WoThMpPO2iPf4avA9H4ZNU50LAN7h2EoeJsC2phwntJNL-Sf4lTNJ96766rBgQkjgUp2yQ-lWSDuhB5IwG-Z37l_gZDbUoR2q9IZZpd7fBg4ZjKy6FXo9Vhc5_eN5n_Odao8cUkU4YhpGMFq55sguGJoz9G-0I4tIDMISWz0E");'></div>
    </div>
    <div class="relative z-10 flex max-w-4xl flex-col items-center gap-6 text-center pt-20">
        <div class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-1.5 backdrop-blur-md">
            <span class="h-2 w-2 rounded-full bg-primary animate-pulse"></span>
            <span class="text-xs font-bold text-primary uppercase tracking-wider">Established 2010</span>
        </div>
        <h1 class="font-display text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
            We Are The People <br />
            <span class="text-primary">Powering Change.</span>
        </h1>
        <p class="max-w-2xl text-base font-medium leading-relaxed text-gray-300 md:text-lg">
            From the rugged outback to the coastal cities, we connect hearts and hands to build a resilient, compassionate, and sustainable Australia for everyone.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 mt-4">
            <a href="{{ route('donate') }}" class="flex h-12 items-center justify-center rounded-full bg-primary px-8 text-base font-bold text-[#152112] transition-transform hover:scale-105">
                Join Our Mission
            </a>
            <a href="{{ route('faqs') }}" class="flex h-12 items-center justify-center rounded-full border border-[#406336] bg-[#20321b]/50 backdrop-blur-sm px-8 text-base font-bold text-white transition-colors hover:bg-[#20321b] hover:border-primary">
                Faqs
            </a>
        </div>
    </div>
</section>
<!-- Stats Overview -->
<section class="w-full bg-[#152112] py-12 border-b border-[#2d4625]">
    <div class="mx-auto max-w-7xl px-4 lg:px-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-[#2d4625]/50">
            <div class="flex flex-col items-center gap-2">
                <span class="text-4xl font-black text-white">12+</span>
                <span class="text-sm text-[#a0c695] uppercase tracking-wide">Years Active</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <span class="text-4xl font-black text-white">450</span>
                <span class="text-sm text-[#a0c695] uppercase tracking-wide">Projects Completed</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <span class="text-4xl font-black text-white">$25M</span>
                <span class="text-sm text-[#a0c695] uppercase tracking-wide">Funds Raised</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <span class="text-4xl font-black text-white">50k+</span>
                <span class="text-sm text-[#a0c695] uppercase tracking-wide">Lives Impacted</span>
            </div>
        </div>
    </div>
</section>
<!-- Mission & Vision -->
<section class="py-20 px-4 lg:px-10 bg-background-dark">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col gap-12 lg:flex-row">
            <!-- Left Content -->
            <div class="flex flex-1 flex-col justify-center gap-6">
                <h2 class="text-3xl font-bold text-white md:text-4xl">Driven by Purpose,<br />Guided by Values.</h2>
                <p class="text-gray-400 text-lg leading-relaxed max-w-xl">
                    We believe in a world where geography doesn't dictate destiny. Our dual focus on immediate relief and long-term systemic change allows us to tackle Australia's toughest challenges from multiple angles.
                </p>
                <!-- Core Values Mini-Grid -->
                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div class="flex items-center gap-3 rounded-2xl bg-surface-dark p-4 border border-[#2d4625]">
                        <span class="material-symbols-outlined text-primary">handshake</span>
                        <span class="font-bold text-white text-sm">Integrity</span>
                    </div>
                    <div class="flex items-center gap-3 rounded-2xl bg-surface-dark p-4 border border-[#2d4625]">
                        <span class="material-symbols-outlined text-primary">favorite</span>
                        <span class="font-bold text-white text-sm">Compassion</span>
                    </div>
                    <div class="flex items-center gap-3 rounded-2xl bg-surface-dark p-4 border border-[#2d4625]">
                        <span class="material-symbols-outlined text-primary">public</span>
                        <span class="font-bold text-white text-sm">Sustainability</span>
                    </div>
                    <div class="flex items-center gap-3 rounded-2xl bg-surface-dark p-4 border border-[#2d4625]">
                        <span class="material-symbols-outlined text-primary">groups</span>
                        <span class="font-bold text-white text-sm">Community</span>
                    </div>
                </div>
            </div>
            <!-- Right Cards -->
            <div class="flex flex-1 flex-col gap-6">
                <div class="group relative overflow-hidden rounded-[2rem] bg-surface-dark border border-[#2d4625] p-8 hover:border-primary/50 transition-colors duration-300">
                    <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-primary/5 blur-3xl group-hover:bg-primary/10 transition-colors"></div>
                    <div class="relative z-10 flex flex-col gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-[#152112]">
                            <span class="material-symbols-outlined">flag</span>
                        </div>
                        <h3 class="text-xl font-bold text-white">Our Mission</h3>
                        <p class="text-[#a0c695] leading-relaxed">To provide immediate support and sustainable solutions to vulnerable communities across the continent, bridging the gap between resource availability and human need.</p>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-[2rem] bg-surface-dark border border-[#2d4625] p-8 hover:border-primary/50 transition-colors duration-300">
                    <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5 blur-3xl"></div>
                    <div class="relative z-10 flex flex-col gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white/10 text-white">
                            <span class="material-symbols-outlined">visibility</span>
                        </div>
                        <h3 class="text-white text-xl font-bold">Our Vision</h3>
                        <p class="text-[#a0c695] leading-relaxed">A future where every Australian has access to the resources, support, and opportunities they need to thrive, regardless of their background or location.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- History Timeline -->
<section class="py-20 bg-background-dark border-y border-[#2d4625]">
    <div class="mx-auto max-w-3xl px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-bold tracking-wider uppercase text-sm mb-2 block">Our Journey</span>
            <h2 class="text-3xl font-bold text-white md:text-4xl">A Decade of Dedication</h2>
        </div>
        <div class="relative">
            <!-- Vertical Line -->
            <div class="absolute left-[19px] top-4 bottom-4 w-[2px] bg-[#2d4625]"></div>
            <!-- Timeline Item 1 -->
            <div class="relative mb-12 flex gap-8 group">
                <div class="relative z-10 flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-background-dark border-2 border-primary shadow-[0_0_0_4px_rgba(21,33,17,1)] group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-primary text-sm">rocket_launch</span>
                </div>
                <div class="flex flex-col pt-1">
                    <span class="text-primary font-bold text-sm mb-1">2010</span>
                    <h3 class="text-xl font-bold text-white mb-2">Foundation in Melbourne</h3>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-md">Founded by a small group of volunteers in a local community hall, aiming to address urban homelessness.</p>
                </div>
            </div>
            <!-- Timeline Item 2 -->
            <div class="relative mb-12 flex gap-8 group">
                <div class="relative z-10 flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-surface-dark border-2 border-[#406336] shadow-[0_0_0_4px_rgba(21,33,17,1)] group-hover:border-primary group-hover:bg-primary/20 transition-colors">
                    <span class="material-symbols-outlined text-white text-sm">storefront</span>
                </div>
                <div class="flex flex-col pt-1">
                    <span class="text-gray-400 font-bold text-sm mb-1">2015</span>
                    <h3 class="text-xl font-bold text-white mb-2">First Major Project: Sydney</h3>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-md">Launched "Food for Future" initiative, serving over 10,000 meals in the first year.</p>
                </div>
            </div>
            <!-- Timeline Item 3 -->
            <div class="relative mb-12 flex gap-8 group">
                <div class="relative z-10 flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-surface-dark border-2 border-[#406336] shadow-[0_0_0_4px_rgba(21,33,17,1)] group-hover:border-primary group-hover:bg-primary/20 transition-colors">
                    <span class="material-symbols-outlined text-white text-sm">public</span>
                </div>
                <div class="flex flex-col pt-1">
                    <span class="text-gray-400 font-bold text-sm mb-1">2020</span>
                    <h3 class="text-xl font-bold text-white mb-2">National Expansion</h3>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-md">Expanded operations to Western Australia and Queensland to support rural communities affected by bushfires.</p>
                </div>
            </div>
            <!-- Timeline Item 4 -->
            <div class="relative flex gap-8 group">
                <div class="relative z-10 flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-surface-dark border-2 border-[#406336] shadow-[0_0_0_4px_rgba(21,33,17,1)] group-hover:border-primary group-hover:bg-primary/20 transition-colors">
                    <span class="material-symbols-outlined text-white text-sm">favorite</span>
                </div>
                <div class="flex flex-col pt-1">
                    <span class="text-primary font-bold text-sm mb-1">Present</span>
                    <h3 class="text-xl font-bold text-white mb-2">Continuous Impact</h3>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-md">Today, we operate in 40+ locations nationwide with a network of 500+ volunteers.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Interactive Map Section -->
<section class="py-20 px-4 lg:px-10 overflow-hidden bg-background-dark">
    <div class="mx-auto max-w-7xl flex flex-col md:flex-row gap-12 items-center">
        <div class="flex-1 w-full relative min-h-[400px] rounded-[3rem] bg-[#0c140a] border border-[#2d4625] overflow-hidden group">
            <!-- Placeholder for map background -->
            <div class="absolute inset-0 opacity-40 bg-[url('https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Australia_map_coloured.svg/2000px-Australia_map_coloured.svg.png')] bg-cover bg-center grayscale contrast-125 brightness-75 mix-blend-screen" data-alt="Stylized Map of Australia"></div>
            <!-- Glowing Dots for Locations -->
            <!-- Sydney -->
            <div class="absolute top-[65%] right-[22%] group/marker cursor-pointer">
                <div class="relative flex h-4 w-4">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex h-4 w-4 rounded-full bg-primary"></span>
                </div>
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-32 bg-surface-dark p-2 rounded-lg text-center opacity-0 group-hover/marker:opacity-100 transition-opacity border border-primary/30 shadow-lg pointer-events-none z-10">
                    <p class="text-xs font-bold text-white">Sydney HQ</p>
                    <p class="text-[10px] text-gray-400">15 Active Projects</p>
                </div>
            </div>
            <!-- Perth -->
            <div class="absolute top-[60%] left-[15%] group/marker cursor-pointer">
                <div class="relative flex h-4 w-4">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75 animation-delay-500"></span>
                    <span class="relative inline-flex h-4 w-4 rounded-full bg-primary"></span>
                </div>
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-32 bg-surface-dark p-2 rounded-lg text-center opacity-0 group-hover/marker:opacity-100 transition-opacity border border-primary/30 shadow-lg pointer-events-none z-10">
                    <p class="text-xs font-bold text-white">Perth Hub</p>
                    <p class="text-[10px] text-gray-400">Rural Support</p>
                </div>
            </div>
            <!-- Darwin -->
            <div class="absolute top-[20%] left-[45%] group/marker cursor-pointer">
                <div class="relative flex h-4 w-4">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75 animation-delay-1000"></span>
                    <span class="relative inline-flex h-4 w-4 rounded-full bg-primary"></span>
                </div>
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-32 bg-surface-dark p-2 rounded-lg text-center opacity-0 group-hover/marker:opacity-100 transition-opacity border border-primary/30 shadow-lg pointer-events-none z-10">
                    <p class="text-xs font-bold text-white">Darwin Outreach</p>
                    <p class="text-[10px] text-gray-400">Education Initiative</p>
                </div>
            </div>
            <div class="absolute bottom-6 left-6 max-w-xs p-4 bg-background-dark/90 backdrop-blur-md rounded-2xl border border-[#2d4625]">
                <h4 class="text-white font-bold mb-1">National Footprint</h4>
                <p class="text-xs text-gray-400">Hover over the glowing markers to see our active hubs across the continent.</p>
            </div>
        </div>
        <div class="flex-1 space-y-6">
            <span class="text-primary font-bold tracking-wider uppercase text-sm">Where We Work</span>
            <h2 class="text-3xl font-bold text-white md:text-4xl">Reaching Every Corner</h2>
            <p class="text-gray-400 leading-relaxed">
                Logistics are challenging in a country as vast as Australia. We've built a decentralized network of logistics hubs that allow us to deploy resources within 24 hours to 85% of the population.
            </p>
            <ul class="space-y-4 mt-6">
                <li class="flex items-center gap-4 text-white p-3 rounded-xl bg-surface-dark border border-[#2d4625]">
                    <span class="material-symbols-outlined text-primary">local_shipping</span>
                    <span class="font-medium">Rapid Response Fleet</span>
                </li>
                <li class="flex items-center gap-4 text-white p-3 rounded-xl bg-surface-dark border border-[#2d4625]">
                    <span class="material-symbols-outlined text-primary">warehouse</span>
                    <span class="font-medium">5 Major Distribution Centers</span>
                </li>
                <li class="flex items-center gap-4 text-white p-3 rounded-xl bg-surface-dark border border-[#2d4625]">
                    <span class="material-symbols-outlined text-primary">group_add</span>
                    <span class="font-medium">50+ Local Partner NGOs</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Team Section -->
<section class="py-20 bg-background-dark">
    <div class="mx-auto max-w-7xl px-4 lg:px-10">
        <h2 class="text-3xl font-bold text-white md:text-4xl mb-12 text-center">Meet the Changemakers</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Member 1 -->
            <div class="group relative aspect-[4/5] w-full overflow-hidden rounded-[2rem] bg-gray-800">
                <img alt="Sarah Jenkins" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Portrait of Sarah Jenkins, CEO" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeg7K_G695KA9t0VH7FWxNyhHkGvqv87hep0Z9KLpDIoHtM0XJK-BLAlzaJhn4VaU_JO_nR9XB-YYM25RBukFWUrhOwxypTRQFgzFxp1l1SEX2i6lvK83fsQ-VRfj-KrEW0diqQlSCpzvlwfomIU_q6rRG0iH8sbuF0HLHPfdKKS_riA1ajNnxjN3_zIC1n5IbPJcZujKkLpu9BJ_2CnNMUn09V-otIvXdTeo7CQoqg5sBsEl82j0xaBkfxa6G6rwv-IRKd58D_dQ" />
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-60 transition-opacity duration-300 group-hover:opacity-90"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 transition-transform duration-300">
                    <div class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white">Sarah Jenkins</h3>
                        <p class="text-primary text-sm font-medium mb-4">Chief Executive Officer</p>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100 line-clamp-3">
                            With 15 years in non-profit management, Sarah leads with a vision of sustainable growth and community empowerment.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Member 2 -->
            <div class="group relative aspect-[4/5] w-full overflow-hidden rounded-[2rem] bg-gray-800">
                <img alt="David O'Reilly" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Portrait of David O'Reilly, Director of Operations" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHATlcHZWc5asMgd7vF2BTVSGWmiaIsVYbP0HDLQnuI7qD9eousmEusJjAU5gAshltHUGpKVl1x7_V0fSaCm6SoxJodmCfF6Z7NgyJ6MOTad1Yt1F_38yXlHxS8iRvNfNX_EcuCKpjxNgxALBtbhoEAfYWXouoMeVETVR0lvhqt_9e9eOvrcFWejf-raYd1SnEoFnOOf_27LMHs4FXYpe0NOlx7LFAs-sXscoPeDLwd3-6cjv2F2jocKykzHEr3pDfpTm-46jyRLE" />
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-60 transition-opacity duration-300 group-hover:opacity-90"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 transition-transform duration-300">
                    <div class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white">David O'Reilly</h3>
                        <p class="text-primary text-sm font-medium mb-4">Director of Operations</p>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100 line-clamp-3">
                            David coordinates our national logistics, ensuring help arrives exactly when and where it's needed most.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Member 3 -->
            <div class="group relative aspect-[4/5] w-full overflow-hidden rounded-[2rem] bg-gray-800">
                <img alt="Priya Patel" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Portrait of Priya Patel, Head of Outreach" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXBy3POPWP227NetTU7NhYZ-q9pWb1JuHGqxKmIqcRktmBCLKF2r10hU_OhgxvPYxWK7ajRg1E35kGv34Z7QaqGWEMG4ZUeu96GLkATS5wubgtpfBEMzgDcu0gEHqe2jgPK15Tt2bCUcyQ0DGb0GJ5wi9Vy9MYOLpMFpXycVcZh1nGZfLvkCF1RDvcOfxM_b2wimWYuc-LUA8rsnBfsjLIZsK5SK8UrsgxhzT-YjAn-1GQHpvWKcqN79nbjznJphmAUzYpFnFqLmQ" />
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-60 transition-opacity duration-300 group-hover:opacity-90"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 transition-transform duration-300">
                    <div class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white">Priya Patel</h3>
                        <p class="text-primary text-sm font-medium mb-4">Head of Outreach</p>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100 line-clamp-3">
                            Priya builds bridges with local communities, ensuring our programs are culturally sensitive and effective.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Member 4 -->
            <div class="group relative aspect-[4/5] w-full overflow-hidden rounded-[2rem] bg-gray-800">
                <img alt="Marcus Thorne" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Portrait of Marcus Thorne, Finance Director" src="https://lh3.googleusercontent.com/aida-public/AB6AXuATvajM9hyYGirvQCPs2GDd8dJiINULe2q_FyWdEycOPUCVQ2QBlbeFjrJ78TYryKZJzoa_z0wfYQEjuBBN6czi8O52htP3Ns865zWUt9eIXYgh8dwwzpEuHuHcjODmzbkA0ZqwLRR_EUKmz7x607t1pfLWcKoMR5BJEugf_8q6dt4oF0CGwomsZy3QnclWs4mVpMbhBOX_CrdX2f5Q8HV5JvsC4IjY1YeGRXnNToaGpuivLfbHbxwQyxOa61V3T6B97pwPhwDZ_nM" />
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-60 transition-opacity duration-300 group-hover:opacity-90"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 transition-transform duration-300">
                    <div class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white">Marcus Thorne</h3>
                        <p class="text-primary text-sm font-medium mb-4">Finance Director</p>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100 line-clamp-3">
                            Marcus ensures transparency and integrity in every dollar raised and spent, maximizing our impact.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section -->
<section class="py-20 px-4 lg:px-10 bg-background-dark">
    <div class="mx-auto max-w-7xl">
        <div class="relative overflow-hidden rounded-[3rem] bg-primary px-6 py-20 text-center md:px-12 lg:px-20">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
            <div class="relative z-10 flex flex-col items-center gap-6">
                <h2 class="font-display text-4xl font-black leading-tight tracking-tight text-[#152112] sm:text-5xl md:text-6xl">
                    Be the Change <br /> You Want to See.
                </h2>
                <p class="max-w-xl text-lg font-medium text-[#152112]/80">
                    Whether you volunteer your time or donate to the cause, your contribution builds a better Australia for everyone.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mt-4">
                    <a href="{{ route('donate') }}" class="flex h-14 items-center justify-center rounded-full bg-[#152112] px-10 text-lg font-bold text-white transition-transform hover:scale-105 hover:shadow-xl">
                        Donate Now
                    </a>
                    <a href="{{ route('volunteer') }}" class="flex h-14 items-center justify-center rounded-full border-2 border-[#152112] px-10 text-lg font-bold text-[#152112] transition-colors hover:bg-[#152112] hover:text-white">
                        Become A Volunteer
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
