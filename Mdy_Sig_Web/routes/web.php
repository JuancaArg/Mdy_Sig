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

Route::get('/logout', function(){

    session_start();

    session_destroy();

    return view('welcome');

})->name('/logout');

Route::get('/Controlador_Funciones_Ajax', 'App\Http\Controllers\Controlador_Funciones_Ajax@Deriva_Controladores_Ajax');

