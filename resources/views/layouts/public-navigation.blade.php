<nav x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = window.pageYOffset > 20" :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg' : 'bg-transparent'" class="fixed w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                    <div class="relative">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 rounded-xl bg-teal-500 pulse-ring -z-10"></div>
                    </div>
                    <span class="text-2xl font-bold gradient-text">MediCare</span>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link text-slate-600 hover:text-teal-600 font-medium transition-colors {{ request()->routeIs('home') ? 'text-teal-600' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link text-slate-600 hover:text-teal-600 font-medium transition-colors {{ request()->routeIs('about') ? 'text-teal-600' : '' }}">About Us</a>
                <a href="{{ route('services') }}" class="nav-link text-slate-600 hover:text-teal-600 font-medium transition-colors {{ request()->routeIs('services') ? 'text-teal-600' : '' }}">Services</a>
                <a href="{{ route('packages') }}" class="nav-link text-slate-600 hover:text-teal-600 font-medium transition-colors {{ request()->routeIs('packages') ? 'text-teal-600' : '' }}">Packages</a>
                <a href="{{ route('contact') }}" class="nav-link text-slate-600 hover:text-teal-600 font-medium transition-colors {{ request()->routeIs('contact') ? 'text-teal-600' : '' }}">Contact Us</a>
                <a href="{{ route('tokens.index') }}" class="nav-link text-slate-600 hover:text-teal-600 font-medium transition-colors {{ request()->routeIs('tokens.*') ? 'text-teal-600' : '' }}">OP Token</a>

                <a href="{{ route('book-appointment') }}" class="inline-flex items-center px-5 py-2.5 btn-primary text-white rounded-full font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Book Appointment
                </a>
            </div>

            <div class="flex items-center md:hidden">
                <button @click="open = !open" class="text-slate-600 hover:text-teal-600 p-2">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden bg-white border-t border-gray-100 shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-teal-600 hover:bg-teal-50">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-teal-600 hover:bg-teal-50">About Us</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-teal-600 hover:bg-teal-50">Services</a>
            <a href="{{ route('packages') }}" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-teal-600 hover:bg-teal-50">Packages</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-teal-600 hover:bg-teal-50">Contact Us</a>
            <a href="{{ route('tokens.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-teal-600 hover:bg-teal-50">OP Token</a>
            <a href="{{ route('book-appointment') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-teal-600 hover:bg-teal-700">Book Appointment</a>
        </div>
    </div>
</nav>
