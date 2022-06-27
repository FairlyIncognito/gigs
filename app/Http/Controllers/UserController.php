<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show register/create form
    public function create() {
        return view('users.register');
    }

    // Create new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
            'role' => 'required'
        ]);

        // Hash password with blowfish encryption
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/dashboard')->with('message', 'User created and logged in!');
    }

    // Logout user
    public function logout(Request $request) {
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Show login form
    public function login() {
        return view('users.login');
    }

    // Show account page
    public function show(User $user) {
        return view('users.show', [
            'user' => $user
        ]);
    }

    // Authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/dashboard')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Delete Account
    public function destroy(User $user) {
        // Make sure logged in user is owner
        if(! $user = $user::where('id', auth()->user()->id)) {
            abort(403, 'Unauthorized Action');
        }
        
        $user->delete();

        auth()->logout();
    

        return redirect('/')->with('message', 'Account deleted successfully!');
    }
}   