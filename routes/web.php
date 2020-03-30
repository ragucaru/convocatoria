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

Route::get('/registro', function () {
    return view('registro');
});



Route::resource('lista', 'ConvocatoriaController');


Route::resource('crear', 'ConvocatoriaController');


