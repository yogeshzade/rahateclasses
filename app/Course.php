<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ['course_name','class','board','total_fees','include_gst','fees_structure'];
}
