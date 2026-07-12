<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MedicineController extends Controller
{
    public function index(Request $request): View
    {
        $query = Medicine::with(['category', 'supplier']);

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('generic_name', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('supplier_id')) {
            $query->where('supplier_id', $request->input('supplier_id'));
        }

        $medicines = $query->latest()->paginate(15)->withQueryString();
        $categories = Category::orderBy('name')->get();
        $suppliers = Supplier::orderBy('name')->get();

        return view('medicines.index', compact('medicines', 'categories', 'suppliers'));
    }

    public function create(): View
    {
        $categories = Category::orderBy('name')->get();
        $suppliers = Supplier::orderBy('name')->get();
        return view('medicines.create', compact('categories', 'suppliers'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'generic_name' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'unit' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'stock_quantity' => 'required|integer|min:0',
            'expiry_date' => 'nullable|date',
            'description' => 'nullable|string',
        ]);

        Medicine::create($validated);

        return redirect()->route('medicines.index')->with('success', 'Medicine created successfully.');
    }

    public function show(Medicine $medicine): View
    {
        return view('medicines.show', compact('medicine'));
    }

    public function edit(Medicine $medicine): View
    {
        $categories = Category::orderBy('name')->get();
        $suppliers = Supplier::orderBy('name')->get();
        return view('medicines.edit', compact('medicine', 'categories', 'suppliers'));
    }

    public function update(Request $request, Medicine $medicine): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'generic_name' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'unit' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'stock_quantity' => 'required|integer|min:0',
            'expiry_date' => 'nullable|date',
            'description' => 'nullable|string',
        ]);

        $medicine->update($validated);

        return redirect()->route('medicines.index')->with('success', 'Medicine updated successfully.');
    }

    public function destroy(Medicine $medicine): RedirectResponse
    {
        $medicine->delete();
        return redirect()->route('medicines.index')->with('success', 'Medicine deleted successfully.');
    }
}
