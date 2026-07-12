@extends('layouts.public')

@section('title', 'Home - MediCare')

@section('content')
<!-- Hero Section -->
<section class="hero-bg min-h-screen flex items-center pt-20 relative overflow-hidden">
    <div class="absolute top-20 right-0 w-96 h-96 bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-cyan-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/2 left-1/2 w-96 h-96 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse" style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-teal-100 text-teal-700 text-sm font-medium mb-6">
                    <span class="w-2 h-2 rounded-full bg-teal-500 mr-2 animate-pulse"></span>
                    Trusted Healthcare Partner
                </div>
                <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight mb-6">
                    Your Health is Our <span class="gradient-text">Top Priority</span>
                </h1>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Providing quality medicines, expert healthcare services, and wellness solutions for you and your family. Experience healthcare reimagined.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-8 py-4 btn-primary text-white rounded-full font-semibold text-lg">
                        Explore Services
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                    <a href="{{ route('book-appointment') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-teal-500 text-teal-600 rounded-full font-semibold text-lg hover:bg-teal-50 transition-all">
                        Book Appointment
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-8 mt-12">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <div class="text-3xl font-bold text-teal-600">15+</div>
                        <div class="text-sm text-slate-500">Years Experience</div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="text-3xl font-bold text-cyan-600">50k+</div>
                        <div class="text-sm text-slate-500">Happy Patients</div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300">
                        <div class="text-3xl font-bold text-emerald-600">100+</div>
                        <div class="text-sm text-slate-500">Medicines</div>
                    </div>
                </div>
            </div>

            <div class="relative" data-aos="fade-left">
                <div class="relative z-10 float-animation">
                    <div class="bg-white rounded-3xl shadow-2xl p-6 max-w-md mx-auto">
                        <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-8 text-center">
                            <div class="w-24 h-24 mx-auto bg-gradient-to-br from-teal-400 to-cyan-500 rounded-full flex items-center justify-center mb-6">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-800 mb-2">24/7 Care</h3>
                            <p class="text-slate-600">Round-the-clock medical support for emergencies and consultations.</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 z-20" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <div class="font-semibold text-slate-800">Certified Pharmacy</div>
                            <div class="text-sm text-slate-500">Licensed & Trusted</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Why Choose <span class="gradient-text">MediCare</span></h2>
            <p class="text-lg text-slate-600">We combine modern healthcare technology with compassionate service to deliver the best care experience.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
            $features = [
                ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'title' => 'Quality Medicines', 'desc' => 'Genuine products from trusted pharmaceutical manufacturers.'],
                ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => '24/7 Availability', 'desc' => 'Round-the-clock service for all your healthcare needs.'],
                ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'title' => 'Home Delivery', 'desc' => 'Fast and safe delivery of medicines to your doorstep.'],
                ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'title' => 'Expert Team', 'desc' => 'Qualified pharmacists and healthcare professionals.'],
            ];
            @endphp

            @foreach ($features as $index => $feature)
                <div class="card-hover bg-slate-50 rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">{{ $feature['title'] }}</h3>
                    <p class="text-slate-600">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">How It <span class="gradient-text">Works</span></h2>
            <p class="text-lg text-slate-600">Simple steps to get the healthcare you deserve.</p>
        </div>

        @php
        $steps = [
            ['step' => '01', 'title' => 'Choose Service', 'desc' => 'Browse our wide range of medical services and packages.'],
            ['step' => '02', 'title' => 'Book Appointment', 'desc' => 'Select your preferred date and time for consultation or tests.'],
            ['step' => '03', 'title' => 'Get Treated', 'desc' => 'Visit our center or connect online with our healthcare experts.'],
            ['step' => '04', 'title' => 'Follow Up', 'desc' => 'Receive reports, prescriptions, and ongoing care support.'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($steps as $index => $step)
                <div class="relative bg-white rounded-2xl p-8 shadow-lg card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="absolute -top-4 -right-4 w-12 h-12 rounded-full bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center text-white font-bold shadow-lg">
                        {{ $step['step'] }}
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 mt-4">{{ $step['title'] }}</h3>
                    <p class="text-slate-600">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center mb-16" data-aos="fade-up">
            <div>
                <h2 class="text-4xl font-bold text-slate-900 mb-2">Our Medical <span class="gradient-text">Services</span></h2>
                <p class="text-lg text-slate-600">Comprehensive care for every health need.</p>
            </div>
            <a href="{{ route('services') }}" class="mt-4 md:mt-0 inline-flex items-center text-teal-600 font-semibold hover:text-teal-700 transition-colors">
                View All Services
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

        @php
        $services = [
            ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'title' => 'Pharmacy', 'desc' => 'Prescription & OTC medicines'],
            ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'Health Checkups', 'desc' => 'Regular screenings & diagnostics'],
            ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'title' => 'Home Delivery', 'desc' => 'Medicines delivered to your door'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($services as $index => $service)
                <div class="group bg-slate-50 rounded-2xl p-8 card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-14 h-14 rounded-xl bg-white shadow-md flex items-center justify-center mb-6 group-hover:bg-teal-500 transition-colors duration-300">
                        <svg class="w-7 h-7 text-teal-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">{{ $service['title'] }}</h3>
                    <p class="text-slate-600">{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Alternating Content Sections -->

<!-- Left Image, Right Content -->
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative" data-aos="fade-right">
                <div class="absolute -top-4 -left-4 w-full h-full bg-teal-200 rounded-3xl"></div>
                <div class="relative bg-gradient-to-br from-teal-500 to-cyan-600 rounded-3xl p-12 min-h-[400px] flex items-center justify-center">
                    <svg class="w-48 h-48 text-white/90 float-animation" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
            </div>
            <div data-aos="fade-left">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-teal-100 text-teal-700 text-sm font-medium mb-4">Modern Pharmacy</div>
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Advanced Medical Solutions for <span class="gradient-text">Better Health</span></h2>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Our state-of-the-art pharmacy is equipped with the latest technology to ensure accurate prescriptions, genuine medicines, and personalized care for every patient.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-slate-700"><svg class="w-5 h-5 text-teal-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Computerized prescription management</li>
                    <li class="flex items-center text-slate-700"><svg class="w-5 h-5 text-teal-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Temperature-controlled medicine storage</li>
                    <li class="flex items-center text-slate-700"><svg class="w-5 h-5 text-teal-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Automated refill reminders</li>
                </ul>
                <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-3 btn-primary text-white rounded-full font-semibold">Explore Pharmacy</a>
            </div>
        </div>
    </div>
</section>

<!-- Right Image, Left Content -->
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1" data-aos="fade-right">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-cyan-100 text-cyan-700 text-sm font-medium mb-4">Home Healthcare</div>
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Healthcare That Comes to <span class="gradient-text">Your Doorstep</span></h2>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Skip the waiting room. Our certified healthcare professionals provide medical consultations, diagnostic sample collection, and elderly care services in the comfort of your home.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <div class="p-4 bg-slate-50 rounded-xl">
                        <div class="text-2xl font-bold text-cyan-600 mb-1">500+</div>
                        <div class="text-sm text-slate-600">Home Visits Monthly</div>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl">
                        <div class="text-2xl font-bold text-cyan-600 mb-1">98%</div>
                        <div class="text-sm text-slate-600">Patient Satisfaction</div>
                    </div>
                </div>
                <a href="{{ route('book-appointment') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-full font-semibold hover:shadow-lg transition-all">Book Home Care</a>
            </div>
            <div class="relative order-1 lg:order-2" data-aos="fade-left">
                <div class="absolute -bottom-4 -right-4 w-full h-full bg-cyan-200 rounded-3xl"></div>
                <div class="relative bg-gradient-to-br from-cyan-500 to-blue-600 rounded-3xl p-12 min-h-[400px] flex items-center justify-center">
                    <svg class="w-48 h-48 text-white/90 float-animation" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Left Image, Right Content -->
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative" data-aos="fade-right">
                <div class="absolute -top-4 -left-4 w-full h-full bg-emerald-200 rounded-3xl"></div>
                <div class="relative bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl p-12 min-h-[400px] flex items-center justify-center">
                    <svg class="w-48 h-48 text-white/90 float-animation" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            <div data-aos="fade-left">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-emerald-100 text-emerald-700 text-sm font-medium mb-4">Quality Assurance</div>
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Trusted Care You Can <span class="gradient-text">Rely On</span></h2>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Every medicine and service we provide goes through strict quality checks. We partner with certified manufacturers and maintain the highest standards of healthcare safety.
                </p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Certified Products</h4>
                            <p class="text-slate-600 text-sm">All medicines are sourced from licensed suppliers.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Secure & Private</h4>
                            <p class="text-slate-600 text-sm">Your health records are protected and confidential.</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-600 text-white rounded-full font-semibold hover:shadow-lg transition-all">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- More Grid View Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Our Healthcare <span class="gradient-text">Facilities</span></h2>
            <p class="text-lg text-slate-600">Modern infrastructure designed for patient comfort and care.</p>
        </div>

        @php
        $facilities = [
            ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'In-Patient Wards', 'desc' => 'Comfortable rooms with 24/7 nursing care.'],
            ['icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z', 'title' => 'Diagnostic Lab', 'desc' => 'Advanced testing equipment and quick results.'],
            ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'Emergency Unit', 'desc' => 'Fully equipped for urgent medical situations.'],
            ['icon' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z', 'title' => 'Pharmacy Store', 'desc' => 'Wide range of medicines and health products.'],
            ['icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'title' => 'Digital Records', 'desc' => 'Secure electronic health records access.'],
            ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064', 'title' => 'Rehabilitation', 'desc' => 'Physical therapy and recovery programs.'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($facilities as $index => $facility)
                <div class="group bg-slate-50 rounded-2xl p-6 border border-slate-100 card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 rounded-xl bg-white shadow-md flex items-center justify-center flex-shrink-0 group-hover:bg-teal-500 transition-colors duration-300">
                            <svg class="w-7 h-7 text-teal-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $facility['icon'] }}"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">{{ $facility['title'] }}</h3>
                            <p class="text-slate-600 text-sm">{{ $facility['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Medical Team -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Meet Our <span class="gradient-text">Specialists</span></h2>
            <p class="text-lg text-slate-600">Experienced healthcare professionals dedicated to your wellbeing.</p>
        </div>

        @php
        $doctors = [
            ['name' => 'Dr. Sarah Johnson', 'role' => 'General Physician', 'color' => 'teal'],
            ['name' => 'Dr. Michael Chen', 'role' => 'Cardiologist', 'color' => 'cyan'],
            ['name' => 'Dr. Emily Davis', 'role' => 'Pharmacist', 'color' => 'emerald'],
            ['name' => 'Dr. Robert Wilson', 'role' => 'Lab Specialist', 'color' => 'blue'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($doctors as $index => $doctor)
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gradient-to-br from-{{ $doctor['color'] }}-100 to-{{ $doctor['color'] }}-200 flex items-center justify-center">
                        <svg class="w-12 h-12 text-{{ $doctor['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800">{{ $doctor['name'] }}</h3>
                    <p class="text-{{ $doctor['color'] }}-600 text-sm">{{ $doctor['role'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">What Our <span class="gradient-text">Patients Say</span></h2>
            <p class="text-lg text-slate-600">Real stories from people who trust us with their health.</p>
        </div>

        @php
        $testimonials = [
            ['name' => 'Jennifer Miller', 'text' => 'The online appointment booking saved me so much time. The doctors were thorough and caring.'],
            ['name' => 'David Thompson', 'text' => 'Fast medicine delivery and excellent customer service. MediCare is now my go-to pharmacy.'],
            ['name' => 'Lisa Anderson', 'text' => 'Got my blood tests done quickly and received the reports the same day. Highly recommended!'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($testimonials as $index => $testimonial)
                <div class="bg-slate-50 rounded-2xl p-8 relative card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="text-teal-500 text-6xl absolute top-4 right-6 opacity-20 font-serif">"</div>
                    <p class="text-slate-700 mb-6 relative z-10 italic">{{ $testimonial['text'] }}</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-teal-400 to-cyan-500 flex items-center justify-center text-white font-bold">
                            {{ substr($testimonial['name'], 0, 1) }}
                        </div>
                        <div class="ml-3">
                            <div class="font-semibold text-slate-800">{{ $testimonial['name'] }}</div>
                            <div class="text-yellow-500 text-sm">★★★★★</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Health Tips / Blog -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center mb-16" data-aos="fade-up">
            <div>
                <h2 class="text-4xl font-bold text-slate-900 mb-2">Health <span class="gradient-text">Tips</span></h2>
                <p class="text-lg text-slate-600">Stay informed with our latest wellness advice.</p>
            </div>
        </div>

        @php
        $tips = [
            ['title' => 'Boost Your Immunity', 'desc' => 'Discover natural ways to strengthen your immune system through diet and lifestyle.'],
            ['title' => 'Managing Stress', 'desc' => 'Simple techniques to reduce stress and improve your mental wellbeing.'],
            ['title' => 'Healthy Eating Habits', 'desc' => 'Nutrition tips for a balanced diet and better overall health.'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($tips as $index => $tip)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="h-48 bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center">
                        <svg class="w-16 h-16 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-800 mb-2">{{ $tip['title'] }}</h3>
                        <p class="text-slate-600 mb-4">{{ $tip['desc'] }}</p>
                        <a href="#" class="text-teal-600 font-semibold hover:text-teal-700 transition-colors">Read More →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-24 bg-gradient-to-r from-teal-600 to-cyan-600 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.05%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')] opacity-20"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="zoom-in">
        <h2 class="text-4xl font-bold text-white mb-4">Subscribe to Health Tips</h2>
        <p class="text-xl text-teal-100 mb-8">Get weekly wellness advice and medical updates delivered to your inbox.</p>
        <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
            <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-4 rounded-full outline-none focus:ring-2 focus:ring-white/50">
            <button type="button" class="px-8 py-4 bg-slate-900 text-white rounded-full font-semibold hover:bg-slate-800 transition-all">
                Subscribe
            </button>
        </form>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Frequently Asked <span class="gradient-text">Questions</span></h2>
            <p class="text-lg text-slate-600">Find answers to common questions about our services.</p>
        </div>

        <div class="space-y-4" x-data="{ open: null }">
            @php
            $faqs = [
                ['q' => 'How do I book an appointment?', 'a' => 'You can book an appointment online through our Book Appointment page or call us directly at +1 (555) 123-4567.'],
                ['q' => 'Do you offer home delivery?', 'a' => 'Yes, we offer fast and safe home delivery for medicines and health products within the city.'],
                ['q' => 'What tests can I book online?', 'a' => 'You can book blood tests, X-rays, ECG, thyroid tests, lipid profiles, and more through our appointment system.'],
                ['q' => 'Is online consultation available?', 'a' => 'Yes, we offer video and phone consultations with our qualified doctors.'],
            ];
            @endphp

            @foreach ($faqs as $index => $faq)
                <div class="border border-slate-200 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <button @click="open === {{ $index }} ? open = null : open = {{ $index }}" class="w-full px-6 py-4 text-left flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition-colors">
                        <span class="font-semibold text-slate-800">{{ $faq['q'] }}</span>
                        <svg :class="{'rotate-180': open === {{ $index }}}" class="w-5 h-5 text-teal-600 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open === {{ $index }}" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-6 py-4 text-slate-600 bg-white">
                        {{ $faq['a'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-24 bg-gradient-to-r from-teal-600 to-cyan-600 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.05%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')] opacity-20"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="zoom-in">
        <h2 class="text-4xl font-bold text-white mb-6">Ready to Experience Better Healthcare?</h2>
        <p class="text-xl text-teal-100 mb-8">Book your appointment today and take the first step towards better health.</p>
        <a href="{{ route('book-appointment') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-teal-600 rounded-full font-semibold text-lg hover:bg-teal-50 transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
            Book Appointment Now
        </a>
    </div>
</section>
@endsection
