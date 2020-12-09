<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFee extends Model
{
    //

    protected $fillable = ['user_id','total_amount'];
}
