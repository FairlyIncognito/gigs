<div 
    x-data="{ openMenu : false }" 
    :class="{ ‘overflow-hidden’ : openMenu }"
>   <!-- AlpineJS for mobile menu -->
    <style>
        [x-cloak] {
            /* x-cloak hides the element it's attached to until AlpineJS is fully loaded on the page. Prevents flickering elements. */
            display: none !important;
        }
    </style>

    <header class="flex justify-between mb-4 mt-2">
        <!-- Logo -->
        <a href="/" class="ml-2">
            <img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo"/>
        </a>

        <!-- mobile menu button -->
        <button 
            class="flex md:hidden flex-col items-center align-middle mr-6"
            @click.prevent="openMenu = !openMenu"
            :aria-expanded="openMenu" aria-controls="mobile-navigation" aria-label="Navigation Menu"
        >
            <x-icon name="menu" />
            <span class="text-xs">Menu</span>
        </button>

        <!-- Main Nav Menu -->
        <nav class="hidden md:flex">
            <ul class="flex flex-row space-x-6 mr-6 text-lg">
                @auth
                    <li>
                        <a href="/dashboard" class="hover:text-laravel">
                            <x-icon name="template" />
                            Dashboard
                        </a>
                    </li>
                    
                    <li>
                        <a href="/account" class="hover:text-laravel">
                            <x-icon name="user" />
                            Account
                        </a>
                    </li>

                    <li>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="hover:text-laravel">
                                <x-icon name="logout" />
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="/register" class="hover:text-laravel">
                            <x-icon name="userplus" />
                            Register
                        </a>
                    </li>

                    <li>
                        <a href="/login" class="hover:text-laravel">
                            <x-icon name="login" />
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>

    <!-- Mobile Nav Menu -->
    <nav 
        class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10"
        :class="openMenu ? 'visible' : 'invisible'"
        id="mobile-navigation"
        x-cloak
    >
        <!-- UL Links -->
        <ul 
            class="absolute top-0 right-0 bottom-0 w-1/3 pl-4 pt-4 space-y-2 bg-white drop-shadow-2xl z-11 transition-all"
            :class="openMenu ? 'translate-x-0' : 'translate-x-full'"    
        >
            @auth
                <li>
                    <a href="/dashboard">
                        <x-icon name="template" />
                        Dashboard
                    </a>
                </li>
                
                <li>
                    <a href="/account" class=>
                        <x-icon name="user" />
                        Account
                    </a>
                </li>

                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <x-icon name="logout" />
                            Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/register">
                        <x-icon name="userplus" />
                        Register
                    </a>
                </li>

                <li>
                    <a href="/login">
                        <x-icon name="login" />
                        Login
                    </a>
                </li>
            @endauth
        </ul>
    
        <!-- Close Button -->
        <button 
            @click.prevent="openMenu = !openMenu"
            :aria-expanded=”openMenu” aria-controls=”mobile-navigation” aria-label="Close Navigation Menu"
            class="absolute top-3 right-6"
        >
            <x-icon name="crossround" />
        </button>
    </nav>

</div>