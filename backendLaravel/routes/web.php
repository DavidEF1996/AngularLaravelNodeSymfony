<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pruebas', function(){
    return '<h2> Hola </h2>';
});


Route::get('/pruebas2/{nombre?}',function($nombre=null){
    $texto = '<h2> El nombre es </h2>';
    $texto .= 'El nombre es: '.$nombre;
    return $texto;
});

//Crear una vista en resources y llamarla probando.php
Route::get('/proband1/{nombre?}',function($nombre=null){
    $texto = '<h2> El nombre es </h2>';
    $texto .= 'El nombre es: '.$nombre;
    return view('probando', array(
        'texto'=>$texto
            // y en la vista imprimir un echo
    ));
});


//Probando con controlador y vista
//La ruta puede ser cualquiera que queramos pero el controlador si debe estar ligado correctamente
Route::get('/ejemplo1/animal', 'PruebasController@index');

Route::get('/base', 'PruebasController@probarOrm');