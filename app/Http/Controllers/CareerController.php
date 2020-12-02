<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\AppliedUser;

class CareerController extends Controller
{
    //

    public function index(){
    	$careers = Career::all();
    	return view('home.career',compact('careers'));
    }

    public function apply(Request $request){

    	$request->validate([
    		'fullname' => 'required|string',
    		'email'  => 'required|email',
    		'mobile' => 'required|max:10|min:10',
    		'position' => 'required|',
    		'file' => 'required|mimetypes:application/pdf|max:1024'
    	]);

    	$file = "";

    	$filename = time().'.'.$request->file->extension();  
        $request->file->move(public_path('resumes'), $filename);
        $file = 'resumes/'.$filename;

    	$newuser = new AppliedUser();
    	$newuser->fullname = $request->fullname;
    	$newuser->email  = $request->email ;
    	$newuser->mobile  = $request->mobile ;
    	$newuser->position  = $request->position ;
    	$newuser->file_path  = $file ;
    	$newuser->save();
    	return back()->with('success','Your Are Applied Succesfully');

    	
    }

    public function appliedLits(){
    	$lists = AppliedUser::with(['joblist'])->orderBy('created_at','desc')->get();
    	return view('career.applied',compact('lists'));
    }

    public function adminindex(){

    	$lists = Career::orderBy('created_at','desc')->get();
    	return view('career.career',compact('lists'));

    }

    public function adminToggle($id){


        $job =  Career::findorFail($id);
        ($job->status) ? $job->status = 0 : $job->status = 1;
        $job->save();
        return back()->with('success','Status Changed');

    }

     public function adminstoreIndex(){

     		return view('career.add');
    	
    }

      public function adminstore(Request $request){

     	$request->validate([
     		'job_description' => 'required|string',
     		'job_title' => 'required'
     	]);
     	$job = new Career();
     	$job->job_title = $request->job_title;
     	$job->job_description = $request->job_description;
     	$job->save();
     	return redirect()->route('career.index.admin')->with('success',"Added Succesfully");
    	
    }

}
