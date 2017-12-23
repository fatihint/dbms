<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::User()->role_id !=1) {
            return redirect('/home');
        }
        else {
            return redirect('/profile');
        }

    }

    public function newProduct()
    {
        if (Auth::User()->role_id!=1) {
            return redirect('/home');
        }
        else
            return view('admin.new-product');
    }

    public function newPersonel()
    {
        if (Auth::User()->role_id!=1) {
            return redirect('/home');
        }
        else
            return view('admin.new-personel');
    }
}
