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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['domain' => 'www.blog.app', 'namespace' => 'Web'], function () {
    Route::get('post', 'PostController@index');
    Route::get('post/{id}', 'PostController@show');
});

Route::group(['domain' => 'admin.blog.app', 'namespace' => 'Admin'], function () {
    Route::get('login', 'AuthenticateController@login');
    Route::post('login', 'AuthenticateController@authenticate');
    Route::get('logout', 'AuthenticateController@logout');

    Route::group(['middleware'=>'auth'],function (){
        Route::get('/','AdminController@index');

        Route::resource('post','PostController');
    });
});