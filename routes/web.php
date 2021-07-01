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
    Route::get('site/post', 'Main\ReviewController@add')->middleware('auth');
    Route::post('site/post','Main\ReviewController@create')->middleware('auth');
    Route::get('review', 'Main\ReviewController@index')->middleware('auth');
  });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/area', 'AreaController@index');
Route::get('/category', 'CategoryController@index');

//Route::get('area/{area_id}/category/{category_id}', function($param1, $param2) {
    //return view('hello.index', ['area_id'=>$param1, 'category_id'=>$param2]);
//});
