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
    return view('pages/index');
});
Route::get('/news', 'PostController@index');
Route::get('/news-detail/{slug}', 'PostController@show');

Route::get('/hotels', 'HotelController@index');
Route::get('/hotel-detail/{id}', 'HotelController@show');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
