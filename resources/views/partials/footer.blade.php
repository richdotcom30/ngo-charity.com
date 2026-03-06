<!-- Footer -->
<footer class="bg-black text-white pt-20 pb-10 border-t border-[#2d4625]">
    <div class="max-w-[1100px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        <!-- Brand -->
        <div class="flex flex-col gap-6">
            <div class="flex items-center gap-3">
                <img src="{{ asset('asset/images/logo-ngo.png') }}" alt="NGO Australia" class="h-8 w-auto">
            </div>
            <p class="text-gray-400 text-sm leading-relaxed">
                Building a resilient, inclusive, and sustainable Australia for everyone. We are a registered charity
                dedicated to impactful change.
            </p>
            <div class="flex gap-4">
                <a class="w-10 h-10 rounded-full bg-[#1e2f1b] flex items-center justify-center text-white hover:bg-primary hover:text-black transition-colors"
                    href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                    <span class="material-symbols-outlined text-sm">public</span>
                </a>
                <a class="w-10 h-10 rounded-full bg-[#1e2f1b] flex items-center justify-center text-white hover:bg-primary hover:text-black transition-colors"
                    href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                    <span class="material-symbols-outlined text-sm">alternate_email</span>
                </a>
                <a class="w-10 h-10 rounded-full bg-[#1e2f1b] flex items-center justify-center text-white hover:bg-primary hover:text-black transition-colors"
                    href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                    <span class="material-symbols-outlined text-sm">share</span>
                </a>
            </div>
        </div>
        <!-- Quick Links -->
        <div>
            <h4 class="font-bold text-lg mb-6">Quick Links</h4>
            <ul class="flex flex-col gap-3 text-gray-400 text-sm">
                <li><a class="hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('programs') }}">Our Programs</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('volunteer') }}">Volunteer
                        Opportunities</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('blog') }}">News & Stories</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('annual-reports') }}">Annual
                        Reports</a></li>
            </ul>
        </div>
        <!-- Contact -->
        <div>
            <h4 class="font-bold text-lg mb-6">Contact Us</h4>
            <ul class="flex flex-col gap-4 text-gray-400 text-sm">
                <li class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-primary mt-0.5">location_on</span>
                    <span>123 Charity Lane, Sydney NSW 2000, Australia</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">call</span>
                    <span>+61 2 1234 5678</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">mail</span>
                    <span>hello@ngoaustralia.org</span>
                </li>
            </ul>
        </div>
        <!-- Newsletter -->
        <div>
            <h4 class="font-bold text-lg mb-6">Stay Updated</h4>
            <p class="text-gray-400 text-sm mb-4">Subscribe to our newsletter for updates on our impact.</p>
            <form method="POST" action="{{ route('newsletter.subscribe') }}" class="flex flex-col gap-3">
                @csrf
                <input
                    class="bg-[#1e2f1b] border border-[#2d4625] rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-primary placeholder-gray-500 w-full"
                    placeholder="Your email address" type="email" name="email" required />
                <button class="bg-white text-black font-bold py-3 rounded-xl hover:bg-primary transition-colors text-sm"
                    type="submit">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
    <div
        class="max-w-[1100px] mx-auto px-6 pt-8 border-t border-[#1e2f1b] flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
        <p>© 2024 NGO Australia. All rights reserved. ABN 12 345 678 901.</p>
        <div class="flex gap-6">
            <a class="hover:text-white" href="{{ route('privacy-policy') }}">Privacy Policy</a>
            <a class="hover:text-white" href="{{ route('terms-of-service') }}">Terms of Service</a>
        </div>
    </div>
</footer>