<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminCustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id !=1 ) {
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
            $customer = User::where('role_id', 3)->where('id',$id)->get()->first();

            // siparisleriyle ilgili sorgu gelecek.
            if ($customer) {

                $path = NULL;

                if(!is_null($customer->image)) {
                    if(Storage::disk('local')->exists('public/user-images/' . $customer->image)){
                        $path = asset('storage/user-images/' . $customer->image);
                    } else {
                        $path = $customer->image;
                    }
                }

                return view('admin.customers')->with(
                    ['customer' => $customer, 'path' => $path]
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
