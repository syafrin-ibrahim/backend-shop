<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controller\API\ResponseFormatter;
class ProductController extends Controller
{
    public function all(Request $request){
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $slug = $request->input('slug');
        $name = $request->input('name');
        $type = $request->input('type');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        if($id){
            $product = Product::with('gallery')->find($id);
            if($product){
                return ResponseFormatter::success($product, 'Data Produk Berhasil Diambil');
            }else{
                return ResponseFormatter::error(null, 'Data Produk Tidak Ada', 404);
            }
        }

        if($slug){
            $product = Product::with('gallery')->where('slug',$slug)->first();
            if($product){
                return ResponseFormatter::success($product, 'Data Produk Berhasil Diambil');
            }else{
                return ResponseFormatter::error(null, 'Data Produk Tidak Ada', 404);
            }
        }
        
        $product = Product::with('gallery');
        
        if($name){
            $product->where('name','like', '%'. $name . '%');
        }

        if($type){
            $product->where('type', 'like', '%'. $type . '%');
        }

        if($price_from){
            $product->where('price', '>=', $price_from);
        }

        if($price_to){
            $product->where('price', '<=', $price_to);
        }   

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data List Produk Berhasil DiAmbil'
        );
    }
}
