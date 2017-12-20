<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        switch ($request->user()->role_id) {
            case 1:
                return redirect('/admin');
                break;
            case 2:
                return redirect('/personel');
                break;
            case 3:
                return redirect('/customer');
                break;
            default:
                return redirect('/customer');
        }
    }
}
