<?php
use App\Models\brand;
use App\Models\catagori;
use App\Models\slider;
use App\Models\item;

function companyname (){
	$categories = brand::all();
	return $categories;
}

function addcard(){
	$add = "addCard";
	return $add;
}


function cat(){
	$catagori = catagori::all();
	return $catagori;
}

function slaid(){
	$slid = slider::all();
	return $slid;
}

function item(){
	$product = item::all();
	return $product;
}










?>
