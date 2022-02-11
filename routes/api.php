<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\items_controller;
use App\Http\Controllers\slider_controller;
use App\Http\Controllers\public_catagory;
use App\Http\Controllers\ApiloginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/sliderroutapi', [slider_controller::class, 'sliderroutapi']);
Route::get('/cataroutapi', [admin_controller::class, 'cataapi']);
Route::get('/getitems', [items_controller::class, 'apiitems']);



Route::get('/apibrand', [public_catagory::class, 'brandroute']);

Route::middleware(['auth:sanctum'])->group(function(){
	Route::get('/data', [ApiloginController::class, 'routeabc']);    
	Route::post('/logout', [ApiloginController::class, 'logout']);
});


Route::post('/caproduct', [ApiloginController::class, 'catitem']);

Route::post('/login', [ApiloginController::class, 'index']);

