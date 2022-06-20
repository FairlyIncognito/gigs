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