<?php

namespace App\Http\Controllers;

use App\Models\User;

class SubscriptionController extends Controller
{
    // Subscribe user to premium
    public function subscribe(User $user) {      
        $user = $user::where('id', auth()->user()->id);

        $user->update([
            'subscribed' => 1,
        ]);
        
        return back()->with('message', 'You have been subscribed!');
    }

    // Unsubscribe user
    public function unsubscribe(User $user) {      
        $user = $user::where('id', auth()->user()->id);

        $user->update([
            'subscribed' => 0,
        ]);
        
        return back()->with('message', 'You are no longer subscribed!');
    }
}