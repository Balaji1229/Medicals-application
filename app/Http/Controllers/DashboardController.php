<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Sale;
use App\Models\Customer;
use App\Models\Token;
use Carbon\Carbon;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalMedicines = Medicine::count();
        $lowStockCount = Medicine::where('stock_quantity', '<', 10)->count();
        $todaySales = Sale::whereDate('sale_date', Carbon::today())->sum('grand_total');
        $totalCustomers = Customer::count();

        $todayTokens = Token::today();
        $tokenStats = [
            'waiting' => (clone $todayTokens)->waiting()->count(),
            'in_progress' => (clone $todayTokens)->where('status', 'in-progress')->count(),
            'completed' => (clone $todayTokens)->where('status', 'completed')->count(),
        ];

        $recentSales = Sale::with(['customer', 'user'])
            ->latest()
            ->take(10)
            ->get();

        $lowStockMedicines = Medicine::with('category')
            ->where('stock_quantity', '<', 10)
            ->orderBy('stock_quantity')
            ->take(10)
            ->get();

        return view('dashboard', compact(
            'totalMedicines',
            'lowStockCount',
            'todaySales',
            'totalCustomers',
            'recentSales',
            'lowStockMedicines',
            'tokenStats'
        ));
    }
}
