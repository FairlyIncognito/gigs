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
    

    <ul class="space-y-2">
        <div class="grid grid-cols-3">
            <li>
                <a href="/listings" class="hover:text-laravel">
                    <x-icon name="grid" class="text-black" />
                    See Jobs
                </a>
            </li>
        </div>
        
        
        @if($profile->exists())
        <div class="grid grid-cols-3">
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

            <li>
                <form method="POST" action="/profiles/{{ auth()->user()->profile->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-black hover:text-red-500" onclick="return confirm('You are about to delete your profile. \n This cannot be reversed. \n Are you sure?')">
                        <x-icon name="trash" class="text-red-500" />
                        Delete Profile
                    </button>
                </form>
            </li>
        </div>
        @else
            <li>
                <a href="/profiles/create" class="hover:text-laravel">
                    <x-icon name="profile" class="text-black" />
                    Create Profile
                </a>
            </li>
        @endif

        @if($experiences->exists())
        <div class="grid grid-cols-3">
            <li>
                <a href="/cv/{{ auth()->user()->id }}" class="hover:text-laravel">
                    <x-icon name="cv" class="text-black" />
                    See CV
                </a>
            </li>

            <li>
                <a href="/cv/{{ auth()->user()->id }}/manage" class="hover:text-laravel">
                    <x-icon name="edit" class="text-black" />
                    Edit CV
                </a>
            </li>

            <li>
                <form method="POST" action="/cv/{{ auth()->user()->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-black hover:text-red-500" onclick="return confirm('You are about to delete your CV. \n This cannot be reversed. \n Are you sure?')">
                        <x-icon name="trash" class="text-red-500" />
                        Delete CV
                    </button>
                </form>
            </li>
        </div>
        @else
            <li>
                <a href="/cv/create" class="hover:text-laravel">
                    <x-icon name="cv" class="text-black" />
                    Create CV
                </a>
            </li>
        @endif


        
    </ul>
</x-card>

<x-inbox class="mx-auto mt-14" />