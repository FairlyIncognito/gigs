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