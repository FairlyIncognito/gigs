@if(session()->has('message'))
    <div 
        x-data="{show: true}" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show" 
        class="fixed top-0 left-1/2 w-full sm:w-1/2 transform -translate-x-1/2 bg-laravel text-white py-5"
    >
        <p class="text-center px-6 sm:px-12 md:px-20 lg:px-24">
            {{ session('message') }}
        </p>
    </div>
@endif