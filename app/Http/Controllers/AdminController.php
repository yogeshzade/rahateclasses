<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\StudentProfile;
use App\Course;
use App\PaymentTransaction;
use App\Alumini;
use App\Faculty;
use Validator;
use App\StudentsNote;
use App\CourseClass;
use App\StudentFee;


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
       $totalcount = PaymentTransaction::where('payment_method',0)->where('payment_status',0)->count();
       return view('payments.index',compact('transactions','totalcount'));

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
        'student_name' => 'string',
        'enter_class' => 'required',
        ]);
        $imageName = time().'.'.$request->image_path->extension();  
        $request->image_path->move(public_path('images/toppers/'), $imageName);
        $testimdata = new Alumini();
        $testimdata->name = $request->student_name;
        $testimdata->class = $request->enter_class;
        $testimdata->desciption = $request->description;
        $testimdata->image_path = 'images/toppers/'.$imageName;
        $testimdata->save();
        return back()->with('success','Added Succesfully');
    }

    public function TestimonialsDelete(Alumini $id){

        $id->delete();
        return back()->with('success','DELETED!');

    }

    public function TeachersIndex(){
         $teachers = Faculty::all();
          return view('teachers.index',compact('teachers'));
    }

    public function TeachersCreate(){
               $sequenceno = Faculty::whereNotNull('sequence')->count();
               $sequenceno = $sequenceno + 1;
          return view('teachers.create',compact('sequenceno'));
    }

     public function TeachersStore(Request $request){
        $teacher = new Faculty();
         $request->validate([
        'image_path' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
        'teacher_name' => 'string|required',
        'designation' => 'required',
        'description' => 'required',
        'sequence' => 'required|unique:faculties|numeric'
        ]);

        $imageName = time().'.'.$request->image_path->extension();  
        $request->image_path->move(public_path('faculties/'), $imageName);


         $teacher->fullname = $request->teacher_name;
        $teacher->details = $request->description;
        $teacher->designation = $request->designation;
        $teacher->photo_url = 'faculties/'.$imageName;
        $teacher->sequence = $request->sequence;
        $teacher->save();

        return back()->with('success','ADDED SUCCESSFULLY!');
        
    }

    public function TeachersDelete(Faculty $id){

        $id->delete();
        return back()->with('success','DELETED SUCCESSFULLY');

    }

    public function TeachersEdit(Faculty $tid){
        return view('teachers.update',compact('tid'));
    }

    public function TeachersUpdate(Request $request,$tid)
    {
        $request->validate([

        'teacher_name' => 'string|required',
        'designation' => 'required',
        'description' => 'required',
        'sequence' => 'required|unique:faculties'
        ]);

        $update = Faculty::where('id',$tid)->first();
        $update->fullname = $request->teacher_name;
        $update->sequence = $request->sequence;
        $update->designation = $request->designation;
        $update->details = $request->description;
        $update->save();

        return redirect()->route('teachers.index')->with('success','Teacher Updated');
    }

    public function NotesIndex(){
        $notes = StudentsNote::all();
        return view('notes.index',compact('notes'));
    }
    public function NotesCreate(){
        return view('notes.create');
    }

    public function NotesStore(Request $request){

         $request->validate([

        'class_name' => 'string|required',
        'subject_name' => 'required|string',
        'topic_name' => 'required|string',
        'file_link' => 'required|string'
        ]);

         $notes = new StudentsNote();
         $notes->class_name = $request->class_name;
         $notes->subject_name = $request->subject_name;
         $notes->topic_name = $request->topic_name;
         $notes->file_link = $request->file_link;
         $notes->save();

         return back()->with('success','Notes Addded Succesfully');

    }
    public function NotesDelete(StudentsNote $id){
        $id->delete();
        return back()->with('success','DELETED!!!');

    }

    public function viewstudenthistory(int $id){
        $alltransactions =  PaymentTransaction::where('user_id',$id)->get();
        $userid = $id;
        $fees = StudentFee::where('user_id',$id)->get();
        if($fees->count() > 0){
            return view('payments.alltransactions',compact('alltransactions','fees'));
        }
        else{
            return back()->with('error','Student Not Applied For Any Course');
        } 
      //  $studentfeesinfo = ;
        
    }
}
