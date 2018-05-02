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

Route::get('test', function (Request $request) {
    return 'Hi';
});

Route::apiResource('user', 'UserController');

Route::get('/tasks', 'TasksController@index');
Route::post('/create_task', 'TasksController@store');
Route::delete('/task', 'TasksController@delete');
Route::middleware('auth:api')->put('/user/{user}', 'UserController@update');

Route::post('/login', 'Auth\LoginController@login');

Route::middleware('auth:api')->post('/user', 'UserController@store');
Route::get('/users', 'UserController@index');
