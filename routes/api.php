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
Route::get('/lista', 'ConvocatoriaController@listar');
Route::post('/registro', 'ConvocatoriaController@store');
Route::get('/lista/{id}/editar', 'ConvocatoriaController@edit');
Route::put('/registro/{id}', 'ConvocatoriaController@update');
Route::delete('/registro/{id}', 'ConvocatoriaController@destroy');

Route::get('/parteprueba/{page?}', 'ConvocatoriaController@prueba');
