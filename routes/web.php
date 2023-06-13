<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
/*Arreglado*/
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
Route::get('/client/dashboard', [ClientHomeController::class, 'index'])->name('client.dashboard');


