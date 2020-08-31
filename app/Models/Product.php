<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','slug','type','price','description','quantity'];

    protected $hidden = [

    ];


    public function gallery(){
        //return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
