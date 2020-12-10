<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoutesController extends Controller
{
	public function login(){
    	return view('auth.login');
    }

    public function dashboard(){
    	return view('dashboard');
    }

    public function team(){
    	return view('team.team');
    }

    public function calendar(){
    	return view('calendar.calendar');
    }

    public function filemanager(){
    	return view('file manager.fileManager');
    }

    public function register(){
    	return view('auth.register');
    }

    // public function reset(){
    //     return view('auth.passwords.reset');
    // }

    public function profile(){
    	return view('profile.profile');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
