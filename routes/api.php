<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//user
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::middleware('auth:api')->group(function () {
    Route::group(['prefix' => 'users'],function(){
        Route::get('/', 'UserController@index');
        Route::get('/{user}', 'UserController@details');
    });    
    //post
    Route::get('posts','PostController@index');
    Route::group(['prefix' => 'post'], function() {
        Route::post('/', 'PostController@store');
        Route::post('/update/{posts}','PostController@update');  
        Route::delete('/delete/{posts}','PostController@destroy');
        Route::get('/like/{posts}', 'PostController@like');
        Route::get('/dislike/{posts}','PostController@dislike');
        Route::get('get-post/{posts}','PostController@getPost');

    });
    //comment
    Route::get('comments','CommentController@index');
    Route::group(['prefix' => 'comment'], function() {
        Route::post('/', 'CommentController@store');
        Route::post('/update/{comments}','CommentController@update');
        Route::delete('/delete/{comments}','CommentController@destroy');
        Route::get('/{comment}','CommentController@getComment');
    });

});
  
