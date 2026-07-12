<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Medicine;
use App\Models\Sale;
use App\Models\SaleItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SaleController extends Controller
{
    public function index(): View
    {
        $sales = Sale::with(['customer', 'user'])->latest()->paginate(15);
        return view('sales.index', compact('sales'));
    }

    public function create(): View
    {
        $customers = Customer::orderBy('name')->get();
        $medicines = Medicine::where('stock_quantity', '>', 0)->orderBy('name')->get();
        return view('sales.create', compact('customers', 'medicines'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'customer_id' => 'nullable|exists:customers,id',
            'discount' => 'nullable|numeric|min:0',
            'items' => 'required|array|min:1',
            'items.*.medicine_id' => 'required|exists:medicines,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        DB::transaction(function () use ($validated, $request) {
            $totalAmount = 0;

            $sale = Sale::create([
                'invoice_no' => 'INV-' . now()->format('YmdHis') . '-' . auth()->id(),
                'customer_id' => $validated['customer_id'] ?? null,
                'user_id' => auth()->id(),
                'discount' => $validated['discount'] ?? 0,
                'sale_date' => now(),
                'total_amount' => 0,
                'grand_total' => 0,
            ]);

            foreach ($validated['items'] as $item) {
                $medicine = Medicine::lockForUpdate()->findOrFail($item['medicine_id']);

                if ($medicine->stock_quantity < $item['quantity']) {
                    throw new \Exception("Insufficient stock for {$medicine->name}. Available: {$medicine->stock_quantity}");
                }

                $unitPrice = $medicine->price;
                $totalPrice = round($unitPrice * $item['quantity'], 2);

                SaleItem::create([
                    'sale_id' => $sale->id,
                    'medicine_id' => $medicine->id,
                    'quantity' => $item['quantity'],
                    'unit_price' => $unitPrice,
                    'total_price' => $totalPrice,
                ]);

                $medicine->decrement('stock_quantity', $item['quantity']);
                $totalAmount += $totalPrice;
            }

            $discount = $validated['discount'] ?? 0;
            $grandTotal = max(0, $totalAmount - $discount);

            $sale->update([
                'total_amount' => $totalAmount,
                'grand_total' => $grandTotal,
            ]);
        });

        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');
    }

    public function show(Sale $sale): View
    {
        $sale->load(['customer', 'user', 'items.medicine']);
        return view('sales.show', compact('sale'));
    }

    public function destroy(Sale $sale): RedirectResponse
    {
        DB::transaction(function () use ($sale) {
            foreach ($sale->items as $item) {
                $item->medicine->increment('stock_quantity', $item->quantity);
            }
            $sale->items()->delete();
            $sale->delete();
        });

        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully.');
    }
}
