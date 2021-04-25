<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('home', [HomeController::class, 'index'])->name('admin.home');

Route::get('denuncias', [HomeController::class, 'show'])->name('admin.denuncias');
Route::get('mostrar/{denuncia}', [HomeController::class, 'mostrar'])->name('admin.mostrar');
