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
// Route::get('login', 'HomeController@login');
// Route::post('login', 'HomeController@postLogin');

// Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () {
//     Route::get('', 'AdminController@index');
// });

//TO_DO AUTHENTICATE
Route::get('admin', 'AdminController@index');
Route::post('diary/post', 'DiaryController@postEntry');


Route::get('/', 'HomeController@home');
Route::get('about', 'HomeController@about');
Route::get('blog', 'HomeController@blog');
Route::get('code', 'HomeController@code');
Route::get('diary', 'HomeController@diary');
Route::get('epitome', 'HomeController@epitome');

Route::get('diary-entries', 'DiaryController@getEntries');
Route::get('diary/{entry}', 'DiaryController@show');
Route::get('diary/edit/{entry}', 'DiaryController@edit');
Route::patch('diary/edit/{entry}', 'DiaryController@update');
Route::post('diary/delete/{entry}', 'DiaryController@delete');

Route::post('diary/{entry}/comments', 'CommentsController@store');

Route::get('blog-entries', 'BlogController@getEntries');

// Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');


