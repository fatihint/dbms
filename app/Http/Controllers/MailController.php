<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        Mail::send(['text'=>'mail'],['name'=>'baran'],function($message){
            $message->to('abaranozoglu@gmail.com','To Baran')->subject('Test mail');
            $message->to('postasepetiofficial@gmail.com','Baran');
        });
        return view('mail');
    }
}
