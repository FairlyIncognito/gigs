<x-layout>
    @section('content')
    
    <a href="{{ url()->previous() }}" class="inline-block text-black ml-4 mb-4"
        ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
    
                <h3 class="text-2xl mb-2">{{ $profile->title }}</h3>

                <img class="w-48 rounded-xl mb-2" src="{{ File::exists('storage/' . $profile->picture) ? asset('storage/' . $profile->picture) : $profile->picture }}" alt="profile picture for {{ $profile->name_first }} {{ $profile->name_last }}" class="rounded-xl border border-grey" />
    
                <div class="text-xl font-bold mb-4">{{ $profile->name_first }} {{ $profile->name_last }}</div>
    
                <x-profile-roles :roles="$profile->job_roles"/>
    
                <div class="text-lg my-4">
                    <x-icon name="home" class="text-black" />
                    {{ $profile->location_home }}
                </div>

                <div class="text-lg my-4">
                    <x-icon name="map" class="text-black" />
                    {{ $profile->location_current }}
                </div>


                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Cover Letter
                    </h3>
                    <div class="text-lg space-y-6 whitespace-pre-wrap">
                        {{ $profile->cover_letter }}
                    </div>
                </div>


                <div class="mt-4">
                    <h3 class="text-3xl font-bold mb-4">
                        Gallery
                    </h3>
                    <div class="flex flex-wrap">
                        @foreach ($profile->pictures as $picture)
                            <img 
                                class="p-1" 
                                src="{{ $picture->picture_path }}" 
                                alt="{{ $picture->picture_alt }}" 
                                title="{{ $picture->picture_title }}" 
                            />
                        @endforeach
                    </div>
                </div>


                <div class="mt-4">
                    <p>Downloads:</p>
                    <a href="../{{ $profile->curriculum_vitae }}" class="hover:text-laravel">
                        <h3 class="text-3xl font-bold mb-4">
                            Curriculum Vitae
                        </h3>
                    </a>
                </div>

            </div>
        </x-card>
    </div>
    </x-layout>