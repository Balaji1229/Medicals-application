<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $customer->name ?? '')" required />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="phone" :value="__('Phone')" />
        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $customer->phone ?? '')" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $customer->email ?? '')" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div class="md:col-span-2">
        <x-input-label for="address" :value="__('Address')" />
        <textarea id="address" name="address" rows="3" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('address', $customer->address ?? '') }}</textarea>
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
    </div>
</div>
