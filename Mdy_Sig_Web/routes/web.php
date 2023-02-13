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

Route::view('/','Contenido/Resumen_Asistencia')->name('welcome');
Route::view('/Cambio_Horario','Contenido/Cambio_Horario')->name('Cambio_Horario');
Route::view('/Resumen_Asistencia','Contenido/Resumen_Asistencia')->name('Resumen_Asistencia');

Route::get('/Logout','App\Http\Controllers\Controlador_Usuarios@deleteSessionData')->name('/Logout');

Route::get('/Controlador_Funciones_Ajax', 'App\Http\Controllers\Controlador_Funciones_Ajax@Deriva_Controladores_Ajax');



