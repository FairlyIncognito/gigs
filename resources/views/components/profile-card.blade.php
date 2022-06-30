@props(['profile'])

<x-card>
    <div class="flex">
        
            <div>
                <a href="/profiles/{{ $profile->id }}">
                    <h3 class="text-2xl font-bold mb-2">
                        {{ $profile->name_first }} {{ $profile->name_last }}
                    </h3>
                    
                    <img src="{{ File::exists('storage/' . $profile->picture) ? asset('storage/' . $profile->picture) : $profile->picture }}" alt="profile picture for {{ $profile->name_first }} {{ $profile->name_last }}" class="rounded-xl border border-grey" />
                    
                    <div class="text-xl font-semibold mb-2 mt-2">{{ $profile->title }}</div>
                </a>

                <x-profile-roles :roles="$profile->job_roles" />

                <div class="text-lg mt-4">
                    <x-icon name="home" class="text-black" />
                    {{ $profile->location_home }}
                </div>

                <div class="text-lg mt-4">
                    <x-icon name="map" class="text-black" />
                    {{ $profile->location_current }}
                </div>
            </div>
        
    </div>
</x-card>