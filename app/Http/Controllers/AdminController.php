<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\StudentProfile;
use App\Course;
use App\PaymentTransaction;
use App\Alumini;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     public function Studentindex(){

        $studentslists = studentprofile::with(['userProfile','studentCourse','studentClass'])->orderBy('created_at','desc')->get();
        // return $studentslists;

        return view('students.index',compact('studentslists'));
        
    }

    public function ApproveAdmission($id){

        $student = studentprofile::where('id',$id)->firstOrFail();
        $student->status = 1;
        $student->save();
        return back()->with('success','Application Approved');
        
    }

    public function ViewAdmission($id){
         $profileinfo = studentprofile::where('id',$id)
                        ->with(['userProfile','studentCourse','studentClass'])->orderBy('created_at','desc')->firstOrFail();

                        return view('home.adminformpreview',compact('profileinfo'));

    }

    public function pendingPayments(){
       $transactions = PaymentTransaction::where('payment_method',0)->where('payment_status',0)
                        ->with(['user','studentProfile'])
                        ->get();
       //return $transactions;

       return view('payments.index',compact('transactions'));

    }

    public function TestimonialsIndex(){
        $testimonials = Alumini::all();
        return view('testimonials.index',compact('testimonials'));
    }

     public function TestimonialsCreate(){
        return view('testimonials.create');
    }

    public function TestimonialsStore(Request $request){
         $request->validate([
        'image_path' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
        'student_name' => 'required',
        'enter_class' => 'required',
        'description' => 'required'
        ]);
        $imageName = time().'.'.$request->image_path->extension();  
        $request->image_path->move(public_path('images/toppers'), $imageName);
        $testimdata = new Alumini();
        $testimdata->name = $request->student_name;
        $testimdata->class = $request->enter_class;
        $testimdata->desciption = $request->description;
        $testimdata->image_path = 'images/toppers'.$imageName;
        $testimdata->save();
        return back()->with('success','Added Succesfully');
    }
}
