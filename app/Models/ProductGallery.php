<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = ['products_id','photo','is_default'];

     public function product(){
        return $this->belongsTo(Product::class,'products_id','id');
    }

    public function getPhotoAttribute($value){
        return url('storage/'. $value);
    }
}
