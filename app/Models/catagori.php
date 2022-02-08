<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subcategorie;


class catagori extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "photo",
        "api_photo",
        "meta_keywords",
        "meta_description",
        "status",
        "is_feature",
        "serial"
    ];

    public function subcategorie(){
        return $this->hasMany(subcategorie::class,'category_id','id');
    }





}



