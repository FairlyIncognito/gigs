<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;

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

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::view('/privacy-policy', 'privacy-policy');


// User Dashboard
Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('auth');

Route::get('/cv/{cv}', [ExperienceController::class, 'show'])->middleware('auth');
Route::get('/cv/create', [ExperienceController::class, 'create'])->middleware('auth');
Route::post('/cv', [ExperienceController::class, 'store'])->middleware('auth');
Route::get('/cv/{cv}/edit', [ExperienceController::class, 'edit'])->middleware('auth');
Route::put('/cv/{cv}', [ExperienceController::class, 'update'])->middleware('auth');
Route::delete('/cv/{cv}', [ExperienceController::class, 'destroy'])->middleware('auth');


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
// User Account
Route::get('/account', [UserController::class, 'show'])->middleware('auth');
// User Account delete
Route::delete('/account/{account}', [UserController::class, 'destroy'])->middleware('auth');
// Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// Subscribe
Route::put('/subscribe', [SubscriptionController::class, 'subscribe'])->middleware('auth');
Route::put('/unsubscribe', [SubscriptionController::class, 'unsubscribe'])->middleware('auth');


// Laravel Messenger Routes
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'App\Http\Controllers\MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'App\Http\Controllers\MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'App\Http\Controllers\MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'App\Http\Controllers\MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'App\Http\Controllers\MessagesController@update']);
});