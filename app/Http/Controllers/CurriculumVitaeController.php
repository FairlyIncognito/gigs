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
        $experiences = auth()->user()->experiences()->get(); // Ignore IDE error, method exists.
        return view('cv.manage', ['experiences' => $experiences]);
    }

    // Show edit form
    public function edit(Experience $experience, Request $request) {
        $experience = Experience::find($request->id);
        return view('cv.edit', ['experience' => $experience]);
    }

    // Delete experience
    public function destroy(Experience $experience, Request $request) {
        // Check if single entry
        if(Experience::find($request->id)) {
            $experience = Experience::find($request->id);
            // Make sure logged in user is owner
            if($experience->user_id != auth()->user()->id) {
                abort(403, 'Unauthorized Action');
            }
            // Delete single CV entry
            $experience->delete();

            return back()->with('message', 'CV entry deleted successfully!');
        }
        // Check if 
        elseif(auth()->user()->experiences) {
            $experiences = auth()->user()->experiences;
            // Make sure logged in user is owner
            if($request->id != auth()->user()->id) {
                abort(403, 'Unauthorized Action');
            }
            // Delete all CV entries for user
            $experiences->whereIn('user_id', $request->id)->each->delete();

            return back()->with('message', 'CV deleted successfully!');
        } 
    }
}