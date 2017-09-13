<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $userid = Auth::id();

        $user = User::where('id',(int) $userid)->first();
        $user = isset($user) ? $user : 'not found';
        return $user;
    }
}
