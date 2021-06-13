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
// Route::get('/area', 'AreaController@index'); →トップ画　エラーになる

 //Route::get('/category', 'CategoryController@index');→施設一覧　エラーになる


Route::group(['prefix' =>'review'], function() {
    Route::get('site/post', 'Main\ReviewController@add');//->middleware('auth');
    Route::post('site/post','Main\ReviewController@create');//->middleware('auth');
  });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
