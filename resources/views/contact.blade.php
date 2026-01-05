@extends('layouts.app')

@section('title', 'Contact Us - NGO Australia')

@section('content')
<!-- Hero Section -->
<div class="relative w-full h-[400px] flex items-center justify-center overflow-hidden">
<!-- Background Image with Overlay -->
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-40" data-alt="Group of diverse volunteers planting trees in a forest together" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMDlzuDL20CwZB6e-l2QYvmgh0B3RwMBpb7YbelZbWiXXExsNN2ZJo1fhOeDOFrS7da3ZaRIbdvcv9Rg6lLCZADJDtQ4rqOU_OaejNpHyx0ZDUG09KuisVvR0nRNS1AGUE6snJ94NNxnDEa6U92MHorUb20P5eJffuKFseY793kexahV-V0Q9MvCNc4AAcxd0amRPjmV0s9zKm1iemAUUHKDoNFPHjgLyMRUH25Fq-SCVO_gaioHA5R4ztgtX9fv45n4UE9L9uZ-Q"/>
<div class="absolute inset-0 bg-gradient-to-b from-[#152111]/80 via-[#152111]/60 to-[#152111]"></div>
</div>
<div class="relative z-10 text-center px-4 max-w-4xl mx-auto fade-in-up">
<h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
                Let's Make a <span class="text-primary">Difference</span> Together
            </h1>
<p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto font-light">
                Have a question about our projects, want to partner with us, or ready to volunteer? Reach out to our team in Sydney.
            </p>
</div>
</div>
<!-- Main Content Grid -->
<main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
<!-- Left Column: Contact Form -->
<div class="lg:col-span-7 fade-in-up delay-100">
<div class="bg-surface-dark border border-surface-border rounded-lg p-8 md:p-10 shadow-xl relative overflow-hidden group">
<!-- Decorative glow -->
<div class="absolute -top-20 -right-20 w-40 h-40 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-all duration-500"></div>
<h3 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
<span class="material-symbols-outlined text-primary">mail</span>
                        Send a Message
                    </h3>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Name -->
<div class="space-y-2">
<label class="block text-sm font-medium text-text-secondary ml-4" for="name">Your Name</label>
<input class="w-full bg-[#111c0e] border border-[#2d4625] focus:border-primary focus:ring-1 focus:ring-primary rounded-full px-6 py-3.5 text-white placeholder-gray-500 outline-none transition-all duration-200" id="name" placeholder="Jane Doe" type="text"/>
</div>
<!-- Email -->
<div class="space-y-2">
<label class="block text-sm font-medium text-text-secondary ml-4" for="email">Email Address</label>
<input class="w-full bg-[#111c0e] border border-[#2d4625] focus:border-primary focus:ring-1 focus:ring-primary rounded-full px-6 py-3.5 text-white placeholder-gray-500 outline-none transition-all duration-200" id="email" placeholder="jane@example.com" type="email"/>
</div>
</div>
<!-- Subject Dropdown -->
<div class="space-y-2">
<label class="block text-sm font-medium text-text-secondary ml-4" for="subject">Subject</label>
<div class="relative">
<select class="w-full bg-[#111c0e] border border-[#2d4625] focus:border-primary focus:ring-1 focus:ring-primary rounded-full px-6 py-3.5 text-white appearance-none outline-none transition-all duration-200 cursor-pointer" id="subject">
<option disabled="" selected="" value="">Select a topic (e.g., Volunteering, Donation)</option>
<option value="volunteering">Volunteering Opportunities</option>
<option value="donation">Donation Support</option>
<option value="partnerships">Corporate Partnerships</option>
<option value="general">General Inquiry</option>
</select>
<div class="absolute right-5 top-1/2 -translate-y-1/2 text-primary pointer-events-none">
<span class="material-symbols-outlined">expand_more</span>
</div>
</div>
</div>
<!-- Message -->
<div class="space-y-2">
<label class="block text-sm font-medium text-text-secondary ml-4" for="message">Message</label>
<textarea class="w-full bg-[#111c0e] border border-[#2d4625] focus:border-primary focus:ring-1 focus:ring-primary rounded-[2rem] px-6 py-4 text-white placeholder-gray-500 outline-none resize-none transition-all duration-200" id="message" placeholder="How can we help you make an impact?" rows="5"></textarea>
</div>
<!-- Submit Button -->
<div class="pt-4">
<button class="w-full md:w-auto bg-primary text-[#152112] font-extrabold text-base px-10 py-4 rounded-full hover:bg-white hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 shadow-[0_4px_20px_rgba(76,223,32,0.2)] flex items-center justify-center gap-2 group/btn" type="button">
<span>Send Message</span>
<span class="material-symbols-outlined group-hover/btn:translate-x-1 transition-transform">send</span>
</button>
</div>
</form>
</div>
</div>
<!-- Right Column: Contact Info & Map -->
<div class="lg:col-span-5 space-y-8 fade-in-up delay-200">
<!-- Contact Details Card -->
<div class="bg-surface-dark border border-surface-border rounded-lg p-8 shadow-lg">
<h3 class="text-xl font-bold text-white mb-6">Contact Information</h3>
<div class="space-y-6">
<!-- Address -->
<div class="flex items-start gap-4 group">
<div class="w-12 h-12 rounded-full bg-[#25381e] flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-[#152112] transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined">location_on</span>
</div>
<div>
<h4 class="text-white font-semibold mb-1">Our Headquarters</h4>
<p class="text-gray-400 text-sm leading-relaxed">
                                    123 Charity Lane, Sydney<br/>
                                    NSW 2000, Australia
                                </p>
</div>
</div>
<!-- Email -->
<div class="flex items-start gap-4 group">
<div class="w-12 h-12 rounded-full bg-[#25381e] flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-[#152112] transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined">mail</span>
</div>
<div>
<h4 class="text-white font-semibold mb-1">Email Us</h4>
<a class="text-gray-400 text-sm hover:text-primary transition-colors" href="mailto:hello@ngo-australia.org">hello@ngo-australia.org</a>
<p class="text-gray-500 text-xs mt-1">We reply within 24 hours</p>
</div>
</div>
<!-- Phone -->
<div class="flex items-start gap-4 group">
<div class="w-12 h-12 rounded-full bg-[#25381e] flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-[#152112] transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined">call</span>
</div>
<div>
<h4 class="text-white font-semibold mb-1">Call Us</h4>
<a class="text-gray-400 text-sm hover:text-primary transition-colors" href="tel:+61212345678">+61 2 1234 5678</a>
<p class="text-gray-500 text-xs mt-1">Mon-Fri, 9am - 5pm AEST</p>
</div>
</div>
</div>
<!-- Social Media Links -->
<div class="mt-10 pt-8 border-t border-[#2d4625]">
<h4 class="text-sm font-bold text-text-secondary uppercase tracking-wider mb-4">Follow our journey</h4>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full border border-[#2d4625] flex items-center justify-center text-gray-400 hover:bg-primary hover:text-[#152112] hover:border-primary transition-all duration-300" href="#">
<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewbox="0 0 24 24"><path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"></path></svg>
</a>
<a class="w-10 h-10 rounded-full border border-[#2d4625] flex items-center justify-center text-gray-400 hover:bg-primary hover:text-[#152112] hover:border-primary transition-all duration-300" href="#">
<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewbox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
</a>
<a class="w-10 h-10 rounded-full border border-[#2d4625] flex items-center justify-center text-gray-400 hover:bg-primary hover:text-[#152112] hover:border-primary transition-all duration-300" href="#">
<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewbox="0 0 24 24"><path clip-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.407-.06 3.808-.06zm0 1.838h-.083c-2.554 0-2.836.01-3.825.056-.935.043-1.45.2-1.793.333-.453.175-.773.38-1.09.696-.316.317-.52.637-.696 1.09-.133.343-.29.858-.333 1.793-.045.989-.056 1.272-.056 3.825v.083c0 2.554.01 2.836.056 3.825.043.935.2 1.45.333 1.793.175.453.38.773.696 1.09.317.316.637.52 1.09.696.343.133.858.29 1.793.333.989.045 1.272.056 3.825.056h.083c2.554 0 2.836-.01 3.825-.056.935-.043 1.45-.2 1.793-.333.453-.175.773-.38 1.09-.696.316-.317.52-.637.696-1.09.133-.343.29-.858.333-1.793.045-.989.056-1.272.056-3.825v-.083c0-2.554-.01-2.836-.056-3.825-.043-.935-.2-1.45-.333-1.793-.175-.453-.38-.773-.696-1.09-.317-.316-.637-.52-1.09-.696-.343-.133-.858-.29-1.793-.333-.989-.045-1.272-.056-3.825-.056zm0 4.517a5.318 5.318 0 110 10.636 5.318 5.318 0 010-10.636zm0 1.838a3.48 3.48 0 100 6.96 3.48 3.48 0 000-6.96zm6.38-4.598a1.225 1.225 0 110 2.45 1.225 1.225 0 010-2.45z" fill-rule="evenodd"></path></svg>
</a>
</div>
</div>
</div>
<!-- Embedded Map Placeholder -->
<div class="rounded-lg overflow-hidden border border-surface-border h-64 relative group shadow-lg">
<img class="w-full h-full object-cover grayscale opacity-60 group-hover:opacity-80 transition-opacity duration-300" data-alt="Dark themed map showing the streets of Sydney Australia" data-location="Sydney, Australia" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBLFHe-opj2XVuP0hJsc7DJQPTS1EshVuhQ541_6lAfTQ-rXJ3n9hYbjGbDe8YKxY81pluK-9FuaubdI0b7vv575TipeQ1eJNurKCbW2Z1F3G8xAHIPp-p8gNSeqXVKQzzcJVO1DB9-GwtJAx62HfY-1OHX7BhNHZ1JpBJOsknURmZNiolpD7VsYXVTrxs900FuslZmU7-F72v0XmPSCuW2S6YcdaEzVnONXO5rfLGSU-5yH5aTwvuvUAzMzSVKrFReQfD6GNwKJg"/>
<!-- Location Pin Overlay -->
<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<div class="relative">
<span class="material-symbols-outlined text-primary text-5xl drop-shadow-lg animate-bounce">location_on</span>
<div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-1.5 bg-black/50 blur-[2px] rounded-[100%]"></div>
</div>
</div>
<!-- View on Google Maps Link -->
<a class="absolute bottom-4 left-4 bg-[#152112] text-white text-xs font-bold py-2 px-4 rounded-full border border-[#2d4625] hover:bg-primary hover:text-[#152112] hover:border-primary transition-colors flex items-center gap-2" href="#">
                        View Larger Map
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
</a>
</div>
</div>
</div>
</main>
@endsection
