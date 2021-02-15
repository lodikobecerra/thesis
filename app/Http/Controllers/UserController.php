<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $user = User::find(Auth::user()->id);
        // dd($user->notifications());
        // $notifications = $user->unreadNotifications();
        // foreach($notifications as $notification)
        // {
        //     dump($notification->type);
        // }

        // die();

        return view('dashboardClient');
    }
}
