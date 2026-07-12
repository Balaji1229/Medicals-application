<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('OP Token Management') }}</h2>
            <a href="{{ route('tokens.index') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-700">
                Public Display
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="text-2xl font-bold text-amber-600">{{ $stats['waiting'] }}</div>
                    <div class="text-sm text-gray-500">Waiting</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="text-2xl font-bold text-teal-600">{{ $stats['in_progress'] }}</div>
                    <div class="text-sm text-gray-500">In Progress</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="text-2xl font-bold text-emerald-600">{{ $stats['completed'] }}</div>
                    <div class="text-sm text-gray-500">Completed</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="text-2xl font-bold text-red-600">{{ $stats['skipped'] }}</div>
                    <div class="text-sm text-gray-500">Skipped</div>
                </div>
            </div>

            <!-- Filters -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <form method="GET" action="{{ route('admin.tokens.index') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <select name="department_id" class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">All Departments</option>
                            @foreach ($departments as $dept)
                                <option value="{{ $dept->id }}" {{ request('department_id') == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select name="status" class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">All Statuses</option>
                            <option value="waiting" {{ request('status') === 'waiting' ? 'selected' : '' }}>Waiting</option>
                            <option value="in-progress" {{ request('status') === 'in-progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="skipped" {{ request('status') === 'skipped' ? 'selected' : '' }}>Skipped</option>
                            <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>
                    <div class="flex space-x-2">
                        <x-secondary-button type="submit">Filter</x-secondary-button>
                        <a href="{{ route('admin.tokens.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">Reset</a>
                    </div>
                </form>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Call Next Token</h3>
                <div class="flex flex-wrap gap-3">
                    @foreach ($departments as $dept)
                        <form action="{{ route('admin.tokens.call-next', $dept) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition-colors">
                                {{ $dept->name }}
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </form>
                    @endforeach
                </div>
            </div>

            <!-- Tokens Table -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Token</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Patient</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Department</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Doctor</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Issued</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($tokens as $token)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap font-semibold text-gray-900">{{ $token->token_no }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                                        {{ $token->patient_name }}<br>
                                        <span class="text-xs text-gray-500">{{ $token->phone }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $token->department->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $token->doctor?->name ?? 'Any' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 rounded-full text-xs font-medium
                                            @if($token->status === 'waiting') bg-amber-100 text-amber-700
                                            @elseif($token->status === 'in-progress') bg-teal-100 text-teal-700
                                            @elseif($token->status === 'completed') bg-emerald-100 text-emerald-700
                                            @else bg-red-100 text-red-700
                                            @endif">
                                            {{ ucfirst($token->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $token->created_at->format('H:i') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <form action="{{ route('admin.tokens.update-status', $token) }}" method="POST" class="inline-flex space-x-2">
                                            @csrf
                                            @method('PATCH')
                                            @if ($token->status === 'waiting')
                                                <button type="submit" name="status" value="in-progress" class="text-teal-600 hover:text-teal-900 text-sm font-medium">Call</button>
                                            @endif
                                            @if ($token->status === 'in-progress')
                                                <button type="submit" name="status" value="completed" class="text-emerald-600 hover:text-emerald-900 text-sm font-medium">Complete</button>
                                            @endif
                                            @if (in_array($token->status, ['waiting', 'in-progress']))
                                                <button type="submit" name="status" value="skipped" class="text-amber-600 hover:text-amber-900 text-sm font-medium">Skip</button>
                                                <button type="submit" name="status" value="cancelled" class="text-red-600 hover:text-red-900 text-sm font-medium">Cancel</button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7" class="px-6 py-8 text-center text-gray-500">No tokens found.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4">{{ $tokens->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>
