<x-layout>
    @section('content')
    
    <x-back-button />
    
    <div class="mx-4">
        <x-card class="p-10 mx-48">           
                <h4 class="text-2xl block font-bold text-center mb-4">Work Experience</h4>
                <div class="grid grid-cols-2 place-content-center space-x-5 border-b-2 pb-4 mx-48 my-4">
                    <div class="place-self-end my-2">
                        <p class="text-md font-semibold uppercase">{{ $experience->organization }}</p>
                        <p class="text-sm">{{ $experience->location }}</p>
                        <p class="text-xs">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $experience->start_date)->format('m-Y') }} - {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $experience->end_date)->format('m-Y') }}</p>
                    </div>
                    
                    <div class="pl-4 border-l-2 my-2">
                        <p class="text-md font-semibold">{{ $experience->title }}</p>
                        <p class="text-sm">{{ $experience->description }}</p>
                    </div>
                </div>
            
        </x-card>
    </div>
</x-layout>