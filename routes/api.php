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
Route::post('UserPassUpdate', 'Api\Auth\UserController@updatePass');

/********************* TIPO MOVIMIENTO ********************** */
Route::get('TypeMovement', 'Api\Auth\tipoMovimientoController@index');
Route::get('TypeMovementId/{id}', 'Api\Auth\tipoMovimientoController@findId');
Route::post('TypeMovementCreate', 'Api\Auth\tipoMovimientoController@create');
Route::post('TypeMovementUpdate', 'Api\Auth\tipoMovimientoController@update');

/*********************MOVIMIENTO ********************** */
Route::get('Movement', 'Api\Auth\MovementController@index');





});

/*********************RUTAS SIN PROTECCION DE TOKENS********************** */
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('UsersCreate', 'Api\Auth\UserController@create');



