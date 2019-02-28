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
Route::get('/Calculator',function(){
    return view('product_discount');
});
Route::post('/Calculator', function (Illuminate\Http\Request $request) {
    $productDescription=$request->description;
    $price=$request->price;
    $discountPercent=$request->discount_percent /100;
    $discountAmount= $discountPercent *$price *0.1;
    $discountPrice=$price-$discountAmount;
    return view('display_discount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
  
});

