<?php

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


Route::get('/', [\App\Http\Controllers\MatakuliahController::class,'index'])
    ->name('matakuliah.index');
Route::POST('/matakuliah/simpan',[\App\Http\Controllers\MatakuliahController::class,'simpan'])
->name('matakuliah.simpan');
