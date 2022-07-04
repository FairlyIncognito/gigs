<x-layout>
    @section('content')
    
    <x-back-button />
    
    <div class="mx-4">
        <x-card class="p-10">
            <!-- WIP -->
            @foreach($experiences as $experience)
                <!-- TODO: foreach category make section? -->
                @if($experience->category == 'Work')
                
                @elseif($experience->category == 'Education')

                @elseif($experience->category == 'Skills')

                @endif





                <!-- leftover boilerplate for inspiration -->
                <div class="flex flex-col items-center justify-center text-center">
        
                    <h3 class="text-2xl mb-2">{{ $experience->title }}</h3>
        
                    <div class="text-xl font-bold mb-4">{{ $experience->name_first }} {{ $experience->name_last }}</div>
        
                    <div class="text-lg my-4">
                        <x-icon name="home" class="text-black" />
                        {{ $experience->location_home }}
                    </div>

                    <div class="text-lg my-4">
                        <x-icon name="map" class="text-black" />
                        {{ $experience->location_current }}
                    </div>


                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4">
                            Cover Letter
                        </h3>
                        <div class="text-lg space-y-6 whitespace-pre-wrap">
                            {{ $experience->cover_letter }}
                        </div>
                    </div>
                </div>
            @endforeach
        </x-card>
    </div>
</x-layout>