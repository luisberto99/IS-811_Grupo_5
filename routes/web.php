<?php

use App\Http\Controllers\advertController;
use App\Http\Controllers\advertControllers;
use App\Http\Controllers\advertUserController;
use App\Http\Controllers\PerfilController;
use App\Http\Livewire\Adverts\AdvertsShow;
use App\Http\Livewire\Adverts\AdvertsShowUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('perfiles/{perfil}', [PerfilController::class, 'show'])->name('perfiles.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/nuevo', function () {
    return view('advert.nuevo');
})->name('nuevo');


Route::get('adverts/show/f{fill?}',AdvertsShow::class)->name('adverts');
Route::get('advertsUser/show/',AdvertsShowUser::class)->name('advertsUser');

/* Route::get('advert{id}?', function ($id = null) {
    return "work $id";
}); */

/*Route::get('advert/{id}', function ($id) {
    return Advert::find($id);
})->name('advert.show');*/

Route::get('users/fill{id}', function ($id) {
    return User::find($id);
})->name('user.show');

Route::get('advertsUser/{anuncio}/edit', [advertUserController::class, 'edit'])->name('advertsUser.edit');
Route::get('perfiles', [PerfilController::class, 'store'])->name('perfiles.store');
Route::post('perfiles/calificacion', [PerfilController::class, 'storeCalificacion'])->name('perfiles.calificacion');

Route::get('adverts/{anuncio}/edit', [advertControllers::class, 'edit'])->name('adverts.edit');

Route::get('/advert/{show}',[ AdvertController::class, 'show'])->name('advert.show');
Route::middleware(['auth:sanctum', 'verified'])->post('/comment',[AdvertController::class, 'storeComment'])->name('advert.comment');

Route::get('advert', [advertController::class, 'store'])->name('acomplaint.store');
Route::get('mycategories/{id}', [CategoriaController::class, 'listarCategorias'])->name('categorias.show');
Route::get('mycategories/{id_categoria}/{id_user}', [CategriaController::class, 'guardar'])->name('categoria.guardar');
Route::get('mycategories/eliminar/{id}/{idUser}', [CategriaController::class, 'eliminar'])->name('categoria.eliminar');
