<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Token;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TokenController extends Controller
{
    public function index(): View
    {
        $departments = Department::where('is_active', true)
            ->with(['doctors' => fn ($q) => $q->where('is_active', true)])
            ->orderBy('name')
            ->get();

        $todayTokens = Token::today()
            ->with(['department', 'doctor'])
            ->orderBy('created_at')
            ->get();

        $currentTokens = Token::today()
            ->whereIn('status', ['in-progress'])
            ->with(['department'])
            ->get()
            ->keyBy('department_id');

        $waitingCount = $todayTokens->where('status', 'waiting')->count();

        return view('tokens.index', compact('departments', 'todayTokens', 'currentTokens', 'waitingCount'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'patient_name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'nullable|email|max:255',
            'department_id' => 'required|exists:departments,id',
            'doctor_id' => 'nullable|exists:doctors,id',
        ]);

        $department = Department::findOrFail($validated['department_id']);

        $lastToken = Token::today()
            ->where('department_id', $department->id)
            ->orderBy('id', 'desc')
            ->first();

        $nextNumber = $lastToken ? ((int) substr($lastToken->token_no, -3)) + 1 : 1;
        $tokenNo = strtoupper($department->code) . '-' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        $token = Token::create([
            ...$validated,
            'token_no' => $tokenNo,
            'status' => 'waiting',
        ]);

        return redirect()->route('tokens.status', $token)
            ->with('success', 'Your token has been generated successfully.');
    }

    public function status(Token $token): View
    {
        $token->load(['department', 'doctor']);

        $currentToken = Token::today()
            ->where('department_id', $token->department_id)
            ->where('status', 'in-progress')
            ->first();

        $aheadCount = Token::today()
            ->where('department_id', $token->department_id)
            ->where('status', 'waiting')
            ->where('id', '<', $token->id)
            ->count();

        return view('tokens.status', compact('token', 'currentToken', 'aheadCount'));
    }
}
