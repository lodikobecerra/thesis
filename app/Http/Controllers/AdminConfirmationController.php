<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminConfirmationController extends Controller
{
    public function adminConfirmation(){
    	return view('auth.adminConfirmation');
    }

    public function adminConfirm(Request $request){

        if($request['adminPass'] == "12345"){
            return view('auth.register');
        }
        else{
            return back()->with('message', "Invalid Password");
        }
    }

    // public function reset(){
    //     return view('auth.passwords.reset');
    // }

}