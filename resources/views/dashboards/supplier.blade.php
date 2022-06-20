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