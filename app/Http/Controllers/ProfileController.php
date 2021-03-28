<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index',[
            'users'=>User::paginate(10)
        ]);
    }

    public function show(User $user)
    {
        return view('profile.show', ['user'=>$user]);
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        
        return view('profile.edit');
    }

    public function update(User $user){
        $this->authorize('edit',$user);

        request()->validate([
            'image'=>'image|dimensions:min-width=300,min-height:300',
            'cover'=>'image|dimensions:min-width=800,min-height:400',
            'description'=>'string'
        ]);

        $user->update([
            'image_url'=> request('image')->store('avatars'),
            'cover_url'=> request('cover')->store('covers'),
            'description'=> request('description')
        ]);

        return back()->with('success','Profile Updated Successfully');
    }

    public function toggleFollow(User $user)
    {
        $this->authorize('follow_or_unfollow',$user);

        auth()->user()->following()->toggle($user);

        return back();
    }
}
