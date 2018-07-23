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

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('blog', 'HomeController@blog');
Route::get('code', 'HomeController@code');
// Route::get('diary', 'HomeController@diary');
Route::get('epitome', 'HomeController@epitome');

Route::get('diary', 'DiaryController@getIndex');
Route::post('diary/post', 'DiaryController@postEntry');
