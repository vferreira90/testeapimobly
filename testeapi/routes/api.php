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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//============================

Route::namespace('Api')->group(function () {

    //Users
    
    Route::get('/users', 'UsuarioController@users');
    
    Route::post('/users/add', 'UsuarioController@add');

    Route::get('/users/list', 'UsuarioController@list');

    Route::get('/users/{id}', 'UsuarioController@select');

    Route::put('/users/update/{id}', 'UsuarioController@update2');

    Route::delete('/users/del/{id}', 'UsuarioController@delete')->name('rota.del');

    // Posts

    //Route::get('/users/posts', 'PostController@posts');
    
    Route::get('/users/{id}/posts', 'PostController@selectpost')->name('rota.posts');

    Route::post('/users/posts/add', 'PostController@addpost');

});
