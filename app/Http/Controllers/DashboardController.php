<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Experience;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Show dashboard and pass profile infornation
    public function show(Profile $profile, Experience $experiences) {
        // ignore inteliphense error
        $profile = auth()->user()->profile(); 
        $experiences = auth()->user()->experiences();
        return view('dashboards.dashboard', [
            'profile' => $profile,
            'experiences' => $experiences
        ]);

    }
}