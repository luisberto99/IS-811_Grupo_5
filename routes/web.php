<?php

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


//Route::get('adverts/{id?}', advertControllers::class );

/* Route::get('advert/{id}?', function ($id = null) {
    return "work $id";
}); */

Route::get('advert/{id}', function ($id) {
    return Advert::find($id);
})->name('advert.show');

Route::get('users/{id}', function ($id) {
    return User::find($id);
})->name('user.show');
