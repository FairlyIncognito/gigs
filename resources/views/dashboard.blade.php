<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">

        <span class="font-bold text-xl">Welcome {{ auth()->user()->name }}</span>
        <h1 class="text-lg mb-2">Dashboard</h1>

        <!-- Dashboard for freelancer/student user roles -->
        @if(auth()->user() && auth()->user()->role === 'freelancer' || auth()->user() && auth()->user()->role === 'student')
            <ul>
                <li>
                    <a href="/listings" class="hover:text-laravel">
                    See Gigs
                    </a>
                </li>
                <li>
                    <a href="/profile/manage" class="hover:text-laravel">
                    Manage Profile
                    </a>
                </li>
            </ul>
        @endif

        <!-- Dashboard for employer user role -->
        @if(auth()->user() && auth()->user()->role === 'employer')
            <ul>
                <li>
                    <a href="/listings" class="hover:text-laravel">
                    See Gigs
                    </a>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel">
                    Manage Gigs
                    </a>
                </li>
                <li>
                    <a href="/listings/create" class="hover:text-laravel">
                    Create Gig
                    </a>
                </li>
            </ul>
        @endif

        <!-- Dashboard for supplier user role -->
        @if(auth()->user() && auth()->user()->role === 'supplier')
            <ul>
                <li>
                    <a href="#" class="hover:text-laravel">
                    Manage Adverts
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-laravel">
                    Create Advert
                    </a>
                </li>
            </ul>
        @endif
    </x-card>
</x-layout>