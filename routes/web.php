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

Route::resource('diary', 'DiaryController');
Route::post('diary/{diary}/comments', 'DiaryCommentsController@store');
Route::get('diary/{diary}', 'DiaryController@show');

Route::resource('blog', 'BlogController');
Route::get('blog/{blog}', 'BlogController@show');
Route::post('blog/{blog}/comments', 'BlogCommentsController@store');

Route::group(['prefix' => 'blog', 'middleware' => 'can:update,comment'], function () {
    Route::delete('/comment/{comment}', 'BlogCommentsController@destroy');
});

Route::resource('project', 'ProjectController');
Route::post('/{project}/comments', 'ProjectCommentsController@store');

Route::post('subscribe-to-newsletter', 'NewsletterSubscribeController@store');

Route::resource('/tags', 'TagsController');
