<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
   public function getTransaction(Request $request, $id){
        $product = Transaction::with('detail.product')->find($id);

        if($product){
            return ResponseFormatter::success($product, 'Data Transaksi berhasil diambil');
        }else{
            return ResponseFormatter::error(null, 'Data Transaksi Tidak Ada', 404);
        }
   
    }
}
