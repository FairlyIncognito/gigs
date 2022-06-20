<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">

        <h1 class="text-xl">
            <span class="font-bold text-xl">Dashboard</span>
        </h1>
        

        <!-- Dashboard for freelancer/student user roles -->
        @if(auth()->user() && auth()->user()->role === 'freelancer' || auth()->user() && auth()->user()->role === 'student')
            @include('dashboards.freelancer')
        @endif

        <!-- Dashboard for employer user role -->
        @if(auth()->user() && auth()->user()->role === 'employer')
           @include('dashboards.employer')
        @endif

        <!-- Dashboard for supplier user role -->
        @if(auth()->user() && auth()->user()->role === 'supplier')
            @include('dashboards.supplier')
        @endif
    </x-card>
</x-layout>