<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Show dashboard and pass profile infornation
    public function show(Profile $profile) {
        $profile = auth()->user()->profile();
        return view('dashboards.dashboard', [
            'profile' => $profile
        ]);

    }
}