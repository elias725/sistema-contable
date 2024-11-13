<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::middleware(['auth', 'role:Administrador'])->group(function () {
    Route::resource('users', UserController::class);
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
