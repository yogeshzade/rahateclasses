<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    //

    public function index(){
    	return view('home.index');
    }


    public function getCourses(){
        $courses = Course::all();
    	return view ('home.course.index',compact('courses'));
    }

    public function contact(){
    	return view('home.contact');
    }
}
