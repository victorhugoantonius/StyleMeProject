<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(){
        $transactions = Transaction::where('user_id', Auth::user()->id)->where('checkout_status','yes')->get();

        return view('history',compact('transactions'),[
            'title' => 'History',
        ]);
    }

    public function detail($id){

        $transaction = Transaction::where('id', $id)->first();
        $transaction_details = TransactionDetail::where('transaction_id', $transaction->id)->get();

        return view('historyDetail',compact('transaction','transaction_details'),[
            'title' => 'HistoryDetail'
        ]);
    }
}
