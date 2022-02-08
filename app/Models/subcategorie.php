<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\catagori;
use App\Models\chield_categori;


class subcategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "category_id",
        "status"
    ];

    public function catagori(){
        return $this->hasOne(catagori::class,'id','category_id');
    }
    

    public function chield_categori(){
        return $this->hasMany(chield_categori::class,'subcatagory_id','id');
    }
}
