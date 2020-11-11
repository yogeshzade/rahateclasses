<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Popup;

class WebsiteConfigration extends Controller
{
    //

    public function sliderindex(Request $request){
        $sliders = Slider::all();
        return view('sliders.index',compact('sliders'));
    }

    public function toggleslider($id){

        $slider = Slider::find($id);
        ($slider->status) ? $slider->status = 0 : $slider->status = 1;
        $slider->save();
        return back()->with('success','Status Changed');


    }

    public function slidercreate (Request $request){
        return view('sliders.create');

    }

    public function sliderStore(Request $request){

       // dd($request->image_path);

        $request->validate([
            'image_path' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        $imageName = time().'.'.$request->image_path->extension();  
       
        $request->image_path->move(public_path('images'), $imageName);
        $imagepath = new Slider();
        $imagepath->image_path = "images/".$imageName;
        $imagepath->save();
        return back()->with('success','Uploded Succesfully');

    }

    public function popupCreate(){
        $data = Popup::first();
        //dd($data);
        return view('popup.create',compact('data'));

    }

    public function popupStore(Request $request){

        $request->validate([
        'image_path' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        $imageName = time().'.'.$request->image_path->extension();  
        $request->image_path->move(public_path('images'), $imageName);

        Popup::truncate();

        $imagepath = new Popup();

        $imagepath->delete();
        $imagepath->img_path = "images/".$imageName;
        $imagepath->save();
        return back()->with('success','Uploded Succesfully');


    }

    public function togglePopup($id){

        $popup = Popup::find($id);
        ($popup->status) ? $popup->status = 0 : $popup->status = 1;
        $popup->save();
        return back()->with('success','Status Changed');

    }

  

    public function inquiryIndex(){
        $inquiries = \App\Inquiry::orderBy('created_at','DESC')->get();
        return view('inquiries.index',compact('inquiries'));
    }

    public function inquiryRead($id){

        $inquriyview = \App\Inquiry::findOrFail($id);
        $inquriyview->status = 0;
        $inquriyview->save();
        

       return  view('inquiries.view',compact('inquriyview'));

    }

    public function DeleteInquiry($id){

        $delete = \App\Inquiry::findOrFail($id);
        $delete->delete();
        return redirect()->route('inquiry.index')->with('success','Deleted');

    }

      public function CareerIndex(){
        return "Career index working";
    }
}
