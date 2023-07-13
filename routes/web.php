<?php

use Illuminate\Support\Facades\Route;
use App\Events\SelectviajeChangedEvent;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\RutumController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\SelectviajeController;
use App\Http\Controllers\ConfirmardatosController;
use App\Http\Controllers\ConfirmarreservaController;
use App\Http\Controllers\TerminosController;
use App\Http\Controllers\ReservaController;

Route::get('/', function () {
    return view('welcome');
});
/*Arreglado*/
Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/busquedaviajes',[HomeController::class,'buscar_viajes_cliente'])->name('buscar_viajes_cliente');
Route::get('/acerca', [AcercaController::class, 'index'])->name('acerca');
Route::get('/soporte', [SoporteController::class, 'index'])->name('soporte');
Route::get('/selectviaje', [SelectviajeController::class, 'index'])->name('viaje');
Route::get('/selectviaje/{id_viaje}', [SelectviajeController::class, 'index'])->name('selectviaje');
Route::get('/selectviaje/{id_viaje}/confirmardatos', [ConfirmardatosController::class, 'index'])->name('confirmardatos');
Route::get('/selectviaje/{id_viaje}/confirmarreserva', [ConfirmarreservaController::class, 'index'])->name('confirmarreserva');
Route::get('/selectviaje/{id_viaje}/reservando', [ConfirmarreservaController::class, 'reservar'])->name('realizarreserva');
Route::get('/reservas', [ReservaController::class, 'index'])->name('administrarreservas');
Route::get('/cancelarreserva/{id_viaje}/{num_asiento}', [ReservaController::class, 'cancelar'])->name('cancelarreserva');
Route::get('/busquedareservas',[ReservaController::class,'buscar_reservas'])->name('buscar_reservas');

Route::get('/terminos', [TerminosController::class, 'index'])->name('terminos');
Route::resource('/ruta', App\Http\Controllers\RutumController::class)->middleware('auth');
Route::resource('/viajes', App\Http\Controllers\ViajeController::class)->middleware('auth');
Route::resource('/buses', App\Http\Controllers\BusController::class)->middleware('auth');