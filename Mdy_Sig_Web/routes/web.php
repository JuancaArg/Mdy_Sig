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


Route::get('/a', function () {
    return 'holii';
});

Route::get('/hola', function () {
    return "hola";
});

Route::post('/Controlador_Funciones_Ajax', 'Controlador_Funciones_Ajax@Deriva_Controladores_Ajax');

