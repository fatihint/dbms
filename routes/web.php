<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/panel',function (){
    return view('layouts/panelLayout');
});
Route::get('/menu',function (){
    return view('Staff/menu');
});
Route::get('/order',function (){
    return view('Staff/order');
});
Route::get('/profile',function (){
    return view('Staff/profile');
});
Route::get('/detailProduct',function (){
    return view('Staff/detailProduct');
});