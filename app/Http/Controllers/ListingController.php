<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show create form
    public function create() {
        return view('listings.create');
    }

    // Store listing data from form
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'job_roles' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            // Add the path to the $formFields array and store the logo in the public directory within a logos folder
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $roles = $_POST['job_roles']; // get job_roles field from the posted form
        $formFields['job_roles'] = implode(' ', $roles); // Convert array to space-delimited string and add to the formFields array

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);
        
        return redirect('/dashboard')->with('message', 'Listing created successfully!');
    }

    // Show edit form
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Store listing data from form
    public function update(Request $request, Listing $listing) {
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'job_roles' => 'required',
            'description' => 'required'
        ]);

        // Image upload
        if($request->hasFile('logo')) {
            // Add the path to the $formFields array and store the logo in the public directory within a logos folder
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $roles = $_POST['job_roles']; // get job_roles field from the posted form
        $formFields['job_roles'] = implode(' ', $roles); // Convert array to space-delimited string and add to the formFields array

        $listing->update($formFields);
        
        return back()->with('message', 'Listing updated successfully!');
    }

    // Delete listing
    public function destroy(Listing $listing) {
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $listing->delete();

        return redirect('/')->with('message', 'Listing deleted successfully!');
    }

    // Manage listings
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]); // listings() does exist on the User model, ignore IDE error
    }
}