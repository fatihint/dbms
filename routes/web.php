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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('home');
    } else {
        return view('welcome');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('login/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/products/new', 'Admin\AdminController@newProduct');
Route::get('admin/products/', 'Admin\AdminProductsController@index');
Route::get('admin/products/{id}', 'Admin\AdminProductsController@show');
Route::post('admin/products', 'Admin\AdminProductsController@create');
Route::post('admin/products/{id}', 'Admin\AdminProductsController@update');
Route::delete('admin/products/{id}', 'Admin\AdminProductsController@destroy');

Route::get('admin/orders/', 'Admin\AdminOrdersController@index');
Route::get('admin/orders/{id}', 'Admin\AdminOrdersController@show');
Route::post('admin/orders/{id}', 'Admin\AdminOrdersController@update');
Route::delete('admin/orders/{id}', 'Admin\AdminOrdersController@destroy');

Route::get('personel/products', 'Personel\PersonelProductsController@index');
Route::get('personel/products/{id?}', 'Personel\PersonelProductsController@show');
Route::get('personel/orders', 'Personel\PersonelOrdersController@index');
Route::get('personel/orders/{id}', 'Personel\PersonelOrdersController@show');
Route::post('personel/orders/{id}', 'Personel\PersonelOrdersController@accept');
Route::get('/panel',function (){
    return view('layouts/panel');
});
Route::get('/customer-home',function (){
    return view('layouts/customer-home');
});
Route::get('/personels',function (){
    return view('admin/personels');
});
Route::get('/personels/{id}',function (){
    $idd = 1;
    return view('admin/personels')->with(
        ["id"=>1]
    );
});
Route::get('/orders/{id}',function (){
    $id = 2;
    return view('admin/orders')->with(
        ["id"=>2]
    );
});
Route::get('/orders',function (){
    return view('admin/orders');
});
Route::get('/profile',function (){
    return view('admin/profile');
});
Route::get('/products',function (){
    return view('admin/products');
});
Route::get('/new-product',function (){
    return view('admin/new-product');
});
Route::get('/new-personel',function (){
    return view('admin/new-personel');
});
Route::get('/eren',function (){
    return view('home');
});
Route::get('customer/orders',function (){
    return view('customer/orders');
});
Route::get('customer/profile',function (){
    return view('customer/profile');
});
Route::get('customer/orders-history/{id}',function (){
    $id = 1;
    return view('customer/orders-history')->with(
        ["id"=>1]
    );
});
Route::get('customer/orders-history',function (){
    return view('customer/orders-history');
});
