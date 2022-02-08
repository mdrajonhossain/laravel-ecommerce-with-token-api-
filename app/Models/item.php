<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\brand;
use App\Models\catagori;

use App\Models\chield_categori;

class item extends Model
{
    use HasFactory;

    public function brand(){
        return $this->hasOne(brand::class,'id','brand_id');
    }


    protected $fillable = [
        "category_id",
        "subcatagory_id",
        "childcategory_id",
        "tax_id",
        "brand_id",
        "name",
        "slug",
        "sku",
        "tags",
        "vedio",
        "sort_details",
        "specification_name",
        "specification_description",
        "is_specification",
        "details",
        "photo",
        "api_photo",
        "price",
        "discount_price",
        "previoust_price",
        "stock",
        "meta_keywords",
        "meta_description",
        "status",
        "is_type",
        "date",
        "file",
        "link",
        "file_type",
        "lincense_name",
        "lincense_key",
        "item_type",
        "thumbnail"
    ];




}



