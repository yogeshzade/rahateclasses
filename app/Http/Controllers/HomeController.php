<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
    	return view('home.index');
    }


    public function getCourses(){
    	return view ('home.course.index');
    }

    public function contact(){
    	return view('home.contact');
    }
}
