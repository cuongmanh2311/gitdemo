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
Route::get('/','HomeController@index');


Route::get('/aaa',function(){
	echo "ABC";
});

Route::get('/products','ProductsController@index');

Route::get('/product/{id}','ProductsController@show');

Route::post('/product','ProductsController@store');

Route::put('/product/{id}','ProductsController@update');

Route::delete('/product/{id}','ProductsController@destroy');


Route::get('/category','CategoryController@index');
Route::get('/category/show','CategoryController@show');
Route::post('/category/store','CategoryController@store');
Route::put('/category/update','CategoryController@update');
Route::get('/category/search','CategoryController@search');
