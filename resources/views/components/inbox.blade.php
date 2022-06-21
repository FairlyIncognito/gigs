<x-card {{ $attributes->merge(['class' => 'max-w-lg']) }}>
    <div class="grid grid-cols-2 pb-2 mb-4 border-b">
        <h3 class="text-xl">
            <x-icon name="inbox" class="text-black" />
            <span class="font-bold ">Inbox</span> 
        </h3>
    </div>

    <ul class="flex flex-col space-y-2">
        <li>
            <a href="#" class="hover:text-laravel">
                <x-icon name="mail" class="text-black" />
                Unread (3)
            </a>
        </li>
        <li>
            <a href="#" class="hover:text-laravel">
                <x-icon name="openmail" class="text-black" />
                All messages
            </a>
        </li>
    </ul>
</x-card>