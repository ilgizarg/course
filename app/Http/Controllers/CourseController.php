<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CourseController extends Controller
{
    //
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function all()    {
        $courses = Course::all();
        return $courses;
    }

    public function index(Route $route){

        $course = Course::where('id',(int) $route->id)->first();
        $course = isset($course) ? $course->name : 'not found';
        return $course;
    }


}
