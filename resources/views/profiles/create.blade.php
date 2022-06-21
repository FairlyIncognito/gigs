<x-layout>
    <a href="/dashboard" class="inline-block text-black ml-4 mb-4"
        ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        
    <x-card class="p-10 max-w-xl mx-auto mt-24">

        <form method="POST" action="/profiles" enctype="multipart/form-data">
            @csrf
            <!-- user picture -->
            <div class="mb-6">
                <label for="picture" class="inline-block text-lg mb-2">
                    Profile Picture
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="picture"
                    value="{{ old('picture') }}"
                />
                @error('picture')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- first names -->
            <div class="mb-6">
                <label
                    for="first_name"
                    class="inline-block text-lg mb-2"
                    >First name(s)</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="first_name"
                    value="{{ old('first_name') }}"
                />
                
                @error('first_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- last name -->
            <div class="mb-6">
                <label
                    for="last_name"
                    class="inline-block text-lg mb-2"
                    >Last name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="last_name"
                    value="{{ old('last_name') }}"
                />
                
                @error('last_name')
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
                    value="{{ old('location_home') }}"
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
                    value="{{ old('location_current') }}"
                />
                @error('location_current')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- job roles -->
            <div class="mb-6">
                <fieldset class="grid grid-cols-3">
                    <legend class="inline-block text-lg mb-2">
                        Job Roles
                    </legend>

                    <div>
                        <input type="checkbox" name="job_roles" id="AV" value="AV">
                        <label for="AV" class="inline-block text-lg mb-2">
                            AV
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" name="job_roles" id="Driver" value="Driver">
                        <label for="Driver" class="inline-block text-lg mb-2">
                            Driver
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" name="job_roles" id="Crew" value="Crew">
                        <label for="Crew" class="inline-block text-lg mb-2">
                            Crew
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" name="job_roles" id="Sound" value="Sound">
                        <label for="Sound" class="inline-block text-lg mb-2">
                            Sound
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" name="job_roles" id="Light" value="Light">
                        <label for="Light" class="inline-block text-lg mb-2">
                            Light
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" name="job_roles" id="Scene" value="Scene">
                        <label for="Scene" class="inline-block text-lg mb-2">
                            Scene
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" name="job_roles" id="Hands" value="Hands">
                        <label for="Hands" class="inline-block text-lg mb-2">
                            Hands
                        </label>
                    </div>
                </fieldset>

                @error('job_roles')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
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
                >
                {{ old('cover_letter') }}
                </textarea>
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
                    value="{{ old('curriculum_vitae') }}"
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
                    Create Profile
                </button>

                <a href="/dashboard" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>