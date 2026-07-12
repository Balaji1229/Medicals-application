@extends('layouts.public')

@section('title', 'About Us - MediCare')

@section('content')
<!-- Page Header -->
<section class="hero-bg pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h1 class="text-5xl font-bold text-slate-900 mb-4">About <span class="gradient-text">MediCare</span></h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">Dedicated to providing exceptional healthcare services and quality medicines to our community.</p>
    </div>
</section>

<!-- About Content -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-full h-full bg-gradient-to-br from-teal-200 to-cyan-200 rounded-3xl"></div>
                    <div class="relative bg-gradient-to-br from-teal-500 to-cyan-600 rounded-3xl p-12 text-white">
                        <div class="text-6xl font-bold mb-2">15+</div>
                        <div class="text-2xl">Years of Excellence in Healthcare</div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left">
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Our Mission</h2>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    At MediCare, we believe everyone deserves access to quality healthcare. Our mission is to make healthcare accessible, affordable, and reliable for every individual and family in our community.
                </p>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Founded in 2009, we have grown from a small pharmacy to a comprehensive healthcare provider, serving thousands of patients with compassion, expertise, and cutting-edge medical solutions.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="border-l-4 border-teal-500 pl-4">
                        <div class="text-3xl font-bold text-slate-900">50k+</div>
                        <div class="text-slate-600">Patients Served</div>
                    </div>
                    <div class="border-l-4 border-cyan-500 pl-4">
                        <div class="text-3xl font-bold text-slate-900">25+</div>
                        <div class="text-slate-600">Expert Staff</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Our Core Values</h2>
            <p class="text-lg text-slate-600">The principles that guide everything we do.</p>
        </div>

        @php
        $values = [
            ['color' => 'teal', 'title' => 'Compassion', 'desc' => 'We treat every patient with empathy, respect, and understanding.'],
            ['color' => 'cyan', 'title' => 'Integrity', 'desc' => 'Honest, transparent, and ethical practices in all our services.'],
            ['color' => 'emerald', 'title' => 'Excellence', 'desc' => 'Committed to the highest standards of healthcare delivery.'],
            ['color' => 'blue', 'title' => 'Innovation', 'desc' => 'Embracing modern technology for better patient outcomes.'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($values as $index => $value)
                <div class="bg-white rounded-2xl p-8 shadow-lg card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="w-14 h-14 rounded-xl bg-{{ $value['color'] }}-100 flex items-center justify-center mb-6">
                        <div class="w-6 h-6 rounded-full bg-{{ $value['color'] }}-500"></div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">{{ $value['title'] }}</h3>
                    <p class="text-slate-600">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
