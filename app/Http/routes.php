<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
//    Route::get('/articles', 'UsersController@index');
//    Route::get('/articles/add', 'UsersController@add');
//    Route::get('/articles/{id}', 'UsersController@show');
//    Route::post('/articles', 'UsersController@store');
    Route::resource('articles', 'ArticlesController');
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController'
    ]);
});
