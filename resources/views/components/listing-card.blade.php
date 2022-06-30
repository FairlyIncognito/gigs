@props(['listing'])

<x-card>
    <div class="flex">
        <div class="mr-6 md:block">
            <a href="/listings/{{ $listing->id }}">
                <!-- Not in use: no image asset link: asset('/images/no-image.png') -->
                <img
                    class="sm:scale-50 md:scale-75 lg:scale-100 max-w-32 max-h-32 rounded-lg border border-black hover:border hover:border-laravel hover:border-1"
                    src="{{ File::exists('storage/' . $listing->logo) ? asset('storage/' . $listing->logo) : $listing->logo }}"
                    alt=""
                />
            </a>
        </div>
        
        <div>
            <a href="/listings/{{ $listing->id }}">
                <h3 class="text-xl hover:text-laravel">
                    {{ $listing->title }}
                </h3>
                
                <div class="text-xl font-bold mb-4 hover:text-laravel">{{ $listing->company }}</div>
            </a>

            <x-job-roles-tags :roles="$listing->job_roles" />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>