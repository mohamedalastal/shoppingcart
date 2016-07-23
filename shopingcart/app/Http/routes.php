<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('product', ['uses'  => 'ProductController@index', 'as'=>'product.index']);
Route::get('product/create', ['uses'  => 'ProductController@create', 'as'=>'product.create']);
Route::post('product/store', ['uses'  => 'ProductController@store', 'as'=>'product.store']);

Route::get('cart/create/{id}', ['uses'  => 'CartController@create', 'as'=>'cart.create']);
Route::post('cart/store_quntity', ['uses'  => 'CartController@store_quntity', 'as'=>'cart.store_quntity']);
Route::post('cart/store_service', ['uses'  => 'CartController@store_service', 'as'=>'cart.store_service']);


Route::delete('/cart/{id}', ['uses' => 'CartController@destroy', 'as'=>'cart.delete']);
