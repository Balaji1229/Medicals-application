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
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-teal-500 text-teal-600 rounded-full font-semibold text-lg hover:bg-teal-50 transition-all">
                        Contact Us
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

<!-- CTA Section -->
<section class="py-24 bg-gradient-to-r from-teal-600 to-cyan-600 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.05%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')] opacity-20"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="zoom-in">
        <h2 class="text-4xl font-bold text-white mb-6">Ready to Experience Better Healthcare?</h2>
        <p class="text-xl text-teal-100 mb-8">Browse our services and packages designed for your wellness journey.</p>
        <a href="{{ route('packages') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-teal-600 rounded-full font-semibold text-lg hover:bg-teal-50 transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
            View Packages
        </a>
    </div>
</section>
@endsection
