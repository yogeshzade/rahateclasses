<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;

class CareerController extends Controller
{
    //

    public function index(){
    	$careers = Career::all();
    	return view('home.career',compact('careers'));
    }

}
