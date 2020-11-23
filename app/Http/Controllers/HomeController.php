<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Inquiry;
use App\Alumini;
use App\NewsAndUpdate;


class HomeController extends Controller
{
    //

    public function index(){

        $sliders = \App\Slider::where('status',1)->get();
        $popup = \App\Popup::first();
        $testimonials = Alumini::all();
        $notifications = NewsAndUpdate::orderBy('id', 'DESC')->limit(4)->get();
    	return view('home.index',compact('sliders','popup','testimonials','notifications'));
    }


    public function getCourses(){
        $courses = Course::all();
    	return view ('home.course.index',compact('courses'));
    }

    public function getViewCourse($id){
        $course = Course::findOrFail($id);
        return view('home.course.course_explore',compact($course));
    }

    public function contact(){
    	return view('home.contact');
    }

    public function newstudent(){
        return "Working";
    }

    public function storeInquiry(Request $request){
      
       // dd($request->message);

        $status = new Inquiry();
        $status->name = $request->name;
        $status->email = $request->email;
        $status->mobile = $request->phone;
        $status->place = $request->place;
        $status->message = $request->message;

           $status->save();
       
        return back()->with('success','Form Submitted Succesfully');
        
    }

    
}
