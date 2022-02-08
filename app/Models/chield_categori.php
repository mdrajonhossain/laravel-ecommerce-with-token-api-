<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\catagori;
use App\Models\subcategorie;
use App\Models\item;

class chield_categori extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
   		"slug",
   		"category_id",
   		"subcatagory_id",
   		"status"
    ];

    public function ccatagori(){
        return $this->hasOne(catagori::class,'id','category_id');
    }

    public function ssubcategorie(){
        return $this->hasOne(subcategorie::class,'id','category_id');
    }

    public function product(){
        return $this->hasMany(item::class,'childcategory_id','id');
    }
}
