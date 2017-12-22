<?php

namespace App\Http\Controllers\Personel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonelController extends Controller
{
    public function index()
    {
        return view('personel.orders');
    }
}
