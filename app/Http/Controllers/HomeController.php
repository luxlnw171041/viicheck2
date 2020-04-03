<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;
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
        $profile = Profile::firstOrCreate(
            ['user_id' => Auth::id()],
            ['role' => 'guest']
        );
        
        if(Auth::user()->profile->role == "admin"){
            return redirect("/profiles");
        }else if(Auth::user()->profile->role == "guest"){
                return redirect("/cars");
        }
    
        return view('home', compact('profile'));
    }
}
