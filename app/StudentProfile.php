<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    //

   public function userProfile(){

        return $this->belongsTo('App\User', 'user_id', 'id');

    }

     public function studentCourse(){

        return $this->belongsTo('App\Course', 'course_id', 'id');

    }

      public function studentClass(){

        return $this->belongsTo('App\CourseClass', 'class_id', 'id');

    }

}
