<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembreciaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\TipoPagoController;
use App\Http\Controllers\ClienteController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::resource('membrecia', MembreciaController::class);
Route::resource('roles', RolController::class);
Route::resource('admin', AdminController::class);
Route::resource('trabajador', TrabajadorController::class);
Route::resource('factura', FacturaController::class);
Route::resource('tipopago', TipoPagoController::class);
Route::resource('cliente', ClienteController::class);




require __DIR__.'/auth.php';
