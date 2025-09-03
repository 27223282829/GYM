<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\TipoPagoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagoController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de recursos
Route::resource('membresias', MembresiaController::class);
Route::resource('roles', RolController::class);
Route::resource('admins', AdminController::class);
Route::resource('trabajadores', TrabajadorController::class);
Route::resource('facturas', FacturaController::class);
Route::resource('tipopagos', TipoPagoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('pagos', PagoController::class);

require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/tables', function () {
    return view('pages.tables');
})->name('tables');


Route::get('/billing', function () {
    return view('pages.billing');
})->name('billing');

Route::get('/virtual-reality', function () {
    return view('pages.virtual-reality');
})->name('virtual-reality');

Route::get('/rtl', function () {
    return view('pages.rtl');
})->name('rtl');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/sign-in', function () {
    return view('pages.sign-in');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('pages.sign-up');
})->name('sign-up');


