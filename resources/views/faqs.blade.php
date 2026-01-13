@extends('layouts.app')

@section('title', 'Frequently Asked Questions - NGO Australia')

@section('content')
<!-- Hero Section -->
<div class="relative w-full h-64 flex items-center justify-center overflow-hidden bg-gradient-to-r from-primary/20 to-accent-brown/20">
<div class="relative z-20 text-center">
<h1 class="text-4xl md:text-6xl font-black text-white mb-4">
                Frequently Asked Questions
            </h1>
<p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto">
                Find answers to common questions about our work, donations, and volunteering opportunities.
            </p>
</div>
</div>

<!-- FAQs Section -->
<section class="py-20 bg-white">
<div class="max-w-[900px] mx-auto px-6">
<!-- Search FAQ -->
<div class="mb-12">
<div class="relative max-w-md mx-auto">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-400">search</span>
</div>
<input type="text" placeholder="Search FAQs..." class="w-full h-12 pl-12 pr-4 rounded-full bg-gray-50 border border-gray-200 text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" id="faq-search"/>
</div>
</div>

<!-- FAQ Categories -->
<div class="flex flex-wrap justify-center gap-3 mb-12">
<button class="px-4 py-2 rounded-full bg-primary text-white font-medium transition-colors faq-category active" data-category="all">All</button>
<button class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 font-medium hover:bg-gray-200 transition-colors faq-category" data-category="donations">Donations</button>
<button class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 font-medium hover:bg-gray-200 transition-colors faq-category" data-category="volunteering">Volunteering</button>
<button class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 font-medium hover:bg-gray-200 transition-colors faq-category" data-category="programs">Programs</button>
<button class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 font-medium hover:bg-gray-200 transition-colors faq-category" data-category="general">General</button>
</div>

<!-- FAQ Items -->
<div class="space-y-4">

<!-- Donations FAQs -->
<div class="faq-item" data-category="donations">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">How do I make a donation?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">You can make a donation through our secure online donation portal. Visit our <a href="{{ route('donate') }}" class="text-primary hover:underline">donation page</a> to choose from one-time gifts, monthly recurring donations, or specific program sponsorships. We accept credit cards, debit cards, and PayPal payments.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="donations">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">Are donations tax-deductible?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">Yes, NGO Australia is a registered charity in Australia. All donations are tax-deductible to the extent allowed by Australian tax laws. You'll receive a tax-deductible receipt via email after your donation is processed.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="donations">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">How much of my donation goes to programs?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">Approximately 89% of every dollar donated goes directly to our programs and services. This includes 79% for program delivery and 10% for fundraising and administration. Our financial transparency is detailed in our <a href="{{ route('annual-reports') }}" class="text-primary hover:underline">Annual Reports</a>.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="donations">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">Can I set up recurring donations?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">Absolutely! You can set up monthly or annual recurring donations during the checkout process. This provides consistent support for our ongoing programs and helps with long-term planning. You can modify or cancel recurring donations at any time.</p>
</div>
</div>
</div>

<!-- Volunteering FAQs -->
<div class="faq-item" data-category="volunteering">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">How do I become a volunteer?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">Visit our <a href="{{ route('volunteer') }}" class="text-primary hover:underline">volunteer page</a> to learn about current opportunities and submit an application. We have roles for various skills and time commitments, from one-time events to ongoing commitments. Our volunteer coordinator will contact you within 3-5 business days.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="volunteering">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">Do I need special skills to volunteer?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">Not at all! We welcome volunteers with all skill levels and backgrounds. Whether you have professional expertise, a willingness to learn, or just a desire to help, there's a role for you. We provide training and support for all volunteer positions.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="volunteering">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">What volunteer opportunities are available?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">We offer diverse opportunities including event support, community outreach, administrative assistance, fundraising activities, program coordination, and specialized roles in areas like IT, marketing, and program delivery. Many roles can be done remotely.</p>
</div>
</div>
</div>

<!-- Programs FAQs -->
<div class="faq-item" data-category="programs">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">What programs do you offer?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">We focus on four main program areas: Education & Youth Development, Food Security & Community Gardens, Health Services & Mobile Clinics, and Environmental Conservation & Bushfire Recovery. Learn more about our current programs on our <a href="{{ route('programs') }}" class="text-primary hover:underline">Programs page</a>.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="programs">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">How do you measure program impact?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">We use comprehensive metrics including participant outcomes, community feedback, program completion rates, and long-term sustainability indicators. Our impact is regularly evaluated through surveys, follow-up assessments, and third-party evaluations. View our detailed impact metrics in the <a href="{{ route('annual-reports') }}" class="text-primary hover:underline">Annual Reports</a>.</p>
</div>
</div>
</div>

<!-- General FAQs -->
<div class="faq-item" data-category="general">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">Where do you operate?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">NGO Australia operates across all Australian states and territories with headquarters in Sydney, NSW. Our programs serve both urban and rural communities, with a special focus on regional areas that often lack access to essential services.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="general">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">How can I stay updated on your work?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">Subscribe to our newsletter, follow us on social media, or check our <a href="{{ route('blog') }}" class="text-primary hover:underline">News & Stories</a> section regularly. We also send quarterly impact reports to donors and volunteers.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="general">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">How can I contact you?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">You can reach us through our <a href="{{ route('contact') }}" class="text-primary hover:underline">contact form</a>, by email at hello@ngoaustralia.org, or by phone at +61 2 1234 5678. Our team typically responds within 24-48 hours.</p>
</div>
</div>
</div>

<div class="faq-item" data-category="general">
<div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden">
<div class="faq-question flex items-center justify-between p-6 cursor-pointer hover:bg-gray-100 transition-colors">
<h3 class="text-lg font-bold text-gray-900 pr-4">Is NGO Australia a registered charity?</h3>
<span class="material-symbols-outlined text-primary faq-icon transform transition-transform">expand_more</span>
</div>
<div class="faq-answer px-6 pb-6 hidden">
<p class="text-gray-700 leading-relaxed">Yes, NGO Australia is a registered charity with the Australian Charities and Not-for-profits Commission (ACNC) and holds Deductible Gift Recipient (DGR) status. Our ABN is 12 345 678 901. We comply with all Australian regulatory requirements for charitable organizations.</p>
</div>
</div>
</div>

</div>

<!-- Still Need Help Section -->
<div class="mt-16 text-center bg-gray-50 rounded-2xl p-8">
<h3 class="text-2xl font-bold text-gray-900 mb-4">Still Need Help?</h3>
<p class="text-gray-600 mb-6 max-w-md mx-auto">Can't find what you're looking for? Our team is here to help with any questions about our work, donations, or volunteering opportunities.</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary hover:bg-primary-hover text-white font-bold rounded-full transition-all duration-300">
<span>Contact Us</span>
<span class="material-symbols-outlined">arrow_forward</span>
</a>
<a href="tel:+61212345678" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white hover:bg-gray-50 text-gray-900 font-bold rounded-full border border-gray-300 transition-all duration-300">
<span>Call Now</span>
<span class="material-symbols-outlined">call</span>
</a>
</div>
</div>
</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion functionality
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');

            // Toggle answer visibility
            answer.classList.toggle('hidden');

            // Rotate icon
            icon.classList.toggle('rotate-180');
        });
    });

    // FAQ Category filtering
    const categoryButtons = document.querySelectorAll('.faq-category');
    const faqItems = document.querySelectorAll('.faq-item');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.category;

            // Update active button
            categoryButtons.forEach(btn => btn.classList.remove('active', 'bg-primary', 'text-white'));
            categoryButtons.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
            this.classList.add('active', 'bg-primary', 'text-white');
            this.classList.remove('bg-gray-100', 'text-gray-700');

            // Filter FAQs
            faqItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // FAQ Search functionality
    const searchInput = document.getElementById('faq-search');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
            const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });

        // Reset category buttons when searching
        categoryButtons.forEach(btn => {
            btn.classList.remove('active', 'bg-primary', 'text-white');
            btn.classList.add('bg-gray-100', 'text-gray-700');
        });
        categoryButtons[0].classList.add('active', 'bg-primary', 'text-white');
        categoryButtons[0].classList.remove('bg-gray-100', 'text-gray-700');
    });
});
</script>

<style>
.rotate-180 {
    transform: rotate(180deg);
}
</style>
@endsection
