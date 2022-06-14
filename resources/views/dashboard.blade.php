<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">

        <h1 class="text-xl">
            <span class="font-bold text-xl">Dashboard</span>
        </h1>
        

        <!-- Dashboard for freelancer/student user roles -->
        @if(auth()->user() && auth()->user()->role === 'freelancer' || auth()->user() && auth()->user()->role === 'student')
            <h2 class="text-lg mb-4 ml-4">
                <x-icon name="user" class="text-black" />
                {{ auth()->user()->name }}
            </h2>

            <ul>
                <li>
                    <a href="/listings" class="hover:text-laravel">
                        <x-icon name="grid" class="text-black" />
                        See Gigs
                    </a>
                </li>
                <li>
                    <a href="/profile" class="hover:text-laravel">
                        <x-icon name="profile" class="text-black" />
                        See Profile
                    </a>
                </li>
                <li>
                    <a href="/profile/manage" class="hover:text-laravel">
                        <x-icon name="edit" class="text-black" />
                        Manage Profile
                    </a>
                </li>
            </ul>
        @endif

        <!-- Dashboard for employer user role -->
        @if(auth()->user() && auth()->user()->role === 'employer')
            <h2 class="text-lg mb-4 ml-4">
                <x-icon name="office" class="text-black" />
                {{ auth()->user()->name }}
            </h2>
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
        @endif

        <!-- Dashboard for supplier user role -->
        @if(auth()->user() && auth()->user()->role === 'supplier')
            <h2 class="text-lg mb-4 ml-4">
                <x-icon name="office" class="text-black" />
                {{ auth()->user()->name }}
            </h2>
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
        @endif
    </x-card>
</x-layout>