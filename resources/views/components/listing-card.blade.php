@props(['listing'])

<x-card>
    <div class="flex">
        <a href="/listings/{{ $listing->id }}">
            <!-- Not in use: no image asset link: asset('/images/no-image.png') -->
            <img
                class="hidden w-36 mr-6 md:block rounded-lg border border-black hover:border hover:border-laravel hover:border-1"
                src="{{ File::exists('storage/' . $listing->logo) ? asset('storage/' . $listing->logo) : $listing->logo }}"
                alt=""
            />
        </a>
        <div>
            <a href="/listings/{{ $listing->id }}">
                <h3 class="text-2xl hover:text-laravel">
                    {{ $listing->title }}
                </h3>
                
                <div class="text-xl font-bold mb-4 hover:text-laravel">{{ $listing->company }}</div>
            </a>

            <x-listing-tags :tagsCsv="$listing->tags" />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>