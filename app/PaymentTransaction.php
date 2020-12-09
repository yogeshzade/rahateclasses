<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PaymentTransaction extends Model
{
    //

      public function user(){

        return $this->belongsTo('App\User', 'user_id', 'id');

    }

      public function studentProfile(){

        return $this->belongsTo('App\StudentProfile', 'user_id', 'user_id');

    }

    public function getCreatedAtAttribute($date) {
    
    return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y');

	}

	 public function getUpdatedAtAttribute($date) {
    
    return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y');

	}





}
