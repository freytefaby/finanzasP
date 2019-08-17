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

Route::middleware(['auth:api'])->group(function () {
Route::post('logout', 'Api\Auth\LoginController@logout');

/********************* USERS ********************** */
Route::post('UserId', 'Api\Auth\UserController@userId');
Route::post('UserUpdate', 'Api\Auth\UserController@update');
Route::post('UserPass', 'Api\Auth\UserController@updatePass');


});

/*********************RUTAS SIN PROTECCION DE TOKENS********************** */
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('UsersCreate', 'Api\Auth\UserController@create');



