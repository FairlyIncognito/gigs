<x-card class="p-10 max-w-lg mx-auto mt-24">

    <h1 class="text-xl mb-4 border-b">
        <x-icon name="user" class="text-black" />
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
        @if($profile->exists())
            <li>
                <a href="/profiles/{{ $profile->user_id }}" class="hover:text-laravel">
                    <x-icon name="profile" class="text-black" />
                    See Profile
                </a>
            </li>
            <li>
                <a href="/profiles/{{ $profile->user_id }}/edit" class="hover:text-laravel">
                    <x-icon name="edit" class="text-black" />
                    Edit Profile
                </a>
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