<!-- Top Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 border-b border-[#2d4625] glass-nav transition-all duration-300">
<div class="max-w-[1280px] mx-auto px-6 h-20 flex items-center justify-between">
<div class="flex items-center gap-3 text-white">
<img src="{{ asset('asset/images/logo-ngo.png') }}" alt="NGO Australia" class="h-8 w-auto">
</div>
<div class="hidden md:flex items-center gap-10">
<a class="text-white/90 hover:text-primary text-sm font-semibold transition-colors" href="{{ route('about') }}">Our Story</a>
<a class="text-white/90 hover:text-primary text-sm font-semibold transition-colors" href="{{ route('programs') }}">Programs</a>
<a class="text-white/90 hover:text-primary text-sm font-semibold transition-colors" href="{{ route('volunteer') }}">Get Involved</a>
<a class="text-white/90 hover:text-primary text-sm font-semibold transition-colors" href="{{ route('contact') }}">Contact</a>
</div>
<div class="flex items-center gap-4">
<a href="{{ route('donate') }}" class="hidden md:flex h-11 px-6 bg-primary hover:bg-primary-dark text-[#152112] text-sm font-extrabold rounded-full items-center justify-center transition-all duration-300 transform hover:scale-105 shadow-[0_0_15px_rgba(77,223,32,0.3)]">
                    Donate Now
                </a>
<!-- Hamburger Menu Button -->
<button id="hamburger-btn" class="md:hidden relative w-8 h-8 flex flex-col justify-center items-center text-white focus:outline-none">
<span class="hamburger-line line-1 block w-6 h-0.5 bg-white transition-all duration-300"></span>
<span class="hamburger-line line-2 block w-5 h-0.5 bg-white transition-all duration-300 mt-1"></span>
<span class="hamburger-line line-3 block w-4 h-0.5 bg-white transition-all duration-300 mt-1"></span>
</button>
</div>
</div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="fixed inset-0 z-40 bg-primary-dark transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
<div class="flex flex-col h-full">
<!-- Close button (optional, hamburger transforms to X) -->
<div class="flex justify-end p-6">
<button id="close-menu-btn" class="text-white p-2">
<span class="material-symbols-outlined">close</span>
</button>
</div>

<!-- Navigation Links - Centered -->
<div class="flex-1 flex flex-col justify-center items-center text-center px-6">
<a href="{{ route('home') }}" class="mobile-nav-link block text-white text-2xl font-bold uppercase tracking-wide mb-8 transition-all duration-300 hover:text-white/80">Home</a>
<a href="{{ route('about') }}" class="mobile-nav-link block text-white text-2xl font-bold uppercase tracking-wide mb-8 transition-all duration-300 hover:text-white/80">Our Story</a>
<a href="{{ route('programs') }}" class="mobile-nav-link block text-white text-2xl font-bold uppercase tracking-wide mb-8 transition-all duration-300 hover:text-white/80">Programs</a>
<a href="{{ route('volunteer') }}" class="mobile-nav-link block text-white text-2xl font-bold uppercase tracking-wide mb-8 transition-all duration-300 hover:text-white/80">Get Involved</a>
<a href="{{ route('contact') }}" class="mobile-nav-link block text-white text-2xl font-bold uppercase tracking-wide transition-all duration-300 hover:text-white/80">Contact</a>
</div>

<!-- Donate Button - Bottom -->
<div class="p-6">
<a href="{{ route('donate') }}" class="block w-full h-14 bg-white text-primary text-lg font-extrabold rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-105 shadow-lg">
Donate Now
</a>
</div>
</div>
</div>

<!-- Mobile Menu JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const hamburgerLines = document.querySelectorAll('.hamburger-line');
    const body = document.body;

    // Toggle mobile menu
    function toggleMenu() {
        const isOpen = !mobileMenu.classList.contains('translate-x-full');

        if (isOpen) {
            // Close menu
            mobileMenu.classList.add('translate-x-full');
            body.style.overflow = '';
            // Reset hamburger icon
            hamburgerLines[0].style.transform = '';
            hamburgerLines[1].style.opacity = '1';
            hamburgerLines[2].style.transform = '';
        } else {
            // Open menu
            mobileMenu.classList.remove('translate-x-full');
            body.style.overflow = 'hidden';
            // Transform to X
            hamburgerLines[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
            hamburgerLines[1].style.opacity = '0';
            hamburgerLines[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
        }
    }

    // Event listeners
    hamburgerBtn.addEventListener('click', toggleMenu);
    closeMenuBtn.addEventListener('click', toggleMenu);

    // Close menu when clicking on navigation links
    const navLinks = document.querySelectorAll('.mobile-nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });

    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !mobileMenu.classList.contains('translate-x-full')) {
            toggleMenu();
        }
    });
});
</script>
