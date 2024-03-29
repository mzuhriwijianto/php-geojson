<?php

use App\Http\Controllers\MapsController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MapLocation;

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
Auth::routes();
Route::resource('maps', MapsController::class);

Auth::routes();
Route::resource('wisatas', WisataController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wisata', [App\Http\Controllers\WisataController::class, 'index'])->name('wisata');
Route::get('/wisata/create', [App\Http\Controllers\WisataController::class, 'create'])->name('create');
Route::get('/map', MapLocation::class);
