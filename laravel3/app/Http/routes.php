<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BookController@index' );

Route::get('create', 'BookController@create' );
Route::get('cart', 'BookController@show_cart' );
Route::post('check', ['uses' => 'UserController@check'] );


Route::post('create', ['uses' => 'UserController@store'] );

Route::get('signup','UserController@signup');
Route::get('login','UserController@login');
Route::get('category/{cat}','BookController@categoryBook');
Route::get('add_to_cart/{id}','BookController@add_to_cart');
Route::any('buy_books','BookController@buy_books');
    
Route::any('book/{id}', ['as' => 'showBook', 'uses' => 'BookController@detail_book']);

Route::get('show_trans', 'UserController@show_trans');
Route::get('logout', 'UserController@logout');
