<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@index', 'as' => 'index'));

Route::resource('orders', 'OrdersController');

Route::resource('items', 'ItemsController');

Route::get('physical_items/{id}/add', array('uses' => 'PhysicalItemsController@add', 'as' => 'physical-items.add'));
Route::get('digital_items/{id}/add', array('uses' => 'DigitalItemsController@add', 'as' => 'digital-items.add'));

Route::get('login', array('uses' => 'UsersController@create', 'as' => 'users.create'));

Route::get('cart', array('uses' => 'CartController@index', 'as' => 'cart.index'));
Route::get('cart/empty', array('uses' => 'CartController@destroy', 'as' => 'cart.destroy'));