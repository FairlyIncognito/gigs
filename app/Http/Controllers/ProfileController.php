<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Show all profiles
    public function index() {
        return view('profiles.index', [
            'profiles' => Profile::latest()->paginate(10)
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
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            // Add the path to the $formFields array and store the logo in the public directory within a logos folder
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Profile::create($formFields);
        
        return redirect('/')->with('message', 'profile created successfully!');
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
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        // Image upload
        if($request->hasFile('logo')) {
            // Add the path to the $formFields array and store the logo in the public directory within a logos folder
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

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

        return redirect('/')->with('message', 'Profile deleted successfully!');
    }
}