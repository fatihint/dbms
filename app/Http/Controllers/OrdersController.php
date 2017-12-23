<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
//
//        foreach ($orders->products as $product) {
//            return $product->pivot->amount;
//        }
//        die;

        return view('staff.orders')->with(
            ['orders' => $orders]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);

        if (!$order) {
            if (Auth::user()->role_id == 1) {
                return redirect('/admin/orders');
            } else {
                return redirect('/personel/orders');
            }
        }

        return view('staff.orders')->with(
            ['order' => $order]
        );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $order->status_id = $request->status_id;
        $order->updated_at = date('Y-m-d H:i:s');
        $order->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
    }
}
