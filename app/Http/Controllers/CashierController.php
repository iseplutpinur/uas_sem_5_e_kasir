<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index()
    {
        return view('cashier.index', [
            'title' => 'Kasir',
            'products' => Product::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'quantity.*' => ['required'],
            'product_id.*' => ['required']
        ], [
            'quantity.*.required' => 'Jumlah produk tidak boleh kosong.',
            'product_id.*.required' => 'Produk tidak boleh kosong.'
        ]);

        $transaction_id = Transaction::create([
            'time' => now()
        ])->id;
        foreach ($request->product_id as $key => $value) {
            TransactionDetail::create([
                'transaction_id' => $transaction_id,
                'product_id' => $value,
                'quantity' => $request->input('quantity')[$key]
            ]);
        }
        $totalPrice = 0;
        $transactionDetails = TransactionDetail::where('transaction_id', $transaction_id)->get();
        foreach ($transactionDetails as $item) {
            $totalPrice += $item->product->price * $item->quantity;
        }
        return response()->json(['total' => $totalPrice, 'totalFormat' => number_format($totalPrice)], 200);
    }
}
