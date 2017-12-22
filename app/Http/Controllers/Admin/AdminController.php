<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('layouts.panel');
    }

    public function newProduct()
    {
        return view('admin.new-product');
    }

    public function newPersonel()
    {
        return view('admin.new-personel');
    }
}
