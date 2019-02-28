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
Route::get('/check',function(){
	return view('Search');
});
Route::get('/check',function(Illuminate\Http\Request $request){
	$search = $request->english;
	$result=$request->nghia;
	$dictionary = array(
    "hello"=>"xin chào", 
    "how"=>"thế nào", 
    "book"=>"quyển vở", 
    "computer"=>"máy tính");

    foreach ($dictionary as $key => $value) {
        if($search === $key){
           $result === $value;
        };
    };
    return view('Search', compact(['search','result']));
});