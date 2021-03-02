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

Route::get('/texto', function(){
    return '<h1>esto es un texto de prueba</h1>';
});

Route::get('/arreglo', function(){
     $arreglo = ['lunes', 'martes', 'miercoles'];
     return $arreglo;
});

Route::get('/nombre/{nombre}', function($nombre){
    return '<h1>El nombre es: '.$nombre.'</h1>';
});

Route::get('/cliente/{cliente?}', function($cliente='cliente general'){
    return '<h1>El cliente es: '.$cliente.'</h1>';
});

Route::get('/ruta1', function () {
    return '<h1>esta es la vista de la ruta 1</h1>';
})-> name('rutaNro1');

Route::get('/ruta2', function () {
    //return '<h1>esta es la vista de la ruta 2</h1>';
    return redirect()->route('rutaNro1');
});

Route::get('/usuario/{usuario}', function (usuario) {
    return 'El usuario es:' .$usuario;
}) ->where('usuario','[A-Za-z]+');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
