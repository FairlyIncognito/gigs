<x-layout>
    <x-back-button />
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage experiences on your CV
            </h1>
        </header>

        <div class="w-1/2 mx-auto border-t-2">
            @if(count($experiences) != 0)
                <div class="grid grid-cols-5">
                    <?php $experiences = $experiences->sortByDesc('start_date'); ?>
                    @foreach ($experiences as $experience)

                        <div class="px-4 py-4 border-b-2">
                            <p class="text-md font-semibold uppercase">{{ $experience->organization }}</p>
                            <p class="text-sm">{{ $experience->location }}</p>
                            <p class="text-xs">
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $experience->start_date)->format('m-Y') }} 
                                - 
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $experience->end_date)->format('m-Y') }}
                            </p>
                        </div>
                        
                        <div class="px-4 py-4 border-b-2">
                            <p class="text-md font-semibold">{{ $experience->title }}</p>
                            <p class="text-sm">{{ $experience->description }}</p>
                        </div>

                        <div class="px-4 py-4 border-b-2">
                            <p class="font-semibold">Category:</p>
                            <p class="text-sm">{{ $experience->category }}</p>
                        </div>

                        <div class="px-4 py-8 border-b-2">
                            <a href="/cv/{{ $experience->id }}/edit" class="text-laravel px-6 py-2">
                                <x-icon name="edit" />
                                Edit
                            </a>
                        </div>

                        <div class="px-4 py-8 border-b-2">
                            <form method="POST" action="/cv/{{ $experience->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500">
                                    <x-icon name="trash" />
                                    Delete
                                </button>
                            </form>
                        </div>

                    @endforeach
                </div>
            @else
                <div class="border-gray-300">
                    <div class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No experiences found</p>
                    </div>
                </div>
            @endif
        </div>
    </x-card>
</x-layout>