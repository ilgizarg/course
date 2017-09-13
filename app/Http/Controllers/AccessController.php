<?php

namespace App\Http\Controllers;

use App\Access;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    //
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $access = Access::all();
        return  $access;
    }
}
