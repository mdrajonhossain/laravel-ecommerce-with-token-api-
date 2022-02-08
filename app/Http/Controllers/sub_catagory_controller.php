<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagori;
use App\Models\subcategorie;



class sub_catagory_controller extends Controller
{
    
 
    public function subcatagoryadd(){
    	$catagory = catagori::all();
      $sub_cat = subcategorie::with('catagori')->get();
    return view('admin.sub-catagory.sub_catagory_add',["cat"=>$catagory, "sub_cat" => $sub_cat]);
    // return $sub_cat;
   }


   public function subcatagoryaddmethod(Request $request){
   		$dataa = new subcategorie;
      	$dataa->name = $request->name;
      	$dataa->slug = str_slug($request->name);
      	$dataa->category_id = $request->cata_id;
      	$dataa->status = "1";
      	$dataa->save();	
	  return redirect('admin/addsub_catagory');
   }




    
}
