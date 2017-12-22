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