<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

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

        try {
            $request->file('image')->storeAs('public/menu-images', $request->name . "." .$request->image->extension());
        } catch (Exception $e) {
            dd($e);
        }

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->name . "." . $request->image->extension();
        $product->user_id = Auth::user()->id;
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();

        $message = "Urun basariyla eklendi";

        return view('admin.products')->with(
            ['message' => $message, 'product' => $product]
        );

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

        $exists = Storage::disk('local')->exists('public/menu-images/'. $product->name .'.png');

        if ($exists) {
            $ext = '.png';
        } else {
            $ext = '.jpeg';
        }

        $path = asset('storage/menu-images/' . $product->name . $ext);

        if ($product) {
            return view('admin.products')->with(
                ["product" => $product, "path" => $path]
            );
        } else {
            return redirect('/admin/products');
        }

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

        $message = "Urun basariyla guncellendi";

        return view('admin.products')->with(
            ['message' => $message, 'product' => $product]
        );
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
        $message = "Urun basariyla silindi";

        return view('admin.products')->with(
            ['message' => $message]
        );

    }
}
