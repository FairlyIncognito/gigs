<x-card class="p-10 max-w-lg mx-auto mt-24">

    <h1 class="text-xl mb-4 border-b">
        <x-icon name="office" class="text-black" />
        <span class="font-bold text-xl">{{ auth()->user()->name }}</span>
        <span class="block mt-4">Dashboard</span> 
    </h1>

    <ul>
        <li>
            <a href="#" class="hover:text-laravel">
                <x-icon name="edit" class="text-black" />
                Manage Adverts
            </a>
        </li>
        <li>
            <a href="#" class="hover:text-laravel">
                <x-icon name="plus" class="text-black" />
                Create Advert
            </a>
        </li>
    </ul>
</x-card>