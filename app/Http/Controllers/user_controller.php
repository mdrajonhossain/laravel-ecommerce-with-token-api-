<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_controller extends Controller
{
    public function index(){
        return view('clint.pay');
    }
}
