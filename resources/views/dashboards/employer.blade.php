<x-card class="p-10 max-w-lg mx-auto mt-24">

    <h1 class="text-xl mb-4 border-b">
        <x-icon name="office" class="text-black" />
        <span class="font-bold text-xl">{{ auth()->user()->name }}</span>
        <span class="block mt-4">Dashboard</span> 
    </h1>
    
    <ul>
        <li>
            <a href="/listings" class="hover:text-laravel">
                <x-icon name="grid" class="text-black" />
                See Gigs
            </a>
        </li>
        <li>
            <a href="/listings/manage" class="hover:text-laravel">
                <x-icon name="edit" class="text-black" />
                Manage Gigs
            </a>
        </li>
        <li>
            <a href="/listings/create" class="hover:text-laravel">
                <x-icon name="plus" class="text-black" />
                Create Gig
            </a>
        </li>
    </ul>
</x-card>

<x-card class="p-10 max-w-lg mx-auto mt-24">
    <h3 class="text-xl mb-4 border-b">Profiles</h3>
    <ul>
        <li>
            <a href="/profiles" class="hover:text-laravel">
                <x-icon name="profile" class="text-black" />
                See Profiles
            </a>
        </li>
    </ul>
</x-card>