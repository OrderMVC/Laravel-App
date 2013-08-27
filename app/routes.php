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

Route::get('/', array('uses' => 'HomeController@index'));

Route::group(array('prefix' => 'orders'), function()
{
	Route::get('/', array('uses' => 'OrdersController@index', 'as' => 'orders.index'));
});

Route::group(array('prefix' => 'items'), function()
{
	Route::get('/', array('uses' => 'ItemsController@index', 'as' => 'items.index'));
});