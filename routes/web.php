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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'categories'], function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('/create', 'CategoryController@create');
    Route::post('/create', 'CategoryController@store');
    Route::get('/{categoryId}/edit', 'CategoryController@edit');
    Route::post('/{categoryId}/edit', 'CategoryController@update');
    Route::get('/{categoryId}/delete', 'CategoryController@delete');
    Route::post('/{categoryId}/delete', 'CategoryController@destroy');

});


