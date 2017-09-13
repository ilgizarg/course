<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UsersController extends Controller
{
    //
//    public function __construct()
//    {

    public function  all(){
        $users=User::all();
        return $users;
    }

    public function profile(Route $route){
        $user = User::where('id',$route->id)->find(1);
        $user = isset($user) ? $user : 'not found';
        return $user;
    }

}
