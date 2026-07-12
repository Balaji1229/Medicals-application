@extends('layouts.public')

@section('title', 'Services - MediCare')

@section('content')
<!-- Page Header -->
<section class="hero-bg pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h1 class="text-5xl font-bold text-slate-900 mb-4">Our <span class="gradient-text">Services</span></h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">Comprehensive healthcare solutions tailored to meet your medical needs.</p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
        $services = [
            [
                'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                'title' => 'Pharmacy Services',
                'desc' => 'Full-service pharmacy offering prescription medications, over-the-counter products, and professional consultation.',
                'color' => 'teal'
            ],
            [
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'title' => 'Health Checkups',
                'desc' => 'Regular health screenings and diagnostic tests to monitor your wellbeing and detect issues early.',
                'color' => 'cyan'
            ],
            [
                'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                'title' => 'Home Delivery',
                'desc' => 'Convenient medicine delivery service bringing your prescriptions right to your doorstep.',
                'color' => 'emerald'
            ],
            [
                'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                'title' => 'Medical Consultation',
                'desc' => 'Expert advice from qualified healthcare professionals for your health concerns.',
                'color' => 'blue'
            ],
            [
                'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                'title' => 'Prescription Management',
                'desc' => 'Digital prescription records and refill reminders to keep your treatment on track.',
                'color' => 'indigo'
            ],
            [
                'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                'title' => 'Emergency Support',
                'desc' => '24/7 emergency assistance and first-aid supplies for urgent medical needs.',
                'color' => 'rose'
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($services as $index => $service)
                <div class="group bg-white rounded-2xl p-8 shadow-lg border border-slate-100 card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-16 h-16 rounded-2xl bg-{{ $service['color'] }}-100 flex items-center justify-center mb-6 group-hover:bg-{{ $service['color'] }}-500 transition-colors duration-300">
                        <svg class="w-8 h-8 text-{{ $service['color'] }}-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">{{ $service['title'] }}</h3>
                    <p class="text-slate-600 mb-6">{{ $service['desc'] }}</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-{{ $service['color'] }}-600 font-semibold hover:text-{{ $service['color'] }}-700 transition-colors">
                        Learn More
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
