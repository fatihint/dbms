<?php

namespace App\Http\Controllers\Personel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonelOrdersController extends Controller
{
    public function index()
    {
        return view('personel.orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('personel.orders')->with(
            ['id' => $id]
        );
    }

    public function accept(Request $request)
    {

        return view('personel.accept')->with(
            ['id' => $request->id]
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
