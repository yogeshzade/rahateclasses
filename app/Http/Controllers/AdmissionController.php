<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function indexCalender(){
        $notifications = \App\ExamCalender::all();
        return view('calender.index',compact('notifications'));
    }

    public function createCalender(){
          return view('calender.create');
    }

    public function storeCalender(Request $request){

        $request->validate([

            'title' => 'required|string',
            'details' => 'required',
            'file' => 'file|max:10200',

        ]);
         $filepath = null;

        if($request->file)
        {
             $fileName = time().'.'.$request->file->extension();  
             $request->file->move(public_path('uploads'), $fileName);
             $filepath = "uploads/".$fileName;
        }

        $calender = new \App\ExamCalender();
        $calender->title = $request->title;
        $calender->details = $request->details;
        $calender->file_path =  $filepath;
        $calender->date = $request->date;
        $calender->status = 1;
        $calender->save();

        return back()->with('success','Notification Added');


    }

    public function deleteCalander($id){
        $calender =  \App\ExamCalender::findorFail($id);
        $calender->delete();
        return back()->with('error','Notification deleted');
    }

    public function toggleCourse ($id){

        $calender =  \App\ExamCalender::findorFail($id);
        ($calender->status) ? $calender->status = 0 : $calender->status = 1;
        return back()->with('success','Status Changed');

    }
}
