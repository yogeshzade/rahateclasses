<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class AjaxController extends Controller
{
    //


    public function getImage(){

    }

    public function storeImage(Request $request){

    	$request->validate([
    		  'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
    	]);


    	if ($files = $request->file('image')) {
            
            $fileName =  "image-".time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('students', $fileName);
           

            return Response()->json([
                "image" => $fileName
            ], Response::HTTP_OK);
 
        }

    }
}
