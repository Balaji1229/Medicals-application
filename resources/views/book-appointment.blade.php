@extends('layouts.public')

@section('title', 'Book Appointment - MediCare')

@section('content')
<!-- Page Header -->
<section class="hero-bg pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h1 class="text-5xl font-bold text-slate-900 mb-4">Book an <span class="gradient-text">Appointment</span></h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">Schedule a consultation or diagnostic test with our healthcare professionals.</p>
    </div>
</section>

<!-- Appointment Types -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- General Appointment -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border-2 border-teal-100 card-hover" data-aos="fade-right">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3">General Consultation</h3>
                <p class="text-slate-600 mb-6">Book a one-on-one consultation with our experienced doctors for general health concerns, prescriptions, and medical advice.</p>
                <ul class="space-y-2 text-slate-600 mb-8">
                    <li class="flex items-center"><svg class="w-5 h-5 text-teal-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 30 min session</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-teal-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> In-person or online</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-teal-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Follow-up included</li>
                </ul>
                <button type="button" onclick="selectType('general')" class="w-full py-3 btn-primary text-white rounded-xl font-semibold">Book General Appointment</button>
            </div>

            <!-- Test Appointment -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border-2 border-cyan-100 card-hover" data-aos="fade-left">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3">Diagnostic Test</h3>
                <p class="text-slate-600 mb-6">Schedule lab tests, health screenings, and diagnostic procedures at our certified medical center.</p>
                <ul class="space-y-2 text-slate-600 mb-8">
                    <li class="flex items-center"><svg class="w-5 h-5 text-cyan-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Blood tests, X-rays, scans</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-cyan-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Fast report delivery</li>
                    <li class="flex items-center"><svg class="w-5 h-5 text-cyan-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Home sample collection</li>
                </ul>
                <button type="button" onclick="selectType('test')" class="w-full py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-xl font-semibold hover:shadow-lg transition-all">Book Test Appointment</button>
            </div>
        </div>

        <!-- Appointment Form -->
        <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-xl p-8 border border-slate-100" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-slate-900 mb-2 text-center">Appointment Details</h2>
            <p class="text-slate-600 text-center mb-8">Fill in your details and preferred time slot.</p>

            <form id="appointmentForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Full Name</label>
                        <input type="text" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Phone Number</label>
                        <input type="tel" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="+1 555 123 4567">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input type="email" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="john@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Appointment Type</label>
                        <select id="appointmentType" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all">
                            <option value="">Select type</option>
                            <option value="general">General Consultation</option>
                            <option value="test">Diagnostic Test</option>
                        </select>
                    </div>
                </div>

                <div id="testOptions" class="hidden">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Select Test</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all">
                        <option value="">Choose a test</option>
                        <option value="blood">Complete Blood Count (CBC)</option>
                        <option value="sugar">Blood Sugar Test</option>
                        <option value="lipid">Lipid Profile</option>
                        <option value="thyroid">Thyroid Function Test</option>
                        <option value="xray">X-Ray</option>
                        <option value="ecg">ECG</option>
                        <option value="urine">Urine Analysis</option>
                        <option value="covid">COVID-19 Test</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Preferred Date</label>
                        <input type="date" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Preferred Time</label>
                        <select required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all">
                            <option value="">Select time</option>
                            <option value="09:00">09:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="14:00">02:00 PM</option>
                            <option value="15:00">03:00 PM</option>
                            <option value="16:00">04:00 PM</option>
                            <option value="17:00">05:00 PM</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Additional Notes</label>
                    <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="Describe your symptoms or test requirements..."></textarea>
                </div>

                <button type="submit" class="w-full py-4 btn-primary text-white rounded-xl font-semibold text-lg">
                    Confirm Booking
                </button>
            </form>
        </div>
    </div>
</section>

<script>
    function selectType(type) {
        document.getElementById('appointmentType').value = type;
        document.getElementById('appointmentType').dispatchEvent(new Event('change'));
        document.getElementById('appointmentForm').scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    document.getElementById('appointmentType').addEventListener('change', function() {
        const testOptions = document.getElementById('testOptions');
        if (this.value === 'test') {
            testOptions.classList.remove('hidden');
        } else {
            testOptions.classList.add('hidden');
        }
    });

    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        showToast('Thank you! Your appointment request has been received. We will contact you shortly to confirm.', 'success');
        this.reset();
        document.getElementById('testOptions').classList.add('hidden');
    });
</script>
@endsection
