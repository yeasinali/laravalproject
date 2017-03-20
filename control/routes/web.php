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
Route::get('/contact', function () {
    return view('contact');
});

Route::get('index','basicController@index');
Route::get('about','basicController@about');
Route::get('examples','basicController@examples');
Route::get('another','basicController@another');
Route::get('page','basicController@page');
Route::get('contactpage','basicController@contactpage');

Auth::routes();

Route::get('/home', 'HomeController@index');
