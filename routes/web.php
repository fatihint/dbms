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
Route::get('admin/products/{id?}', 'Admin\AdminProductsController@show');
Route::post('admin/products', 'Admin\AdminProductsController@create');
Route::post('admin/products/{$id}', 'Admin\AdminProductsController@update');
Route::delete('admin/products/{$id}', 'Admin\AdminProductsController@delete');

Route::get('/panel',function (){
    return view('layouts/panel');
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