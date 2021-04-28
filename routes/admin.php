<?php

use App\Http\Controllers\Admin\categoriasController;
use App\Http\Controllers\Admin\estadisticasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;

Route::get('home', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only('index','edit','update')->middleware('can:admin.user')->names('admin.users');
Route::resource('estadisticas', estadisticasController::class)->middleware('can:admin.estadisticas')->names('admin.estadistica');
Route::resource('categorias', categoriasController::class)->middleware('can:admin.categories')->names('admin.categorias');

Route::get('denuncias', [HomeController::class, 'show'])->middleware('can:admin.moderador')->name('admin.denuncias');
Route::get('mostrar/{denuncia}', [HomeController::class, 'mostrar'])->middleware('can:admin.moderador')->name('admin.mostrar');
Route::put('baja/{user}', [HomeController::class, 'update'])->middleware('can:admin.moderador')->name('admin.baja');
Route::post('desestimar', [HomeController::class, 'store'])->middleware('can:admin.moderador')->name('admin.store');