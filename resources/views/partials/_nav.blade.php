<nav class="flex justify-between items-center mb-4 mt-2">
    <a href="/" class="ml-2">
        <img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo"/>
    </a>

    <ul class="flex space-x-6 mr-6 text-lg">
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