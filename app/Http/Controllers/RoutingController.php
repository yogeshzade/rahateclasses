<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Slider;
use App\User;
use App\Inquiry;
use App\Popup;
use App\Course;


class RoutingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::where('status',1)->count();
        $students = User::where('type',1)->where('is_admin',0)->count();
        $courses = Course::all()->count();
        $inquiry = Inquiry::where('status',1)->count();
        return view('dashboard',compact('sliders','students','courses','inquiry'));
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root($first)
    {
        return view($first);
    }

    /**
     * second level route
     */
    public function secondLevel($first, $second)
    {        
        return view($first.'.'.$second);
    }

    /**
     * third level route
     */
    public function thirdLevel($first, $second, $third)
    {
        return view($first.'.'.$second.'.'.$third);
    }

    /**
     * Logout user
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
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
}
