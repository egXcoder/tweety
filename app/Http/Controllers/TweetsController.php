<?php

namespace App\Http\Controllers;

use App\Enum\ImpressionsEnum;
use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('tweets.index',[
            'tweets' => auth()->user()->paginateFollowingTweets(),
        ]);
    }

    public function store(){
        $validated = request()->validate([
            "body"=>'required|string|max:255',
        ]);

        Tweet::create([
            "body"=>$validated['body'],
            "user_id"=>auth()->id(),
        ]);

        return back()->with('success','Tweet is posted successfully');
    }
}
