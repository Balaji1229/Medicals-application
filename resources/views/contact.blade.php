@extends('layouts.public')

@section('title', 'Contact Us - MediCare')

@section('content')
<!-- Page Header -->
<section class="hero-bg pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h1 class="text-5xl font-bold text-slate-900 mb-4">Contact <span class="gradient-text">Us</span></h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">Get in touch with us for any healthcare inquiries or support.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div data-aos="fade-right">
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Get In Touch</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Have questions about our services or need medical assistance? Our team is here to help you 24/7.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-slate-50 card-hover">
                        <div class="w-12 h-12 rounded-xl bg-teal-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-800">Address</h3>
                            <p class="text-slate-600">123 Medical Street, Health City, HC 12345</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-slate-50 card-hover">
                        <div class="w-12 h-12 rounded-xl bg-cyan-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-800">Phone</h3>
                            <p class="text-slate-600">+1 (555) 123-4567</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-slate-50 card-hover">
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-800">Email</h3>
                            <p class="text-slate-600">info@medicare.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div data-aos="fade-left">
                <form class="bg-white rounded-3xl shadow-xl p-8 border border-slate-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="John">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="Doe">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="john@example.com">
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                        <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="How can we help?">
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                        <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="Your message..."></textarea>
                    </div>
                    <button type="button" class="w-full py-4 btn-primary text-white rounded-xl font-semibold text-lg">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Placeholder -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-teal-100 to-cyan-100 rounded-3xl h-96 flex items-center justify-center" data-aos="zoom-in">
            <div class="text-center">
                <svg class="w-16 h-16 text-teal-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <h3 class="text-2xl font-bold text-slate-800">Our Location</h3>
                <p class="text-slate-600 mt-2">123 Medical Street, Health City</p>
            </div>
        </div>
    </div>
</section>
@endsection
