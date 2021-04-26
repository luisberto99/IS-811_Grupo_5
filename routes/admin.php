<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;

Route::get('home', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('', UserController::class)->names('admin.users');

Route::get('denuncias', [HomeController::class, 'show'])->name('admin.denuncias');
Route::get('mostrar/{denuncia}', [HomeController::class, 'mostrar'])->name('admin.mostrar');
