<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->take(5)->get();
        return view('pages.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.product_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        $request->validate([
            'title' => 'required',
            'qty' => 'required | numeric',
            'amount' => 'required | numeric',
        ]);

        $data = array_merge($request->post(), ['user_id' => Auth::id()]);

        Product::create($data);

        return redirect()->route('products.index')->with('success','Product has been created successfully.');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('pages.product_edit', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        
        $request->validate([
            'title' => 'required',
            'qty' => 'nullable | integer | min:0',
            'amount' => 'required | numeric | min:0',
        ]);

        $qty = $request->qty + $product->qty;

        $product->title = $request->title;
        $product->qty = $qty;
        $product->amount = $request->amount;

        $product->save();

        return redirect()->route('products.index')->with('success','Product has been updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
