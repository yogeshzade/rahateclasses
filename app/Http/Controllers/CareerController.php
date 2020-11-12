<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    //

    public function index(){
    	$careers = \App\Career::all();
    	return view('home.career',compact('careers'));
    }

}
