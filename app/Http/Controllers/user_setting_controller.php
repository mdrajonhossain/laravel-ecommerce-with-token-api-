<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagori;
use App\Models\User;

use Illuminate\Support\Facades\DB;




class user_setting_controller extends Controller
{
    public function usersetting(){
    	$all_user = User::all();
    	return view('admin.userprofile.userset',["all_user"=>$all_user]);
    	// return $user;
    }

    public function userprocesssetting($id){

		if(auth()->user()->id != $id){
			 $roll = DB::table('users')->find($id)->roll;			
			 if($roll == "admin"){			
			 	DB::table('users')->where('id',$id)->update(['roll' => "user"]);
			 }
			 if($roll == "user"){			
			 	DB::table('users')->where('id',$id)->update(['roll' => "admin"]);
			 }
		}			
    	return redirect('admin/user_setting');
    }

}
