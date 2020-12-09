<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedUser extends Model
{
    //

    public function joblist(){
    	return $this->belongsTo('App\Career','position','id');
    }
}
