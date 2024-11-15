<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        if(auth()->check()){
            return view('moneo.dashboard');
        } else {
            return view('welcome');
        }
        
    }


    public function dashboard(){
        return view('moneo.dashboard');
    }

    public function profile(){
        $user = auth()->user();
        
        return view('profile.show', ['user' => $user]);
    }

}
