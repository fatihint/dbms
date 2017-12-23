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

Route::post('admin/products', 'Admin\AdminProductsController@create');
Route::post('admin/products/{id}', 'Admin\AdminProductsController@update');
Route::delete('admin/products/{id}', 'Admin\AdminProductsController@destroy');

Route::get('admin/personels/new', 'Admin\AdminController@newPersonel');
Route::get('admin/personels/', 'Admin\AdminPersonelsController@index');
Route::get('admin/personels/{id}', 'Admin\AdminPersonelsController@show');
Route::post('admin/personels/','Admin\AdminPersonelsController@create');
Route::delete('admin/personels/{id}', 'Admin\AdminPersonelsController@destroy');

Route::get('admin/customers/', 'Admin\AdminCustomersController@index');
Route::get('admin/customers/{id}', 'Admin\AdminCustomersController@show');

Route::get('personel', 'Personel\PersonelController@index');

Route::get('orders', 'OrdersController@index');
Route::get('orders/{id}', 'OrdersController@show');
Route::post('orders/{id}', 'OrdersController@accept');
Route::delete('orders/{id}', 'OrdersController@destroy');
Route::get('orders/status/{status?}', 'OrdersController@index');

Route::get('products/', 'ProductsController@index');
Route::get('products/{id}', 'ProductsController@show');

Route::get('profile', 'UsersController@index');
Route::post('profile', 'UsersController@update');

