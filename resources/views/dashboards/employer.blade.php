<div class="mt-14 flex flex-row flex-wrap justify-evenly">
    
    <x-card class="p-10 min-w-max max-w-lg flex-grow">

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
    
    <x-card class="p-10 min-w-max max-w-lg flex-grow">
        <div class="grid grid-cols-2 pb-2 mb-4 border-b">
            <h3 class="text-xl">
                <x-icon name="users" class="text-black" />
                <span class="font-bold ">Profiles</span> 
            </h3>
        </div>
        <ul>
            <li>
                <a href="/profiles" class="hover:text-laravel">
                    <x-icon name="profile" class="text-black" />
                    See Profiles
                </a>
            </li>
        </ul>
    </x-card>

    <x-inbox class="flex-grow" />
</div>



