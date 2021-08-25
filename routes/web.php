<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});

Route::get('/empleado/create', [EmpleadoController::class,'create']);

Route::resource('empleado', EmpleadoController::class)->middleware('auth');
/* Auth::routes(['register'=>false,'reset'=>false]); //lo que esta entre parentesis es lo que quieres que no aparezca */

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');


