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

        Route::get('/', function () {
            return view('layouts.master');
        });

        Route::get('City',[
            'uses' => 'CityController@index',
            'as' => 'City.index'
        ]);
        Route::get('Customer',[
            'uses' => 'CustemerController@index',
            'as' => 'customer.index'
        ]);
        Route::get('store',[
            'uses' => 'CityController@add',
            'as' => 'City.create'
        ]);
        Route::post('store',[
            'uses' => 'CityController@store',
            'as' => 'City.add'
        ]);
        Route::get('edit/{id}',[
            'uses' => 'CityController@edit',
            'as' => 'City.edit'
        ]);
        Route::post('{id}/edit',[
            'uses' => 'CityController@update',
            'as' => 'City.update'
        ]);
        Route::get('{id}/delete',[
            'uses' => 'CityController@destroy',
            'as' => 'City.destroy'
        ]);
        Route::get('create',[
            'uses' => 'CustemerController@create',
            'as' => 'customer.create'
        ]);
        Route::post('create',[
            'uses' => 'CustemerController@store',
            'as' => 'customer.store'
        ]);
        Route::get('{id}/edit',[
            'uses' => 'CustemerController@edit',
            'as' => 'customer.edit'
        ]);
        Route::post('update/{id}',[
            'uses' => 'CustemerController@update',
            'as' => 'customer.update'
        ]);
        Route::get('{id}/destroy',[
            'uses' => 'CustemerController@destroy',
            'as' => 'customer.delete'
        ]);
        Route::get('/search',[
            'uses'=>'CustemerController@search',
             'as'=>'customers.search'
        ]);



