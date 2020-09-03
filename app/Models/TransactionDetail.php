<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = ['products_id','transactions_id'];

    protected $hidden = [

    ];

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
     
    public function product(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
