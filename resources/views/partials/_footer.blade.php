<footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-14 mt-14 opacity-90 md:justify-center">
    <a href="/privacy-policy">Privacy Policy</a>
    
    <p class="ml-2 mb-2">Smart:Hire &copy; 2022</p>

    @if(auth()->user() && auth()->user()->role === 'employer')
        <a href="/listings/create" class="absolute right-10 bg-black text-white py-2 px-5">Post Job</a>
    @endif
</footer>