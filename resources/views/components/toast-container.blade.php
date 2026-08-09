@props(['top' => 'top-5'])

<div
    x-data="{
        toasts: [],
        init() {
            @if (session('success'))
                this.add('{{ addslashes(session('success')) }}', 'success');
            @endif
            @if (session('error'))
                this.add('{{ addslashes(session('error')) }}', 'error');
            @endif
            @if (session('warning'))
                this.add('{{ addslashes(session('warning')) }}', 'warning');
            @endif
            @if (session('info'))
                this.add('{{ addslashes(session('info')) }}', 'info');
            @endif

            window.addEventListener('toast', (e) => {
                this.add(e.detail.message, e.detail.type || 'success');
            });
        },
        add(message, type = 'success') {
            const id = Date.now() + Math.random();
            this.toasts.push({ id, message, type });
            setTimeout(() => this.remove(id), 5000);
        },
        remove(id) {
            this.toasts = this.toasts.filter(toast => toast.id !== id);
        }
    }"
    class="fixed right-5 z-[60] flex flex-col gap-3 w-full max-w-sm {{ $top }}"
>
    <template x-for="toast in toasts" :key="toast.id">
        <div
            x-show="true"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full opacity-0"
            x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="translate-x-full opacity-0"
            :class="{
                'bg-emerald-500': toast.type === 'success',
                'bg-red-500': toast.type === 'error',
                'bg-amber-500': toast.type === 'warning',
                'bg-blue-500': toast.type === 'info'
            }"
            class="rounded-xl shadow-lg p-4 flex items-start gap-3 pointer-events-auto text-white"
        >
            <span x-text="toast.message" class="flex-1 text-sm font-medium leading-5"></span>
            <button
                type="button"
                @click="remove(toast.id)"
                class="text-white/80 hover:text-white focus:outline-none"
                aria-label="Dismiss notification"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </template>
</div>
