<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class CurriculumVitaeController extends Controller
{
    // Show single Experience
    public function show(Experience $experiences) {
        return view('cv.show', [
            'experiences' => $experiences
        ]);
    }

    // Show create form
    public function create() {
        return view('cv.create');
    }

    // Store Experience data from form
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',

        ]);

        $formFields['user_id'] = auth()->id();

        Experience::create($formFields);
        
        return redirect('/dashboard')->with('message', 'CV created successfully!');
    }

    // Show edit form
    public function edit(Experience $experiences) {
        return view('cv.edit', ['experiences' => $experiences]);
    }

     // Delete profile
     public function destroy(Experience $experiences) {
        // Make sure logged in user is owner
        if($experiences->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $experiences->delete();

        return redirect('/dashboard')->with('message', 'CV deleted successfully!');
    }
}