<?php

namespace App\Http\Controllers;

use App\Tweet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
            'tweets' => Tweet::whereIn('user_id',auth()->user()->following->pluck('id'))
                        ->with('user')
                        ->latest()
                        ->take(20)
                        ->get(),
            'following'=> auth()->user()->following,
        ]);
    }
}
