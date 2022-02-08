<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\sub_catagory_controller;
use App\Http\Controllers\sub_sub_catagory_controller;
use App\Http\Controllers\brand_controller;
use App\Http\Controllers\slider_controller;
use App\Http\Controllers\user_setting_controller;
use App\Http\Controllers\items_controller;
use App\Http\Controllers\public_catagory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {	 
    return view('welcome');
});



Auth::routes();



Route::group(['prefix'=>'admin', 'middleware'=>['is_admin','auth']],function(){
	Route::get('/dashboard', [admin_controller::class, 'index'])->name('admin.dashboard');
	
	// Catagory
	Route::get('/add_catagory', [admin_controller::class, 'addcatagory'])->name('admin.add_catagory');	
	Route::post('/catagoryadddb', [admin_controller::class, 'catagoryaddmethod'])->name('admin.catagoryadddb');
	

	// sub Catagory
	Route::get('/addsub_catagory', [sub_catagory_controller::class, 'subcatagoryadd'])->name('admin.addsub_catagory');
	Route::post('/subcatagoryadddb', [sub_catagory_controller::class, 'subcatagoryaddmethod'])->name('admin.subcatagoryadddb');



	// sub sub_Catagory
	Route::get('/add_sub_subcatagory', [sub_sub_catagory_controller::class, 'addsubsubcatagory'])->name('admin.add_sub_subcatagory');
	Route::post('/sub_subcat_add', [sub_sub_catagory_controller::class, 'subsubcatadd'])->name('admin.sub_subcat_add');


	// brand route
	Route::get('/brand', [brand_controller::class, 'brandrout'])->name('admin.brand');
	Route::post('/addbrand', [brand_controller::class, 'addbrandrout'])->name('admin.addbrand');
	// End brand route



	// slider route
	Route::get('/slider', [slider_controller::class, 'sliderrout'])->name('admin.slider');
	Route::post('/addsliderdb', [slider_controller::class, 'addslider'])->name('admin.addsliderdb');
	// End slider route


	// items route
	Route::get('/items', [items_controller::class, 'itemsrout'])->name('admin.items');	
	Route::post('/items_add', [items_controller::class, 'itemaddpost'])->name('admin.items_add');
	
	// End items route
	


	// user setting route
	Route::get('/user_setting', [user_setting_controller::class, 'usersetting'])->name('admin.user_setting');
	Route::get('/user_proces/{id}', [user_setting_controller::class, 'userprocesssetting'])->name('admin.user_proces');
	// End user setting route




	// item
	Route::get('/manage_item', [admin_controller::class, 'manageitem'])->name('admin.manage_item');
	
});







Route::group(['prefix'=>'user', 'middleware'=>['is_user','auth']],function(){
	Route::get('/user', [user_controller::class, 'index'])->name('user.pay');
});





Route::get('catagory/{slug}', [public_catagory::class, 'publiccatagory']);
Route::get('singleitem/{id}', [public_catagory::class, 'singleitemroute']);
Route::get('addcard', [public_catagory::class, 'addcardroute']);



// api create
