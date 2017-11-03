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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('products','ProductController');

/**
 *
 *
 * PAGE
 *
 *
 */
Route::get('/', 'PageController@index');


/**
 *
 *
 * DASHBOARD ADMIN
 *
 *
 */
Route::group(['prefix'=>'dashboard'],function(){

    Route::get('index','DashboardController@index')->name('index');

    Route::get('product','DashboardController@product')->name('product');

    Route::get('category','DashboardController@category')->name('category');

    Route::get('report','DashboardController@report')->name('report');
});