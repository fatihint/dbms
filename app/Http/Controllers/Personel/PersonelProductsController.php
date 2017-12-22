<?php

namespace App\Http\Controllers\Personel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonelProductsController extends Controller
{
    public function index()
    {
        return view('personel.products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('personel.products')->with(
            ['id' => $id]
        );
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
