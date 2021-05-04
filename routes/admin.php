<?php

use App\Http\Controllers\Admin\categoriasController;
use App\Http\Controllers\Admin\estadisticasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Livewire\Admin\Estadisticas\General;

Route::get('home', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only('index','edit','update')->middleware('can:admin.user')->names('admin.users');
Route::resource('categorias', categoriasController::class)->middleware('can:admin.categories')->names('admin.categorias');


Route::get('estadistica/general', [estadisticasController::class, 'general'])->middleware('can:admin.estadisticas')->name('admin.estadistica.general');
Route::get('estadistica/usuarios', [estadisticasController::class, 'usuarios'])->middleware('can:admin.estadisticas')->name('admin.estadistica.usuarios');
Route::get('estadistica/categorias', [estadisticasController::class, 'categorias'])->middleware('can:admin.estadisticas')->name('admin.estadistica.categorias');
Route::get('estadistica/anuncios', [estadisticasController::class, 'anuncios'])->middleware('can:admin.estadisticas')->name('admin.estadistica.anuncios');
Route::get('estadistica/favoritos', [estadisticasController::class, 'favoritos'])->middleware('can:admin.estadisticas')->name('admin.estadistica.favoritos');
Route::get('estadistica/denuncias', [estadisticasController::class, 'denuncias'])->middleware('can:admin.estadisticas')->name('admin.estadistica.denuncias');

Route::get('denuncias', [HomeController::class, 'show'])->middleware('can:admin.moderador')->name('admin.denuncias');
Route::get('mostrar/{denuncia}', [HomeController::class, 'mostrar'])->middleware('can:admin.moderador')->name('admin.mostrar');
Route::get('mostrardenuncia/{denuncia}', [HomeController::class, 'mostrardenuncia'])->middleware('can:admin.moderador')->name('admin.mostrardenuncia');
Route::put('baja/{user}', [HomeController::class, 'update'])->middleware('can:admin.moderador')->name('admin.baja');
Route::post('desestimar', [HomeController::class, 'store'])->middleware('can:admin.moderador')->name('admin.store');
Route::post('desestimaranuncio', [HomeController::class, 'denunciastore'])->middleware('can:admin.moderador')->name('admin.denunciastore');
Route::put('anunciobaja/{advert}', [HomeController::class, 'updateanuncio'])->middleware('can:admin.moderador')->name('admin.anunciobaja');