<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagori;
use App\Models\item; 
use App\Models\brand;



class public_catagory extends Controller
{

	
    // public function publiccatagory($slug){    	 
    // 	$id = catagori::where('slug', $slug)->first('id');
    // 	$flights = item::where("category_id", $id->id)->get();	
    // 	return view('catagori_item', ["cataitem"=>$flights]);
    // }


    public function singleitemroute($id){
    	$single_data = item::where('id', $id)->first();    	
    	return view('single_item', ["data"=> $single_data]);    	
    }


    public function addcardroute(){
        
        return view('addcard_item');
    }


// create api
   


    public function brandroute(Request $request){               
        $brand = brand::all();
        return response()->json($brand);
    }








}
