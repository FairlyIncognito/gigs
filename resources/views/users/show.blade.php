<x-layout>
    
    <x-card class="max-w-lg mx-auto mt-24">

        <div class="grid grid-cols-2 mb-4 border-b">
            <h1 class="text-xl">
                <x-icon name="user" class="text-black" />
                <span class="font-bold text-xl">{{ auth()->user()->name }}</span>
                <span class="block mt-8">Account</span> 
            </h1>

            @if(auth()->user()->profile)
                <img class="w-24 rounded-xl place-self-end mb-2" src="{{ asset('storage/' . auth()->user()->profile->picture) }}" alt="profile picture for logged in user" class="rounded-xl border border-grey" />
            @endif
        </div>
        

        <div class="grid grid-cols-1 space-y-2 mb-4 border-b">
            <h2 class="text-lg">
                <x-icon name="creditcard" />
                Subscription
            </h2>

            <div>
                
                Subscribed: <span class="{{ auth()->user()->subscribed ? 'text-green-500' : 'text-red-500' }}">{{ auth()->user()->subscribed ? 'Yes' : 'No' }}</span>
            </div>
            
            <div>
                
                Subscribe now?

                <br>

                <form class="inline" method="POST" action="/subscribe">
                    @csrf
                    @method('put')
                    <button type="submit" class="hover:text-laravel">
                        Yes
                    </button>
                </form>

                <form class="inline" method="POST" action="/unsubscribe">
                    @csrf
                     @method('put')
                    <button type="submit" class="hover:text-laravel">
                        No
                    </button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 space-y-2 mb-4 border-b">
            <h2 class="text-lg">
                <x-icon name="profile" />
                Account type
            </h2>

            <p>
               {{ ucwords(auth()->user()->role) }}
            </p>

        </div>

        <div class="mt-4">
            <form method="POST" action="/account/{{ auth()->user()->id }}">
                @csrf
                @method('DELETE')
                <button class="text-black hover:text-red-500" onclick="return confirm('You are deleting your account. \n This cannot be reversed. \n Are you sure?')">
                    <x-icon name="trash" class="text-red-500" />
                    Delete Account
                </button>
            </form>          
        </div>

    </x-card>
</x-layout>