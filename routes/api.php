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

Route::apiResource('posts', 'API\PostController');


//This one line of code will automatically generate following REST api routes for us
//Route::get('posts', 'API\PostController@index');
//Route::post('posts', 'API\PostController@store');
//Route::get('posts/{id}', 'API\PostController@show');
//Route::put('posts/{id}', 'API\PostController@update');
//Route::delete('posts/{id}', 'API\PostController@destroy');
