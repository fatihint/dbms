<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Show all products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();

        return view('staff.products')->with(
            ["products" => $products]
        );

    }

    /**
     * Display the specified product with id.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = Product::find($id);

        if (!$product) {
            if (Auth::user()->role_id == 1) {
                return redirect('/admin/products');
            } else {
                return redirect('/personel/products');
            }
        }


        $path = asset('storage/menu-images/' . $product->image);

        return view('staff.products')->with(
            ["product" => $product, "path" => $path]
        );
    }
}
