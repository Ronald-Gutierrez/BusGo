<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return "Hola mundo";
});
Route::get('/login', function () {
    return view('auth/login');
})->name('login');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
Route::get('/client/dashboard', [ClientHomeController::class, 'index'])->name('client.dashboard');


