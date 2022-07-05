<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CurriculumVitaeController extends Controller
{
    // Show single User's Experiences
    public function show(Experience $experiences, Request $request) {
        $experiences = $request->user()->experiences()->get();

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

    // Show manage page
    public function manage(Experience $experiences) {
        $experiences = auth()->user()->experiences()->get();
        return view('cv.manage', ['experiences' => $experiences]);
    }

    // Show edit form
    public function edit(Experience $experience, Request $request) {
        $experience = Experience::find($request->id);
        return view('cv.edit', ['experience' => $experience]);
    }

    // Delete experience
    public function destroy(Experience $experience, Request $request) {
        $experience = Experience::find($request->id);
        // Make sure logged in user is owner
        if($experience->user_id != auth()->user()->id) {
            abort(403, 'Unauthorized Action');
        }
        
        $experience->delete();

        return back()->with('message', 'Entry deleted successfully!');
        
    }

    // Delete all experiences
    public function destroy_all(Experience $experiences, Request $request) {  
        $experiences = auth()->user()->experiences;

        if($request->user != auth()->user()->id) {
            abort(403, 'Unauthorized Action');
        }

        $experiences->whereIn('user_id', $request->user)->each->delete();

        return back()->with('message', 'CV deleted successfully!');
    
    }
}