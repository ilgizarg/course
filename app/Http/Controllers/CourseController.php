<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseTheme;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CourseController extends Controller
{
    //
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /* Get all Course */
    public function all()    {
        $courses = Course::all();
        return view('course.all',['courses'=>$courses]);
    }

    /* Get Course by id*/
    public function index(Route $route){
        $course = Course::where('id',(int) $route->id)->first();
        $course = isset($course) ? $course : 'not found';
        return view('course.info',['course'=>$course]);
    }

    /* View Course */
    public function view(Route $route){
        $course = Course::where('id',(int) $route->id)->first();
        $course = isset($course) ? $course : 'not found';
        $course->thems = CourseTheme::where('id',(int) $course->id)->get();
        //$course->thems->elements = CourseElement::where('themeid',$course->thems->id)->get();
        //return $course;

        return view('course.view',['course'=>$course]);
    }

    /* Create New Course form page (get) */
    public function add(Request $route)
    {
        $course = new Course;

        if ($route->isMethod('get')) {

            return view('course.add',['course' => $course]);
        }
    }

    /* Save in db new course*/
    public function store(Request $route){
        $course = new Course;
        $course->name = $route->name;
        $course->idname = $route->idname;
        $course->summary = $route->summary;
        $course->hide =($route->show)?1:0;
        $course->img = $route->file('img')->getClientOriginalName();
        $route->file('img')->storePubliclyAs('courseimg',$course->img);
        $course->save();
        return view('course.add',['course' => $course,'status'=>'fine']);
    }


}
