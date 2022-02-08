<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\item; 


class ApiloginController extends Controller{

    
    public function index(Request $request){

        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $token = Auth::user()->createToken($request->email)->plainTextToken;
            
            return response()->json([
            	"message" => "Successfully",
            	"token" => $token,
            	"data" => Auth::user()],200);
        }
        else{
            return response()->json(["error message" => "User Not found!!! Please try again!"], 404);
        }
    }

    public function logout(){
        auth()->user()->tokens()->delete();


        return response()->json([
            "message" => "Logout Successfully!"
        ], 200);
    }






    public function routeabc(){
        $item = item::all();

        return response()->json([
            "message" => "User Successfully!",
            "data" => $item
        ], 200);
    }




}
