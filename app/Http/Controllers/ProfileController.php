<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;



class ProfileController extends Controller
{
    
  public function __construct()
    {
        $this->middleware('auth');
    }




 public function index() {
 	    
        //$user = Auth::user();  
        $user = Socialite::driver('github')->userFromToken($token);

        return view('profile.index',compact('user'));
        
    
 }


}



