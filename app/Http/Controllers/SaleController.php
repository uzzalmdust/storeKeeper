<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    function transaction(Request $request)
    {
        $products = Product::all();
        $order = $request->session()->get('items') ?: [];
        return view('pages.transaction', compact('products', 'order'));
    }

    function addItemOnSession(Request $request)
    {

        $product = Product::find($request->id);
        $items = session()->get('items', []);

        if (isset($items[$request->id])) {
            $items[$request->id]['qty']++;
        } else {
            $items[$request->id] = [
                "title" => $product->title,
                "qty" => 1,
                "amount" => $product->amount
            ];
        }

        session()->put('items', $items);
        return redirect()->route('transaction');
    }

    function updateItemOnSession(Request $request)
    {

        if ($request->id && $request->qty) {
            $items = session()->get('items');
            $items[$request->id]["qty"] = $request->qty;
            session()->put('items', $items);
        }
        return redirect()->route('transaction');
    }

    function deleteItemOnSession(Request $request)
    {

        if ($request->id) {
            $items = session()->get('items');
            if (isset($items[$request->id])) {
                unset($items[$request->id]);
                session()->put('items', $items);
            }

        }
        return redirect()->route('transaction');
    }

    function order(Request $request)
    {


        $request->validate([
            'client' => 'required',
            'contacts' => 'required',
        ]);

        $items = session()->get('items');
        $result = [];
        $amount = 0;
        foreach ($items as $val) {

            $amount += $val['qty'] * $val['amount'];
        }

        $id = DB::table('sales')->insertGetId(
            ['client' => $request->client, 'contacts' => $request->contacts, 'amount' => $amount, 'user_id' => 1]
        );

        foreach ($items as $key => $val) {
            $result[] = [
                "qty" => $val['qty'], "amount" => $val['qty'] * $val['amount'], "product_id" => $key, "sale_id" => $id
            ];

        }

        DB::table('sale_items')->insert($result);
       // unset($items);
        $request->session()->forget('items');
        return redirect()->route('transaction');
    }
}
