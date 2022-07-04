<x-layout>
    @section('content')
    @include('partials._search')

    <x-back-button />

    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{ File::exists('storage/' . $listing->logo) ? asset('storage/' . $listing->logo) : $listing->logo }}"
                    alt=""
                />

                <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>

                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>

                <x-job-roles-tags :roles="$listing->job_roles" />

                <div class="text-lg w-full py-4 border-b mb-6">
                    <x-icon name="home" />
                    {{ $listing->location }}
                </div>

                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>

                    <div class="text-lg space-y-6">
                        {{ $listing->description }}
                    </div>
                    
                    <div class="inline-flex flex-col w-1/4 space-y-5">
                        <a
                        href="mailto:{{ $listing->email }}"
                        class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    >
                        <x-icon name="mail" />
                        Contact Employer
                    </a>

                    <a
                        href="{{ $listing->website }}"
                        target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    >
                        <x-icon name="extlink" />
                        Visit Website
                    </a>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>