<?php

namespace App\Http\Controllers\Personel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PersonelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->role_id != 2) {
            return redirect('/home');
        } else {
            return view('layouts.panel');
        }
    }
}
