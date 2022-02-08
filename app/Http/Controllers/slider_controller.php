<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagori;
use App\Models\slider;

class slider_controller extends Controller
{
    public function sliderrout(){
    	$slider = slider::all();
    	return view('admin.slider.slider',["slider"=>$slider]);
    }



     public function addslider(Request $request){
      $data = "";
      $img = "";
      if($request->hasfile('image')){
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('slider/',$image_name);
        $data = "http://127.0.0.1:8000/slider/".$image_name;
        $img = $image_name;
      }

      $dat = new slider;
      $dat->title = $request->title;      
      $dat->photo = $img;
      $dat->api_photo = $data;      
      $dat->link = $request->link;
      $dat->description = $request->description;      
      $dat->save();
      return redirect()->route('admin.slider');
   }


// Api create
   public function sliderroutapi(){
      $slider = slider::all();
      return response()->json($slider);       
    }









}
