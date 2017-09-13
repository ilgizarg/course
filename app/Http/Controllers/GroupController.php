<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function all()
    {
        $groups=Group::all();
        return $groups;
    }

    public function index(Route $route){

        $group = Group::where('id',(int) $route->id)->first();
        $group = isset($group) ? $group->name : 'not found';
        return $group;
    }

}
