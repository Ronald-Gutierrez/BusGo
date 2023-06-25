<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\ViajeController;
Route::get('/', function () {
    return view('welcome');
});
/*Arreglado*/
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/homebusiness', [HomeController::class, 'index_business'])->name('homebusiness');

Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
Route::get('/client/dashboard', [ClientHomeController::class, 'index'])->name('client.dashboard');
Route::get('/acerca', [AcercaController::class, 'index'])->name('acerca');
Route::get('/soporte', [SoporteController::class, 'index'])->name('soporte');
Route::get('/viaje', [ViajeController::class, 'index'])->name('viaje');

