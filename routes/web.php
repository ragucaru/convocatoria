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

Route::get('/registro_medico', function () {
    return view('registro');
});

Route::get('/', function () { return Redirect::to('registro_medico'); });
Route::get('/exito', function () {
    return view('exito');
});



//Route::resource('lista', 'ConvocatoriaController');


Route::resource('crear', 'ConvocatoriaController');
Route::get('lista', 'ConvocatoriaController@buscar');

?>