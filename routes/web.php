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
// Route::get('register', 'RegistrationController@create');
// Route::post('register', 'RegistrationController@store');

Route::get('/', 'HomeController@home')->name('home');
Route::group(
    ['middleware' => 'stripTags'],
    function () {
        $routes = [
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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/blog', 'AdminController@blog');
    Route::get('/code', 'AdminController@code');
    Route::get('/diary', 'AdminController@diary');
    Route::post('/blog', 'BlogController@store');
    Route::post('/code', 'CodeController@store');
    Route::post('/diary', 'DiaryController@store');
});

Route::group(['prefix' => 'diary', 'middleware' => 'can:update,diary'], function () {
    Route::get('/{diary}/edit', 'DiaryController@edit');
    Route::patch('/{diary}/edit', 'DiaryController@update');
    Route::post('/', 'DiaryController@store');
    Route::delete('/{diary}', 'DiaryController@destroy');
});
Route::get('/diary/all', 'DiaryController@index');
Route::post('diary/{diary}/comments', 'DiaryCommentsController@store');
Route::get('diary/{diary}', 'DiaryController@show');

Route::group(['prefix' => 'blog', 'middleware' => 'can:update,blog'], function () {
    Route::get('/{blog}/edit', 'BlogController@edit');
    Route::patch('/{blog}/edit', 'BlogController@update');
    Route::post('/', 'BlogController@store');
    Route::delete('/{blog}', 'BlogController@destroy');
    Route::post('/{blog}/comments', 'BlogCommentsController@store');
});
Route::get('blog/all', 'BlogController@index');
Route::get('blog/{blog}', 'BlogController@show');

Route::group(['prefix' => 'project', 'middleware' => 'can:update,project'], function () {
    Route::get('/all', 'ProjectController@index');
    Route::get('/{project}', 'ProjectController@show');
    Route::get('/{project}/edit', 'ProjectController@edit');
    Route::patch('/{project}/edit', 'ProjectController@update');
    Route::post('/', 'ProjectController@store');
    Route::delete('/{project}', 'ProjectController@destroy');
    Route::post('/{project}/comments', 'ProjectCommentsController@store');
});
