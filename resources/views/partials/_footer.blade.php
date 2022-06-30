<footer class="fixed bottom-0 left-0 w-full flex items-center font-bold bg-laravel text-white h-14 mt-14 opacity-90 md:justify-center">

    <div class="flex w-3/4 justify-between">

        <div class="text-xs flex flex-col">
            <a href="/privacy-policy" class="hover:text-black">Privacy Policy</a>
            <a href="/contact" class="hover:text-black">Contact</a>
        </div>
    
        <p class="">Smart:Hire &copy; 2022</p>
    </div>
        

        @if(auth()->user() && auth()->user()->role === 'employer' && auth()->user()->subscribed)
            <a href="/listings/create" class="absolute right-10 bg-black text-white py-2 px-5">Post Job</a>
        @endif
</footer>