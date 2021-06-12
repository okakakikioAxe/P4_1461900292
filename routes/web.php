<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\JenisBukuController;
use App\Http\Controllers\RakBukuController;
use App\Http\Controllers\UserController;

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

Route::resource('buku'  , BukuController::class);
Route::resource('jenis' , JenisBukuController::class);
Route::resource('rak'   , RakBukuController::class);
Route::resource('user'  , UserController::class);

Route::post('buku/search'   , [BukuController::class , 'find'])->name('buku.search');
Route::post('buku/excel'      , [BukuController::class , 'excel'])->name('buku.excel');

Route::post('jenis/search'   , [JenisBukuController::class , 'find'])->name('jenis.search');
Route::post('jenis/excel'      , [JenisBukuController::class , 'excel'])->name('jenis.excel');

Route::post('rak/search'   , [RakBukuController::class , 'find'])->name('rak.search');
Route::post('rak/excel'      , [RakBukuController::class , 'excel'])->name('rak.excel');
