<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['uuid','name','email','number','address','transaction_ttl','transaction_sts'];

    protected $hidden = [

    ];

    public function detail(){
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
