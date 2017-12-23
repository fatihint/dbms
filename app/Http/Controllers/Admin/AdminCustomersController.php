<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminCustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::User()->role_id!=1) {
            return redirect('/home');
        }
        else {
            $customers = User::where('role_id', 3)->get();

            return view('admin.customers')->with(
                ["customers" => $customers]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::User()->role_id!=1) {
            return redirect('/home');
        }
        else {
            $customer = User::where('role_id', 3)->where('id',$id);

            // siparisleriyle ilgili sorgu gelecek.

            if ($customer) {
                return view('admin.customers')->with(
                    ['customer' => $customer]
                );
            } else {
                return redirect('/admin/customers');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
