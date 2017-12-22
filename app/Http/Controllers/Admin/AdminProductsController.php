<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminProductsController extends Controller
{
    /**
     * Show all products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();

        return view('admin.products')->with(
            ["products" => $products]
        );

    }

    /**
     * Insert new product
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->user_id = Auth::user()->id;
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified product with id.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = Product::find($id);

        if ($product) {
            return view('admin.products')->with(
                ["product" => $product]
            );
        } else {
            return redirect('/admin/products');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
    }
}
