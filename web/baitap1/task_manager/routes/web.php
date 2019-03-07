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

Route::get('/', [
	'uses' => 'CustomerController@getIndex',
	'as' => 'customer.index',
]);

Route::get('/showAdd', [
	'uses' => 'CustomerController@showFormAdd',
	'as' => 'customer.showAdd',
]);

Route::post('/showAdd', [
	'uses' => 'CustomerController@add',
	'as' => 'customer.AddCustomer',
]);