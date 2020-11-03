<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MahasiswaController;
use \App\Http\Controllers\MatakuliahController;

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
    return view('mahasiswa');
})->name('mahasiswa.index');

Route::get('/', [\App\Http\Controllers\MatakuliahController::class,'index'])
    ->name('mahasiswa.index');

    Route::get('/mahasiswa/hapus/{id}',[MahasiswaController::class,'hapus'])
        ->name('mahasiswa.hapus');

    Route::get('/mahasiswa/tampil/{id}',[MahasiswaController::class,'tampil'])
        ->name('mahasiswa.tampil');

    Route::post('/mahasiswa/simpan',[MahasiswaController::class,'simpan'])
        ->name('mahasiswa.simpan');

    Route::post('/mahasiswa/rubah/{id}',[MahasiswaController::class,'update'])
        ->name('mahasiswa.update');



Route::get('/', [\App\Http\Controllers\MatakuliahController::class,'index'])
    ->name('matakuliah.index');
Route::POST('/matakuliah/simpan',[\App\Http\Controllers\MatakuliahController::class,'simpan'])
->name('matakuliah.simpan');

Route::get('/matakuliah/hapus/{id}',[MatakuliahController::class,'hapus'])
 ->name('matakuliah.hapus');
Route::get('/matakuliah/tampil/{id}',[MatakuliahController::class,'tampil'])
 ->name('matakuliah.tampil');
 Route::POST('/matakuliah/rubah/{id}',[MatakuliahController::class,'update'])
 ->name('matakuliah.update');

