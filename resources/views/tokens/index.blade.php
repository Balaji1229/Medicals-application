@extends('layouts.public')

@section('title', 'OP Token System - MediCare')

@section('content')
<!-- Page Header -->
<section class="hero-bg pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h1 class="text-5xl font-bold text-slate-900 mb-4">OP <span class="gradient-text">Token System</span></h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">Book your outpatient token and track your queue status in real-time.</p>
    </div>
</section>

<!-- Token Display & Booking -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Current Tokens Display -->
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="bg-slate-900 rounded-3xl p-8 text-white">
                    <h2 class="text-2xl font-bold mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        Live Token Display
                    </h2>

                    @if ($currentTokens->isEmpty())
                        <p class="text-slate-400 text-center py-8">No tokens have been called yet today.</p>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($currentTokens as $token)
                                <div class="bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl p-6 text-center animate-pulse">
                                    <div class="text-sm text-teal-100 mb-1">{{ $token->department->name }}</div>
                                    <div class="text-4xl font-bold">{{ $token->token_no }}</div>
                                    <div class="text-sm text-teal-100 mt-1">Now Serving</div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="bg-white/10 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-teal-400">{{ $waitingCount }}</div>
                            <div class="text-sm text-slate-300">Waiting</div>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-cyan-400">{{ $todayTokens->where('status', 'in-progress')->count() }}</div>
                            <div class="text-sm text-slate-300">In Progress</div>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-emerald-400">{{ $todayTokens->where('status', 'completed')->count() }}</div>
                            <div class="text-sm text-slate-300">Completed</div>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-amber-400">{{ $todayTokens->where('status', 'skipped')->count() }}</div>
                            <div class="text-sm text-slate-300">Skipped</div>
                        </div>
                    </div>
                </div>

                <!-- Today's Queue -->
                <div class="mt-8 bg-white rounded-3xl shadow-lg border border-slate-100 p-6">
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Today's Queue</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-500 uppercase">Token</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-500 uppercase">Department</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-500 uppercase">Status</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-slate-500 uppercase">Time</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @forelse ($todayTokens->take(10) as $t)
                                    <tr>
                                        <td class="px-4 py-3 font-semibold text-slate-800">{{ $t->token_no }}</td>
                                        <td class="px-4 py-3 text-slate-600">{{ $t->department->name }}</td>
                                        <td class="px-4 py-3">
                                            <span class="px-2 py-1 rounded-full text-xs font-medium
                                                @if($t->status === 'waiting') bg-amber-100 text-amber-700
                                                @elseif($t->status === 'in-progress') bg-teal-100 text-teal-700
                                                @elseif($t->status === 'completed') bg-emerald-100 text-emerald-700
                                                @else bg-red-100 text-red-700
                                                @endif">
                                                {{ ucfirst($t->status) }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-slate-500 text-sm">{{ $t->created_at->format('H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr><td colspan="4" class="px-4 py-6 text-center text-slate-500">No tokens issued today.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Booking Form -->
            <div data-aos="fade-left">
                <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-8 sticky top-24">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">Get Your Token</h2>
                    <p class="text-slate-600 mb-6 text-sm">Fill in your details to receive an outpatient token.</p>

                    <form method="POST" action="{{ route('tokens.store') }}">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
                                <input type="text" name="patient_name" required value="{{ old('patient_name') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="John Doe">
                                <x-input-error :messages="$errors->get('patient_name')" class="mt-1" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Phone Number</label>
                                <input type="tel" name="phone" required value="{{ old('phone') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="+1 555 123 4567">
                                <x-input-error :messages="$errors->get('phone')" class="mt-1" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Email (optional)</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all" placeholder="john@example.com">
                                <x-input-error :messages="$errors->get('email')" class="mt-1" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Department</label>
                                <select name="department_id" id="departmentSelect" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all">
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $dept)
                                        <option value="{{ $dept->id }}" {{ old('department_id') == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('department_id')" class="mt-1" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Preferred Doctor (optional)</label>
                                <select name="doctor_id" id="doctorSelect" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition-all">
                                    <option value="">Any Available Doctor</option>
                                </select>
                                <x-input-error :messages="$errors->get('doctor_id')" class="mt-1" />
                            </div>
                        </div>

                        <button type="submit" class="w-full mt-6 py-4 btn-primary text-white rounded-xl font-semibold text-lg">
                            Generate Token
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const doctorsByDepartment = @json($departments->mapWithKeys(fn($d) => [$d->id => $d->doctors->map(fn($doc) => ['id' => $doc->id, 'name' => $doc->name])]));

    document.getElementById('departmentSelect').addEventListener('change', function() {
        const doctorSelect = document.getElementById('doctorSelect');
        doctorSelect.innerHTML = '<option value="">Any Available Doctor</option>';
        const doctors = doctorsByDepartment[this.value] || [];
        doctors.forEach(doc => {
            const option = document.createElement('option');
            option.value = doc.id;
            option.textContent = doc.name;
            doctorSelect.appendChild(option);
        });
    });
</script>
@endsection
