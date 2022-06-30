@props(['checkbox'])

@if(isset($checkbox))
    <div class="mb-6">
        <fieldset class="grid grid-cols-3">
            <legend class="inline-block text-lg mb-2">
                Job Roles
            </legend>
            <div>
                <input type="checkbox" name="job_roles[]" id="AV" value="AV" {{ str_contains($checkbox->job_roles, 'AV') ? "checked" : "" }}>
                <label for="AV" class="inline-block text-lg mb-2">
                    AV
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Driver" value="Driver" {{ str_contains($checkbox->job_roles, 'Driver') ? "checked" : "" }}>
                <label for="Driver" class="inline-block text-lg mb-2">
                    Driver
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Crew" value="Crew" {{ str_contains($checkbox->job_roles, 'Crew') ? "checked" : "" }}>
                <label for="Crew" class="inline-block text-lg mb-2">
                    Crew
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Sound" value="Sound" {{ str_contains($checkbox->job_roles, 'Sound') ? "checked" : "" }}>
                <label for="Sound" class="inline-block text-lg mb-2">
                    Sound
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Light" value="Light" {{ str_contains($checkbox->job_roles, 'Light') ? "checked" : "" }}>
                <label for="Light" class="inline-block text-lg mb-2">
                    Light
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Scene" value="Scene" {{ str_contains($checkbox->job_roles, 'Scene') ? "checked" : "" }}>
                <label for="Scene" class="inline-block text-lg mb-2">
                    Scene
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Hands" value="Hands" {{ str_contains($checkbox->job_roles, 'Hands') ? "checked" : "" }}>
                <label for="Hands" class="inline-block text-lg mb-2">
                    Hands
                </label>
            </div>
        </fieldset>

        @error('job_roles')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
@else
    <div class="mb-6">
        <fieldset class="grid grid-cols-3">
            <legend class="inline-block text-lg mb-2">
                Job Roles
            </legend>

            <div>
                <input type="checkbox" name="job_roles[]" id="AV" value="AV">
                <label for="AV" class="inline-block text-lg mb-2">
                    AV
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Driver" value="Driver">
                <label for="Driver" class="inline-block text-lg mb-2">
                    Driver
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Crew" value="Crew">
                <label for="Crew" class="inline-block text-lg mb-2">
                    Crew
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Sound" value="Sound">
                <label for="Sound" class="inline-block text-lg mb-2">
                    Sound
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Light" value="Light">
                <label for="Light" class="inline-block text-lg mb-2">
                    Light
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Scene" value="Scene">
                <label for="Scene" class="inline-block text-lg mb-2">
                    Scene
                </label>
            </div>

            <div>
                <input type="checkbox" name="job_roles[]" id="Hands" value="Hands">
                <label for="Hands" class="inline-block text-lg mb-2">
                    Hands
                </label>
            </div>
        </fieldset>

        @error('job_roles')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
@endif