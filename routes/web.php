<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Common Resource Routes:
// index - show all listings
// show - show single listing
// create - show form to create listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing

// Homepage
Route::view('/', 'home');
// User Dashboard
Route::get('/dashboard', function () {
    return view('dashboards.dashboard');
})->middleware('auth');


// Show all profiles
Route::get('/profiles', [ProfileController::class, 'index'])->middleware('auth');
// Show create profile form
Route::get('/profiles/create', [ProfileController::class, 'create'])->middleware('auth');
// Store profile data
Route::post('/profiles', [ProfileController::class, 'store'])->middleware('auth');
// Show edit profile form
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->middleware('auth');
// Update profile data
Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->middleware('auth');
// Delete porifle data
Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->middleware('auth');
// Show single profile
Route::get('/profiles/{profile}', [ProfileController::class, 'show']);


// Show all listings
Route::get('/listings', [ListingController::class, 'index']);
// Show create listing form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// Show edit listing form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Update listing data
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// Delete listing data
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Show register/create user form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
// Store register/create user data
Route::post('/users', [UserController::class, 'store']);
// Log out user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);