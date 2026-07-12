<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('New Sale') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('sales.store') }}" id="saleForm">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <x-input-label for="customer_id" :value="__('Customer')" />
                            <select id="customer_id" name="customer_id" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="">Walk-in Customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('customer_id')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="discount" :value="__('Discount')" />
                            <x-text-input id="discount" name="discount" type="number" step="0.01" min="0" class="mt-1 block w-full" :value="old('discount', 0)" />
                            <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Items</h3>
                    </div>

                    <div id="itemsContainer" class="space-y-4">
                        <div class="item-row grid grid-cols-1 md:grid-cols-12 gap-4 p-4 bg-gray-50 rounded-lg">
                            <div class="md:col-span-6">
                                <label class="block text-sm font-medium text-gray-700">Medicine</label>
                                <select name="items[0][medicine_id]" class="medicine-select mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    <option value="">Select Medicine</option>
                                    @foreach ($medicines as $medicine)
                                        <option value="{{ $medicine->id }}" data-price="{{ $medicine->price }}" data-stock="{{ $medicine->stock_quantity }}">{{ $medicine->name }} (Stock: {{ $medicine->stock_quantity }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Qty</label>
                                <input type="number" name="items[0][quantity]" min="1" value="1" class="quantity-input mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                            </div>
                            <div class="md:col-span-3">
                                <label class="block text-sm font-medium text-gray-700">Unit Price</label>
                                <input type="text" class="price-display mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly value="0.00">
                            </div>
                            <div class="md:col-span-1 flex items-end">
                                <button type="button" class="remove-item text-red-600 hover:text-red-900 text-sm">Remove</button>
                            </div>
                        </div>
                    </div>

                    @if ($errors->has('items'))
                        <p class="text-red-600 text-sm mt-2">{{ $errors->first('items') }}</p>
                    @endif

                    <div class="mt-4">
                        <button type="button" id="addItem" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">Add Item</button>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <div class="text-lg font-semibold">Grand Total: <span id="grandTotal" class="text-2xl">0.00</span></div>
                        <div class="flex items-center">
                            <a href="{{ route('sales.index') }}" class="text-gray-600 hover:text-gray-900 mr-4">Cancel</a>
                            <x-primary-button type="submit">{{ __('Complete Sale') }}</x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let itemIndex = 1;
        const container = document.getElementById('itemsContainer');
        const addBtn = document.getElementById('addItem');

        function calculateTotals() {
            let total = 0;
            document.querySelectorAll('.item-row').forEach(row => {
                const select = row.querySelector('.medicine-select');
                const qty = parseFloat(row.querySelector('.quantity-input').value) || 0;
                const option = select.options[select.selectedIndex];
                const price = parseFloat(option.dataset.price) || 0;
                row.querySelector('.price-display').value = price.toFixed(2);
                total += price * qty;
            });
            const discount = parseFloat(document.getElementById('discount').value) || 0;
            document.getElementById('grandTotal').textContent = Math.max(0, total - discount).toFixed(2);
        }

        function createItemRow(index) {
            const row = document.createElement('div');
            row.className = 'item-row grid grid-cols-1 md:grid-cols-12 gap-4 p-4 bg-gray-50 rounded-lg';
            row.innerHTML = `
                <div class="md:col-span-6">
                    <label class="block text-sm font-medium text-gray-700">Medicine</label>
                    <select name="items[${index}][medicine_id]" class="medicine-select mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                        <option value="">Select Medicine</option>
                        @foreach ($medicines as $medicine)
                            <option value="{{ $medicine->id }}" data-price="{{ $medicine->price }}" data-stock="{{ $medicine->stock_quantity }}">{{ $medicine->name }} (Stock: {{ $medicine->stock_quantity }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Qty</label>
                    <input type="number" name="items[${index}][quantity]" min="1" value="1" class="quantity-input mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                </div>
                <div class="md:col-span-3">
                    <label class="block text-sm font-medium text-gray-700">Unit Price</label>
                    <input type="text" class="price-display mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100" readonly value="0.00">
                </div>
                <div class="md:col-span-1 flex items-end">
                    <button type="button" class="remove-item text-red-600 hover:text-red-900 text-sm">Remove</button>
                </div>
            `;
            return row;
        }

        addBtn.addEventListener('click', () => {
            container.appendChild(createItemRow(itemIndex++));
        });

        container.addEventListener('click', e => {
            if (e.target.classList.contains('remove-item')) {
                e.target.closest('.item-row').remove();
                calculateTotals();
            }
        });

        container.addEventListener('change', calculateTotals);
        container.addEventListener('input', calculateTotals);
        document.getElementById('discount').addEventListener('input', calculateTotals);

        calculateTotals();
    </script>
</x-app-layout>
