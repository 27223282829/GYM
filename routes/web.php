<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TrabajadorController;
 
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin', AdminController::class);
Route::resource('/rol', RolController::class);
Route::resource('/trabajador', TrabajadorController::class);
Route::resource('/cliente', ClienteController::class);
// Route::resource('/admin', AdminController::class);