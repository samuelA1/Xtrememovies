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

use TCG\Voyager\Facades\Voyager;

Route::get('/', 'MovieController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('movies','MovieController@movies');
Route::get('soon','MovieController@soon');
Route::get('success','MovieController@success');
Route::get('/search','SearchController@index');
Route::get('/searched','SearchController@search');
Route::get('/gift-cards','MovieController@card');

Route::get('movie/{slug}', 'MovieController@films');

Route::get('showtime/{slug}', 'MovieController@showtimes');
Route::get('seat/{slug}/{time}/{theatre}', 'MovieController@seats');
Route::get('ticket/{slug}/{time}/{theatre}/{ticket}/tickets', 'MovieController@tickets');
Route::get('payment/{slug}/{time}/{theatre}/{adult}/{child}/{senior}/cat', 'MovieController@payments');