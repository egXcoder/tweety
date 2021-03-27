<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', ['user'=>$user]);
    }

    public function toggleFollow(User $user)
    {
        if (auth()->user()->isFollowing($user)) {
            auth()->user()->unfollow($user);
        } else {
            auth()->user()->follow($user);
        }
        
        return back();
    }
}
