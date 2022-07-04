<div class="mt-14 flex flex-row flex-wrap justify-evenly">
    
    <x-card class="min-w-max max-w-lg flex-grow">
        <div class="grid grid-cols-2 pb-2 mb-4 border-b">
            <h1 class="text-xl">
                <x-icon name="office" class="text-black" />
                <span class="font-bold text-xl">{{ auth()->user()->name }}</span>
            </h1>
        </div>
       
        
        <ul>
            <li>
                <a href="/listings" class="hover:text-laravel">
                    <x-icon name="grid" class="text-black" />
                    See Jobs
                </a>
            </li>
            @if(auth()->user() && auth()->user()->role === 'employer' && auth()->user()->subscribed)
                <li>
                    <a href="/listings/manage" class="hover:text-laravel">
                        <x-icon name="edit" class="text-black" />
                        Manage Jobs
                    </a>
                </li>
                <li>
                    <a href="/listings/create" class="hover:text-laravel">
                        <x-icon name="plus" class="text-black" />
                        Create Job
                    </a>
                </li>  
            @endif
        </ul>
    </x-card>
    
    <x-card class="min-w-max max-w-lg flex-grow">
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



