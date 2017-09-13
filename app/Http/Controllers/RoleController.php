<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index(Route $route){

        $roles=Role::all();
        return $roles;
    }
}
