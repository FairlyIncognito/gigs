<x-card class="max-w-lg mx-auto mt-24">

    <div class="grid grid-cols-2 mb-4 border-b">
        <h1 class="text-xl">
            <x-icon name="user" class="text-black" />
            <span class="font-bold text-xl">{{ auth()->user()->name }}</span>
            <span class="block mt-8">Dashboard</span> 
        </h1>

        @if($profile->exists())
            <img class="w-24 rounded-xl place-self-end mb-2" src="{{ asset('storage/' . auth()->user()->profile->picture) }}" alt="profile picture for logged in user" class="rounded-xl border border-grey" />
        @endif
    </div>
    

    <ul class="grid grid-cols-1 space-y-2">
        <li>
            <a href="/listings" class="hover:text-laravel">
                <x-icon name="grid" class="text-black" />
                See Jobs
            </a>
        </li>
        
        @if($profile->exists())
            <li>
                <a href="/profiles/{{ auth()->user()->profile->id }}" class="hover:text-laravel">
                    <x-icon name="profile" class="text-black" />
                    See Profile
                </a>
            </li>

            <li>
                <a href="/profiles/{{ auth()->user()->profile->id }}/edit" class="hover:text-laravel">
                    <x-icon name="edit" class="text-black" />
                    Edit Profile
                </a>
            </li>

            <li class="mt-4">
                <form method="POST" action="/profiles/{{ auth()->user()->profile->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-black hover:text-red-500" onclick="return confirm('You are about to delete your profile. \n This cannot be reversed. \n Are you sure?')">
                        <x-icon name="trash" class="text-red-500" />
                        Delete Profile
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="/profiles/create" class="hover:text-laravel">
                    <x-icon name="profile" class="text-black" />
                    Create Profile
                </a>
            </li>
        @endif
        
    </ul>
</x-card>

<x-inbox class="mx-auto mt-14" />