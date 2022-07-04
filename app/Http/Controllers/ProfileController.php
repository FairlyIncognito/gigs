<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Show all profiles
    public function index() {
        return view('profiles.index', [
            'profiles' => Profile::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    // Show single profile
    public function show(Profile $profile) {
        return view('profiles.show', [
            'profile' => $profile
        ]);
    }

    // Show create form
    public function create() {
        return view('profiles.create');
    }

    // Store profile data from form
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'name_first' => 'required',
            'name_last' => 'required',
            'location_home' => 'required',
            'location_current' => 'required',
            'job_roles' => 'required',
            'cover_letter' => 'required',
        ]);

        if($request->hasFile('picture')) {
            // Add the path to the $formFields array and store the picture in the public directory within a pictures folder
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        if($request->hasFile('curriculum_vitae')) {
            // Add the path to the $formFields array and store the picture in the public directory within a pictures folder
            $formFields['curriculum_vitae'] = $request->file('curriculum_vitae')->store('curriculum_vitae', 'public');
        }

        $roles = $_POST['job_roles']; // get job_roles field from the posted form
        $formFields['job_roles'] = implode(' ', $roles); // Convert array to space-delimited string and add to the formFields array

        $formFields['user_id'] = auth()->id();

        Profile::create($formFields);
        
        return redirect('/dashboard')->with('message', 'Profile created successfully!');
    }

    // Show edit form
    public function edit(Profile $profile) {
        return view('profiles.edit', ['profile' => $profile]);
    }

    // Store profile data from form
    public function update(Request $request, Profile $profile) {
        // Make sure logged in user is owner
        if($profile->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'name_first' => 'required',
            'name_last' => 'required',
            'location_home' => 'required',
            'location_current' => 'required',
            'job_roles' => 'required',
            'cover_letter' => 'required',
        ]);

        // Image upload
        if($request->hasFile('picture')) {
            // Add the path to the $formFields array and store the picture in the public directory within a pictures folder
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        if($request->hasFile('curriculum_vitae')) {
            // Add the path to the $formFields array and store the picture in the public directory within a pictures folder
            $formFields['curriculum_vitae'] = $request->file('curriculum_vitae')->store('curriculum_vitae', 'public');
        }

        $roles = $_POST['job_roles']; // get job_roles field from the posted form
        $formFields['job_roles'] = implode(' ', $roles); // Convert array to space-delimited string and add to the formFields array

        $profile->update($formFields);
        
        return back()->with('message', 'Profile updated successfully!');
    }

    // Delete profile
    public function destroy(Profile $profile) {
        // Make sure logged in user is owner
        if($profile->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $profile->delete();

        return redirect('/dashboard')->with('message', 'Profile deleted successfully!');
    }
}