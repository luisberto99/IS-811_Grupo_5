<?php

use App\Http\Controllers\advertController;
use App\Http\Controllers\advertControllers;
use Illuminate\Support\Facades\Route;

use App\Models\Advert;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('adverts/show', advertControllers::class )->name('advert.show');

Route::get('adverts/show/f{fill?}',[advertControllers::class, 'filter']);

/* Route::get('advert{id}?', function ($id = null) {
    return "work $id";
}); */

/*Route::get('advert/{id}', function ($id) {
    return Advert::find($id);
})->name('advert.show');*/

Route::get('users/fill{id}', function ($id) {
    return User::find($id);
})->name('user.show');

Route::get('adverts/{anuncio}/edit', [advertControllers::class, 'edit'])->name('adverts.edit');
Route::middleware(['auth:sanctum', 'verified'])->get('/advert/{show}',[ AdvertController::class, 'show'])->name('advert.show');
Route::middleware(['auth:sanctum', 'verified'])->post('/advert/comment',[ AdvertController::class, 'storeComment'])->name('advert.storeComment');
