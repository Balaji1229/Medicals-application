@extends('layouts.public')

@section('title', 'Token Status - MediCare')

@section('content')
<!-- Page Header -->
<section class="hero-bg pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h1 class="text-5xl font-bold text-slate-900 mb-4">Token <span class="gradient-text">Status</span></h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">Track your position in the queue in real-time.</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden" data-aos="zoom-in">
            <div class="bg-gradient-to-r from-teal-600 to-cyan-600 p-8 text-white text-center">
                <div class="text-sm text-teal-100 mb-2">Your Token Number</div>
                <div class="text-6xl font-bold mb-2">{{ $token->token_no }}</div>
                <div class="text-lg">{{ $token->department->name }}</div>
                @if ($token->doctor)
                    <div class="text-sm text-teal-100 mt-1">Dr. {{ $token->doctor->name }}</div>
                @endif
            </div>

            <div class="p-8">
                <div class="flex justify-center mb-8">
                    <span class="px-6 py-3 rounded-full text-lg font-semibold
                        @if($token->status === 'waiting') bg-amber-100 text-amber-700
                        @elseif($token->status === 'in-progress') bg-teal-100 text-teal-700 animate-pulse
                        @elseif($token->status === 'completed') bg-emerald-100 text-emerald-700
                        @else bg-red-100 text-red-700
                        @endif">
                        {{ ucfirst($token->status) }}
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-slate-50 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-slate-800">{{ $aheadCount }}</div>
                        <div class="text-slate-600">Patients Ahead</div>
                    </div>
                    <div class="bg-slate-50 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-teal-600">
                            {{ $currentToken ? $currentToken->token_no : '-' }}
                        </div>
                        <div class="text-slate-600">Now Serving</div>
                    </div>
                    <div class="bg-slate-50 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-slate-800">{{ $token->created_at->format('H:i') }}</div>
                        <div class="text-slate-600">Issued At</div>
                    </div>
                </div>

                <div class="bg-teal-50 rounded-2xl p-6 mb-8">
                    <h3 class="font-semibold text-teal-800 mb-2">Patient Details</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-slate-700">
                        <div><span class="font-medium">Name:</span> {{ $token->patient_name }}</div>
                        <div><span class="font-medium">Phone:</span> {{ $token->phone }}</div>
                        @if ($token->email)
                            <div class="sm:col-span-2"><span class="font-medium">Email:</span> {{ $token->email }}</div>
                        @endif
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('tokens.index') }}" class="inline-flex items-center justify-center px-8 py-3 btn-primary text-white rounded-full font-semibold">
                        Book Another Token
                    </a>
                    <button onclick="window.location.reload()" class="inline-flex items-center justify-center px-8 py-3 border-2 border-teal-500 text-teal-600 rounded-full font-semibold hover:bg-teal-50 transition-all">
                        Refresh Status
                    </button>
                </div>
            </div>
        </div>

        <p class="text-center text-slate-500 mt-6 text-sm">
            Please arrive 15 minutes before your expected turn. Refresh this page for live updates.
        </p>
    </div>
</section>
@endsection
