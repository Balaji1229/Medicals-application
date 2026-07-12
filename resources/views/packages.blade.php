@extends('layouts.public')

@section('title', 'Packages - MediCare')

@section('content')
<!-- Page Header -->
<section class="hero-bg pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h1 class="text-5xl font-bold text-slate-900 mb-4">Health <span class="gradient-text">Packages</span></h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">Choose from our carefully designed healthcare packages for you and your family.</p>
    </div>
</section>

<!-- Packages Grid -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
        $packages = [
            [
                'name' => 'Basic Care',
                'price' => '49',
                'period' => 'month',
                'description' => 'Essential healthcare services for individuals.',
                'features' => ['Monthly Health Checkup', '24/7 Phone Support', '10% Medicine Discount', 'Online Consultation'],
                'popular' => false,
                'color' => 'teal'
            ],
            [
                'name' => 'Family Care',
                'price' => '99',
                'period' => 'month',
                'description' => 'Comprehensive care for your entire family.',
                'features' => ['4 Family Checkups', 'Priority Appointment', '20% Medicine Discount', 'Home Delivery', 'Emergency Support'],
                'popular' => true,
                'color' => 'cyan'
            ],
            [
                'name' => 'Premium Care',
                'price' => '199',
                'period' => 'month',
                'description' => 'Premium healthcare with exclusive benefits.',
                'features' => ['Unlimited Checkups', 'Personal Health Manager', '30% Medicine Discount', 'Free Home Delivery', '24/7 Doctor on Call', 'Annual Full Body Scan'],
                'popular' => false,
                'color' => 'emerald'
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            @foreach ($packages as $index => $package)
                <div class="relative bg-white rounded-3xl p-8 shadow-xl border {{ $package['popular'] ? 'border-cyan-400 scale-105 z-10' : 'border-slate-100' }} card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                    @if ($package['popular'])
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-4 py-1 rounded-full text-sm font-semibold shadow-lg">Most Popular</span>
                        </div>
                    @endif

                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-slate-800 mb-2">{{ $package['name'] }}</h3>
                        <p class="text-slate-500 text-sm mb-4">{{ $package['description'] }}</p>
                        <div class="flex items-baseline justify-center">
                            <span class="text-4xl font-bold text-{{ $package['color'] }}-600">${{ $package['price'] }}</span>
                            <span class="text-slate-500 ml-1">/{{ $package['period'] }}</span>
                        </div>
                    </div>

                    <ul class="space-y-4 mb-8">
                        @foreach ($package['features'] as $feature)
                            <li class="flex items-center text-slate-600">
                                <svg class="w-5 h-5 text-{{ $package['color'] }}-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 rounded-full font-semibold transition-all {{ $package['popular'] ? 'btn-primary text-white' : 'border-2 border-' . $package['color'] . '-500 text-' . $package['color'] . '-600 hover:bg-' . $package['color'] . '-50' }}">
                        Get Started
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
