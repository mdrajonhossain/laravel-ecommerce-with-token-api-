<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagori;
use App\Models\subcategorie;
use App\Models\chield_categori;

class sub_sub_catagory_controller extends Controller
{
  
   public function addsubsubcatagory(){
   		$catagory = catagori::all();
   		$sub_catagory = subcategorie::all();
         $subsubcat = chield_categori::with('ccatagori','ssubcategorie')->get();
	  

         return view('admin.childcatagory.childcatagoryadd',["cat"=>$catagory,"subcat"=>$sub_catagory,"subsubcata"=>$subsubcat]);

         // return $subsubcat;
   }

   public function subsubcatadd(Request $request){
   		$data = new chield_categori;
   		$data->name = $request->name;
   		$data->slug = str_slug($request->name);
   		$data->category_id = $request->cat;
   		$data->subcatagory_id = $request->subcat;
   		$data->status = "1"; 
   		$data->save();
         return redirect()->route('admin.add_sub_subcatagory');   		
   }

}
