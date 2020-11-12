<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Installment;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('course.create');
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
    //  dd($request);
        $data = array(
            'course_name' => $request->course_name,
            'class'=> $request->class_name ,
            'board'=> $request->board,
            'total_fees'=> $request->total_fees,
            'include_gst' => 1,
            'fees_structure' => $request->fees_data,
        );
        $store = Course::create($data);
       if($store){
           return redirect()->route('installment.create')->with('success','Course Created Succesfully!Please Add Installments');
       }
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

    public function toggleCoursestatus($id){

        $course = Course::find($id);
        ($course->status) ? $course->status = 0 : $course->status = 1;
        $course->save();
        return back()->with('success','Status Changed');

    }

    public function indexInstallment(){
        $installments = Course::with('installments')->orderBy('created_at','desc')->get();
       // dd($installments);
        return view('course.installment_index',compact('installments'));
    }

     public function createInstallment(){
          $courses = Course::all();
        return view('course.installment_create',compact('courses'));
    }

    public function getInstallmentNo(Request $request){

        $installmen_no = Installment::where('course_id',$request->course_id)->count();
        return $installmen_no;

    }

      public function storeInstallment(Request $request){
        $request->validate([
            'course_id' => 'required',
            'installment_no' => 'required',
            'installments_name' => 'required|string',
            'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'days_after_admission' => 'required'
        ]);
        $installment = new Installment();
        $installment->course_id = $request->course_id;
        $installment->installment_no =  $request->installment_no;
        $installment->installments_name =  $request->installments_name;
        $installment->amount =  $request->amount;
        $installment->days_after_admission =   $request->days_after_admission;
        $installment->save();
        return back()->with("success","Installment Added! Your Can Add More Or Leave For Now");    
    }


     public function getInstallments(int $id){
      $installments = Installment::where('course_id',$id)->get();
        return view('course.installment_view',compact('installments'));
     }


 
}