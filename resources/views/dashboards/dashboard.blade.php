<x-layout>
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
</x-layout>