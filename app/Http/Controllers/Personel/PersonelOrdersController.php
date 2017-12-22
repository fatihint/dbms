<?php

namespace App\Http\Controllers\Personel;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonelOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('personel.orders')->with(
            ["orders" => $orders]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);

        if ($order) {
            return view('personel.orders')->with(
                ["order" => $order]
            );
        } else {
            return redirect('/personel/orders');
        }
    }

    public function accept(Request $request)
    {
        $order = Order::find($request->id);
        $order->status_id = 3;
        $order->updated_at = date('Y-m-d H:i:s');
        $order->save();
        return view('personel.accept')->with(
            ['id' => $request->id]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
