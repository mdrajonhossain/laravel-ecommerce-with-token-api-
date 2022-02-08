<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagori;
use App\Models\subcategorie;
use App\Models\chield_categori;
use App\Models\brand;
use App\Models\item;



class items_controller extends Controller
{
    public function itemsrout(){
    	$catagory = catagori::all();
    	$sub_catagory = subcategorie::all();
    	$sub_sub_cat = chield_categori::all();
    	$brand_name = brand::all();

    	return view("admin.item.item_add",["cat"=>$catagory, "sub_cat"=>$sub_catagory, "sub_sub_cat"=>$sub_sub_cat, "brand"=>$brand_name]);
    }


    public function itemaddpost(Request $request){

		// return $request->all();
	// 	$request->validate([
	// 		'name' => 'required',
	// 		'prduct' => 'required',
	// 		'cat_id' => 'required',
	// 		'sub_cat_id' => 'required',
	// 		'sub_sub_cat_id' => 'required',
	// 		'brand_id' => 'required',
	// 		'dis_price' => 'required',
	// 		'pre_price' => 'required',
	// 		'meta_keyword' => 'required',
	// 		'details' => 'required'
	// 	],
	// 	[
	// 		'name.required'=>"name error"
	// 	]
	// );
	    	$data = "";
	        $img = "";
	      if($request->hasfile('prduct')){
	        $prduct = $request->file('prduct');
	        $product_image_name = time().'.'.$prduct->getClientOriginalExtension();
	        $request->prduct->move('product_image/',$product_image_name);
	        $data = "http://192.168.0.104:3000/product_image/".$product_image_name;
	        $img = $product_image_name;
	      }


        $data = [
	      'category_id' => $request->cat_id,
	      'subcatagory_id' => $request->sub_cat_id,
	      'childcategory_id' => $request->sub_sub_cat_id,
	      'brand_id' => $request->brand,
	      'name' => $request->name,
	      'slug' => str_slug($request->name),
	      'details' => $request->details,
	      'photo' => $img,
	      'api_photo' => $data,
	      'discount_price' => $request->dis_price,
	      'previoust_price' => $request->pre_price,
	      'stock' => $request->stock,
	      'meta_keywords' => $request->meta_keyword,
	      'meta_description' => $request->details,
	      'link' => $request->link,
        ];

        item::create($data);
	    return redirect()->route('admin.items')->with("item_insert","insert successfully");
    }



// create api 
     public function apiitems(){
    	$item = item::all();    	
    	return response()->json($item);
    }




}
