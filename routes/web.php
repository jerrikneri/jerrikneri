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
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@login')->middleware('guest');
Route::post('logout', 'SessionsController@destroy')->middleware('auth');

Route::get('admin', 'AdminController@index')->middleware('auth')->name('admin');
// Route::get('register', 'RegistrationController@create');
// Route::post('register', 'RegistrationController@store');

// Route::resource('diary', 'diaryController');
Route::group(['prefix' => 'diary'], function () {
    Route::get('/all', 'DiaryController@index');
    Route::get('/{diary}', 'DiaryController@show');
    Route::get('/{diary}/edit', 'DiaryController@edit');
    Route::patch('/{diary}/edit', 'DiaryController@update');
    Route::post('/', 'DiaryController@store');
    Route::delete('/{diary}', 'DiaryController@destroy');
});

Route::post('diary/{diary}/comments', 'CommentsController@store');

Route::get('blog-entries', 'BlogController@getEntries');


// Route::get('/home', 'HomeController@index')->name('home');



Route::group(
    ['middleware' => 'stripTags'],
    function () {
        $routes = [
            '/',
            'diary',
            'blog',
            'code',
            'epitome',
            'project'
        ];
        foreach ($routes as $route) {
            Route::get($route, 'HomeController@home');
        }
    }
);
