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
    return view('convocatoria.registro');
});

Route::get('/', function () { return Redirect::to('registro_medico'); });
Route::get('/exito', function () {
    return view('convocatoria.exito');
});
Route::middleware('auth')->get('/lista', function () {
    return view('convocatoria.lista');
});

Route::middleware('auth')->get('/prueba', function () {
    return view('convocatoria.prueba');
});



//Route::resource('convocatoria.prueba', 'ConvocatoriaController'); 
//Route::get('parteprueba/{page?}', 'ConvocatoriaController@prueba');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
