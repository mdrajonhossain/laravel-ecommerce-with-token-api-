<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;

class brand_controller extends Controller
{
    function brandrout(){
      $brand = brand::all();
    	return view('admin.brand.brand',['brand'=>$brand]);
    }


    public function addbrandrout(Request $request){

    	$data = "";
      	$img = "";
	      if($request->hasfile('brandimage')){
	        $image = $request->file('brandimage');
	        $image_name = time().'.'.$image->getClientOriginalExtension();
	        $request->brandimage->move('brand/',$image_name);
	        $data = "http://192.168.0.104:3000/brand/".$image_name;
	        $img = $image_name;
	      }

	       $dat = new brand;
      	 $dat->name = $request->name;
      	 $dat->slug = str_slug($request->name);
      	 $dat->photo = $img;
      	 $dat->api_photo = $data;
      	 $dat->status = "1";
      	 $dat->is_popular = "1";
      	 $dat->save();
    	return redirect()->route('admin.brand');
    }
}
