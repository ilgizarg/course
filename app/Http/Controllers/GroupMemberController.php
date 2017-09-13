<?php

namespace App\Http\Controllers;

use App\GroupMember;
use Illuminate\Http\Request;

class GroupMemberController extends Controller
{
    //
    public function index(Route $route){

        $groupm = GroupMember::where('id',(int) $route->id)->first();
        $groupm = isset($groupm) ? $groupm : 'not found';
        return $groupm;
    }
}
