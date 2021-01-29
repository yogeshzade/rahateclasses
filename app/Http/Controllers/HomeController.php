<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Inquiry;
use App\Alumini;
use App\NewsAndUpdate;
use App\Faculty;
use App\StudentsNote;



class HomeController extends Controller
{
    //

    public function index(){

        $sliders = \App\Slider::where('status',1)->get();
        $popup = \App\Popup::first();
        $testimonials = Alumini::where('status',1)->get();
        $testimonial2 = Alumini::where('status',1)->limit(6)->get();
        $notifications = NewsAndUpdate::orderBy('id', 'DESC')->limit(4)->get();
        $faculties = Faculty::where('status',1)->orderBy('sequence','DESC')->get();
    	return view('home.index',compact('sliders','popup','testimonials','notifications','faculties'));
    }

    public function faculties(){
          $faculties = Faculty::where('status',1)->orderBy('sequence','DESC')->get();
        return view('home.fac',compact('faculties'));
    }


    public function getCourses(){
        $courses = Course::where('status',1)->orderByRaw("featured =  1")->get();
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

    public function howToApply(){
        return view('home.howtoapply');
    }

    public function authPage(){
        return view();
        
    }

    public function feesStructure(){
        return view('home.feesstruct');
    }

    public function rahateresults(){
        return view('home.results');
    }

    public function showNotes(){
        $notes = StudentsNote::all();
        $subjects StudentsNote::groupBy('subject_name')
                 ->get();
        return view('home.noteslist',compact('notes','subjects'));
    }

    public function syncprogram(){
        return "This page is working! Please add data";
    }

    
}
