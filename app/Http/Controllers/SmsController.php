<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use DateTime;
use Carbon;
use App\Order;
use Illuminate\Support\Facades\DB;
class SmsController extends Controller
{
    public function index(Request $request)
    {
        $date = getdate();
        $dt = Carbon::now();
        $tarih = $dt->toDateString();
        $bugun = $date['year'].'-'.$date['mon'].'-'.$date['mday'];
        $orders = DB::table('orders')->select('price')
                                     ->whereDay('created_at',$date['mday'])
                                     ->whereMonth('created_at',$date['mon'])
                                     ->whereYear('created_at',$date['year'])->get();
    $sum=0;
    $count = count($orders);
    for ($i=0; $i < $count ; $i++) {
        $sum = $sum + $orders[$i]->price;
    }

        Nexmo::message()->send([
            'to'   => '905459475193',
            'from' => '905427397855',
            'text' => 'Merhaba patron bugun urun satislarindan toplam gelirimiz '.$sum.'tl olarak hesaplanmistir.'
        ]);
        return view('sms')->with('orders', $orders);
    }

}
