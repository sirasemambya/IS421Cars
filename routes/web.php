<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PagesController@home');
Route::get('/inventory','PagesController@inventory');
Route::get('/schedule','PagesController@schedule');
Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');
Route::get('/feedback','PagesController@feedback');
Route::get('/signin','PagesController@signin');
Route::get('/signup','PagesController@signup');
Route::get('/subscribe','PagesController@subscribe');
