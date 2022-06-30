<x-layout>
    <x-back-button />

    <div class="mx-4">
        <x-card class="p-10 max-w-xl mx-auto mt-24">

            <form method="POST" action="/profiles/{{ $profile->id }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <!-- user picture -->
                <div class="mb-6">
                    <label for="picture" class="inline-block text-lg mb-2">
                        Profile Picture
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="picture"
                        value="{{ $profile->picture }}"
                    />
                    @error('picture')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- profile title -->
                    <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2"
                        >Profile Title</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"
                        placeholder="Example: Light and Sound Tech"
                        value="{{ $profile->title }}"
                    />
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- first names -->
                <div class="mb-6">
                    <label
                        for="name_first"
                        class="inline-block text-lg mb-2"
                        >First name(s)</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name_first"
                        value="{{ $profile->name_first }}"
                    />
                    
                    @error('name_first')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- last name -->
                <div class="mb-6">
                    <label
                        for="name_last"
                        class="inline-block text-lg mb-2"
                        >Last name</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name_last"
                        value="{{ $profile->name_last }}"
                    />
                    
                    @error('name_last')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- home location -->
                <div class="mb-6">
                    <label
                        for="location_home"
                        class="inline-block text-lg mb-2"
                        >Home Location</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="location_home"
                        placeholder="Example: Copenhagen, Aarhus, Odense, etc"
                        value="{{ $profile->location_home }}"
                    />
                    @error('location_home')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- current location -->
                <div class="mb-6">
                    <label
                        for="location_current"
                        class="inline-block text-lg mb-2"
                        >Current Location</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="location_current"
                        placeholder="Example: Copenhagen, Aarhus, Odense, etc"
                        value="{{ $profile->location_current }}"
                    />
                    @error('location_current')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- job roles -->
                <x-job-roles-checkboxes :checkbox=$profile />
                <!-- cover letter -->
                <div class="mb-6">
                    <label
                        for="cover_letter"
                        class="inline-block text-lg mb-2"
                    >
                        Cover Letter
                    </label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="cover_letter"
                        rows="10"
                        placeholder="Write a suitable cover letter"
                    >{{ $profile->cover_letter }}</textarea>

                    @error('cover_letter')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- cv upload -->
                <div class="mb-6">
                    <label for="curriculum_vitae" class="inline-block text-lg mb-2">
                        Curriculum Vitae (CV)
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="curriculum_vitae"
                        value="{{ $profile->curriculum_vitae }}"
                    />
                    @error('curriculum_vitae')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- submit button -->
                <div class="mb-6">
                    <button
                        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Update Profile
                    </button>

                    <a href="/dashboard" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>