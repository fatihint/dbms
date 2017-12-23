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
Route::get('admin/products/', 'ProductsController@index');
Route::get('admin/products/{id}', 'ProductsController@show');
Route::post('admin/products', 'Admin\AdminProductsController@create');
Route::post('admin/products/{id}', 'Admin\AdminProductsController@update');
Route::delete('admin/products/{id}', 'Admin\AdminProductsController@destroy');

Route::get('admin/orders/', 'OrdersController@index');
Route::get('admin/orders/{id}', 'OrdersController@show');
Route::post('admin/orders/{id}', 'OrdersController@update');
Route::delete('admin/orders/{id}', 'OrdersController@destroy');

Route::get('admin/personels/new', 'Admin\AdminController@newPersonel');
Route::get('admin/personels/', 'Admin\AdminPersonelsController@index');
Route::get('admin/personels/{id}', 'Admin\AdminPersonelsController@show');
Route::post('admin/personels/','Admin\AdminPersonelsController@create');
Route::delete('admin/personels/{id}', 'Admin\AdminPersonelsController@destroy');

Route::get('admin/customers/', 'Admin\AdminCustomers@index');
Route::get('admin/customers/{id}', 'Admin\AdminCustomersController@show');

Route::get('personel/products', 'ProductsController@index');
Route::get('personel/products/{id?}', 'ProductsController@show');
Route::get('personel/orders', 'OrdersController@index');
Route::get('personel/orders/{id}', 'OrdersController@show');
Route::post('personel/orders/{id}', 'OrdersController@accept');