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

Route::get('movie/{slug}', function($slug){
    $movies = App\Movie::where('slug', '=', $slug)->firstOrFail();
    return view('film', compact('movies'));
});