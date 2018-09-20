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

Route::get('/','homeController@index');
Route::get('/shop','shopController@index')->name('allproduct');
Route::get('/shop/{product}','shopController@show')->name('shop.show');

Route::get('/cart','cartController@index')->name('cart');
Route::get('/add-to-cart/{id}','cartController@getAddTo')->name('addToCart');
Route::get('/remove-from-cart/{id}','cartController@getReduceByOne')->name('removeFromCart');
Route::get('/remove-item/{id}','cartController@removeItem')->name('removeItem');



Route::get('/checkout','cartController@checkout')->name('checkout');
Route::post('/order','cartController@postorder')->name('postorder');


