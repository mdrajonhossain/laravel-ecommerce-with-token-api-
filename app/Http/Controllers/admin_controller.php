<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagori;


class admin_controller extends Controller
{
  public function index(){
	return view('admin.admin');
   }

   public function addcatagory(){
      $cat = catagori::all();
      return view('admin.catagory.add_catagory',["cat"=>$cat]);

   }

   public function catagoryaddmethod(Request $request){

        $data = "";
        $img = "";

      if($request->hasfile('image')){
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image/',$image_name);
        $data = "http://192.168.0.104:3000/image/".$image_name;
        $img = $image_name;
      }

      $dataa = new catagori;
      $dataa->name = $request->name;
      $dataa->slug = str_slug($request->name);
      $dataa->photo = $img;
      $dataa->api_photo = $data;
      $dataa->meta_keywords = $request->metakeywords;
      $dataa->meta_description = $request->metadescription;
      $dataa->status = "asdfasdf";
      $dataa->is_feature = "asdfasdf";
      $dataa->serial = "1";
      $dataa->save();

      return redirect()->route('admin.add_catagory')->with("update","Successfully insert");
   }



   public function manageitem(){
     return view('admin.manage_item');
   }

   public function managebrand(){
     return view('admin.manage_brand');
   }




// create api
public function cataapi(){
      $cat = catagori::all();
      return response()->json($cat);

   }


}




