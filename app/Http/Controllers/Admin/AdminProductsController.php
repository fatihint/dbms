<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class AdminProductsController extends Controller
{
    /**
     * Insert new product
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if (!isset($request->image)) {
            return redirect('/admin/products/new')->with('message', 'Urun gorseli secilmedi !');
        }

        $maxId = DB::table('products')->max('id');
        $imageName = $maxId + 1;

        try {
            $request->file('image')->storeAs('public/menu-images', $imageName . "." .$request->image->extension());
        } catch (Exception $e) {
            dd($e);
        }

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $imageName . "." . $request->image->extension();
        $product->user_id = Auth::user()->id;
        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();

        return redirect('/admin/products/' . $product->id)->with('message',"Urun basariyla eklendi");
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

        // Request'te image geldiyse, eski resmi sil, yenisini kaydet
        if (isset($request->image)) {
            Storage::delete('public/menu-images/' . $product->image);
            $request->file('image')->storeAs('public/menu-images', $id . "." .$request->image->extension());
        }

        $product->save();

        return redirect('/admin/products/' . $product->id)->with('message',"Urun basariyla guncellendi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        $message = "Urun basariyla silindi";

        return view('staff.products')->with(
            ['message' => $message]
        );

    }
}
