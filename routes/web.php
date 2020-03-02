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

Route::resource('tarea','TareaController'); //Generan los 6 métodos que apuntan al generador

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('prueba/{nombre?}',function($nombre = 'desconocido'){
    $nombre = strtoupper($nombre);
    return view('vista-prueba')->with(['nombre' => $nombre]); //se lo pasa a la vista
});

