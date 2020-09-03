<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $income = Transaction::where('transaction_sts', 'SUCCESS')->sum('transaction_ttl');
        $sales = Transaction::count();
        $items = Transaction::orderBy('id','DESC')->take(5)->get();
        $pie = [
            'pending' => Transaction::where('transaction_sts','PENDING')->count(),
            'success' => Transaction::where('transaction_sts','SUCCESS')->count(),
            'failed' => Transaction::where('transaction_sts','FAILED')->count()
        ];
        return view('pages.dashboard',compact('income','sales','pie','items'));
    }
}
