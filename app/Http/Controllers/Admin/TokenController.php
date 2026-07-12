<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Token;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TokenController extends Controller
{
    public function index(Request $request): View
    {
        $departments = Department::where('is_active', true)->orderBy('name')->get();

        $query = Token::today()->with(['department', 'doctor']);

        if ($request->filled('department_id')) {
            $query->where('department_id', $request->input('department_id'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $tokens = $query->orderBy('created_at')->paginate(20)->withQueryString();

        $stats = [
            'waiting' => Token::today()->waiting()->count(),
            'in_progress' => Token::today()->where('status', 'in-progress')->count(),
            'completed' => Token::today()->where('status', 'completed')->count(),
            'skipped' => Token::today()->where('status', 'skipped')->count(),
        ];

        return view('admin.tokens.index', compact('tokens', 'departments', 'stats'));
    }

    public function callNext(Request $request, Department $department): RedirectResponse
    {
        $inProgress = Token::today()
            ->where('department_id', $department->id)
            ->where('status', 'in-progress')
            ->first();

        if ($inProgress) {
            $inProgress->update(['status' => 'completed', 'completed_at' => now()]);
        }

        $next = Token::today()
            ->where('department_id', $department->id)
            ->where('status', 'waiting')
            ->orderBy('created_at')
            ->first();

        if ($next) {
            $next->update(['status' => 'in-progress', 'called_at' => now()]);
        }

        return redirect()->route('admin.tokens.index', ['department_id' => $department->id])
            ->with('success', $next ? "Token {$next->token_no} is now being called." : 'No waiting tokens in this department.');
    }

    public function updateStatus(Request $request, Token $token): RedirectResponse
    {
        $validated = $request->validate([
            'status' => 'required|in:waiting,in-progress,completed,skipped,cancelled',
        ]);

        $updates = ['status' => $validated['status']];

        if ($validated['status'] === 'in-progress') {
            $updates['called_at'] = now();
        }

        if (in_array($validated['status'], ['completed', 'skipped', 'cancelled'])) {
            $updates['completed_at'] = now();
        }

        $token->update($updates);

        return redirect()->route('admin.tokens.index', ['department_id' => $token->department_id])
            ->with('success', "Token {$token->token_no} updated to {$validated['status']}.");
    }
}
