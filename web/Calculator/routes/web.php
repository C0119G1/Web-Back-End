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
    return view('welcome');
});
Route::get('/Calculator',function(){
	return view('Production');
});
Route::post('/Calculator',function(Illuminate\Http\Request $request){
	$productDescription = $request->Production;
	$price = $request->ListPrice;
	$discountPercent = $request->DiscountPercent; // / 100;
	$discountAmount = $discountPercent * $price * 0.1;
	$discountPrice = $price; // - $discountAmount;
	return view('result',compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});