<footer class="fixed bottom-0 left-0 w-full flex items-center font-bold bg-laravel text-white h-14 mt-14 opacity-90 justify-center">

    <div class="flex lg:w-3/4 md:w-3/4 w-full justify-between">

        <div class="text-xs flex flex-col lg:ml-0 md:ml-0 sm:ml-10 ml-5">
            <a href="/privacy-policy" class="hover:text-black">Privacy Policy</a>
            <a href="/contact" class="hover:text-black">Contact</a>
        </div>
    
        <p class="lg:mr-0 md:mr-0 sm:mr-10 mr-5">Smart:Hire &copy; 2022</p>

        
        @if(auth()->user() && auth()->user()->role === 'employer' && auth()->user()->subscribed)
            <a href="/listings/create" class="hidden md:block bg-black py-2 px-5 hover:text-laravel hover:bg-white">Post Job</a>
        @endif
    </div>
</footer>