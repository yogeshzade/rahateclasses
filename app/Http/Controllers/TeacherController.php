<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function index($first, $second)
    {
        return view($first.'.'.$second);
    }
}
