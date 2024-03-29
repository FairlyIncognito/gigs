<div class="relative" x-data="{ open: false }" @click.away="open = false">
    <div @click="open = ! open" class="border hover:border-laravel p-1 mb-4">
        {{ $trigger }}
    </div>

    <div
        class="absolute z-20 bg-white rounded shadow-md py-2 mt-1 w-40"
        x-show="open"
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>