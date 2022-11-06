<?php

use App\Http\Controllers\AdopcioneController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\NoticiaController;
use App\Mascota;
use App\Noticia;
use Illuminate\Support\Facades\Route;

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
    $noticias = Noticia::all();
    return view('inicio', compact('noticias'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('adoptar', function () {
    $mascotas = Mascota::all();
    return view('adoptar', compact('mascotas'));
})->name('adoptar');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::resource('mascotas', MascotaController::class)->middleware('auth');
Route::resource('noticias', NoticiaController::class)->middleware('auth');
Route::resource('adopciones', AdopcioneController::class)->middleware('auth');
