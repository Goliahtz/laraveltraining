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

Route::get('/index', function () {
    return view('welcome');
});
Route::get('/deneme','HomeController@get_deneme');

Route::get('/form','HomeController@get_form');

Route::post('/form','HomeController@post_form');
Route::get('/haberler','HomeController@get_haberler');
Route::post('/haberler','HomeController@post_haberler');

Route::group(['prefix' => 'admin', 'middleware' => 'admin' ], function(){
Route::get('/forum','HomeController@get_deneme');
Route::get('/blog','HomeController@get_deneme');
Route::get('/galeri','HomeController@get_deneme');
});

Route::get('/deneme/{forum}/{php}/{framework}/sorular','HomeController@get_kategori');
