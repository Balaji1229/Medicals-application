<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Sale Invoice') }}</h2>
            <a href="{{ route('sales.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <div class="flex justify-between items-start mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">INVOICE</h1>
                        <p class="text-gray-500 mt-1">{{ $sale->invoice_no }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-500">Date</p>
                        <p class="font-medium">{{ $sale->sale_date->format('Y-m-d H:i') }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-8 mb-8">
                    <div>
                        <p class="text-sm text-gray-500">Billed To</p>
                        <p class="font-medium">{{ $sale->customer?->name ?? 'Walk-in Customer' }}</p>
                        @if ($sale->customer)
                            <p class="text-sm text-gray-600">{{ $sale->customer->phone }}</p>
                            <p class="text-sm text-gray-600">{{ $sale->customer->address }}</p>
                        @endif
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Sold By</p>
                        <p class="font-medium">{{ $sale->user->name }}</p>
                    </div>
                </div>

                <table class="min-w-full divide-y divide-gray-200 mb-8">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Medicine</th>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Qty</th>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Unit Price</th>
                            <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($sale->items as $item)
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">{{ $item->medicine->name }}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 text-right">{{ $item->quantity }}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 text-right">{{ number_format($item->unit_price, 2) }}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 text-right">{{ number_format($item->total_price, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="flex justify-end">
                    <div class="w-64 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-medium">{{ number_format($sale->total_amount, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Discount</span>
                            <span class="font-medium">{{ number_format($sale->discount, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-lg font-bold border-t pt-2">
                            <span>Grand Total</span>
                            <span>{{ number_format($sale->grand_total, 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
