<?php

namespace App\Http\Controllers\Personel;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonelProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('personel.products')->with(
            ["products" => $products]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return view('personel.products')->with(
                ["product" => $product]
            );
        } else {
            return redirect('/personel/products');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
