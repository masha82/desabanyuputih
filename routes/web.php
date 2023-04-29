<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('/', \App\Http\Controllers\BerandaController::class);

Auth::routes(['register' => false]);
// tabel
Route::get('/news/data', [App\Http\Controllers\BeritaController::class, 'anyData'])->name('news.data');
Route::get('/gallery/data', [App\Http\Controllers\GaleriController::class, 'anyData'])->name('gallery.data');
Route::get('/info/data', [App\Http\Controllers\PengumumanController::class, 'anyData'])->name('info.data');
Route::get('/awal/data', [App\Http\Controllers\HeaderController::class, 'anyData'])->name('awal.data');
Route::get('/report/data', [App\Http\Controllers\LaporanController::class, 'anyData'])->name('report.data');
Route::get('/about/data', [App\Http\Controllers\TentangController::class, 'anyData'])->name('about.data');

//resources
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('news', \App\Http\Controllers\BeritaController::class);
Route::resource('gallery', \App\Http\Controllers\GaleriController::class);
Route::resource('info', \App\Http\Controllers\PengumumanController::class);
Route::resource('awal', \App\Http\Controllers\HeaderController::class);
Route::resource('report', \App\Http\Controllers\LaporanController::class);
Route::resource('about', \App\Http\Controllers\TentangController::class);
