<x-layout-home>
    <div 
        class="relative flex justify-center min-h-screen py-4 text-white bg-gray-100 bg-cover bg-home items-top dark:bg-gray-700 sm:items-center sm:pt-0" 
        style="background-image: url(<?= asset('images/' . rand(1,6) . '.jpg'); ?>)"
    >   <!-- Div with randomized background image from asset folder -->

    <!-- Wrapper -->
    <div class="flex-col p-10 text-center bg-black bg-overlay rounded-xl bg-opacity-60 w-50">
        
        <!-- Logo -->
        <img 
            class="py-2 mx-auto"
            src="{{ asset('images/logo_white.png')}}"
            alt="smart hire logo in white" 
        />

        <!-- Tagline -->
        <p class="text-2xl font-semibold leading-tight text-gray-100">
            {{ __('Professional Freelancer Portal') }}
        </p>

        @auth
            
            <ul class="flex-col justify-evenly text-lg mt-4">
                <li>
                    <span class="font-bold uppercase">Welcome {{ auth()->user()->name }}</span>
                </li>
                <li>
                    <a href="/dashboard" class="hover:text-laravel">
                        <x-icon name="template" />
                        Dashboard
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
            </ul>
            
        @else
            <div class="py-3 my-5 text-gray-100">
                <?php $categories = array('AV', 'Crew', 'Driver', 'Hands', 'Light', 'Scene', 'Sound'); ?>
                @foreach ($categories as $category)
                    <div class="inline px-3 text-left cursor-default">
                        <x-icon name="{{ Str::lower($category) }}" />
                        <p class="inline-block mx-1">{{ $category }}</p>
                    </div>
                @endforeach              
            </div>

            <ul class="flex justify-evenly text-lg">
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
            </ul>
        @endauth
    </div>
    <!-- Wrapper end -->
</x-layout-home>