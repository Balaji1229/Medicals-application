<footer class="bg-slate-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="md:col-span-1" data-aos="fade-up">
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-400 to-cyan-500 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold">MediCare</span>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed">Your trusted partner in healthcare. We provide quality medicines, expert consultation, and reliable medical services.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-slate-400">
                    <li><a href="{{ route('home') }}" class="hover:text-teal-400 transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-teal-400 transition-colors">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-teal-400 transition-colors">Services</a></li>
                    <li><a href="{{ route('packages') }}" class="hover:text-teal-400 transition-colors">Packages</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-teal-400 transition-colors">Contact</a></li>
                </ul>
            </div>

            <div data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-lg font-semibold mb-4">Services</h4>
                <ul class="space-y-2 text-slate-400">
                    <li><a href="{{ route('services') }}" class="hover:text-teal-400 transition-colors">Pharmacy</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-teal-400 transition-colors">Health Checkups</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-teal-400 transition-colors">Home Delivery</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-teal-400 transition-colors">Consultation</a></li>
                </ul>
            </div>

            <div data-aos="fade-up" data-aos-delay="300">
                <h4 class="text-lg font-semibold mb-4">Contact</h4>
                <ul class="space-y-3 text-slate-400 text-sm">
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-teal-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>123 Medical Street, Health City, HC 12345</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>info@medicare.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-800 pt-8 text-center text-slate-500 text-sm">
            <p>&copy; {{ date('Y') }} MediCare. All rights reserved.</p>
        </div>
    </div>
</footer>
