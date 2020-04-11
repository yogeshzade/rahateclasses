<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeValidation;
use App\Employee;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
         return view("employee.index",compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("employee.new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeValidation $request)
    {
       $employee = new Employee();
       $employee->employee_name = $request->fullname;
       $employee->employee_code = $request->employee_code;
       $employee->salary = $request->salary;
       $employee->time_in = $this->convertTime($request->time_in); 
        $employee->time_out = $this->convertTime($request->time_out); 
        $employee->no_of_holidays = $request->holidays;
        $employee->type = $request->paymenttype;
         $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('images'), $imageName);

        $employee->image_url = 'images'.$imageName;
        
        $employee->save();
       return back()->with('success', 'Employee Added Succesfully.');

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
        $employee = Employee::findOrFail($id);
        $employee->delete();
              return back()->with('success', 'Employee Deleted Succesfully.');
    }

    private function convertTime($time){
        
    $time = date( "H:i:s", strtotime( $time ) );
    return $time;
    }
}
