<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\MahasiswaController;

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

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('/', DosenController::class);

Route::prefix('mahasiswa')->group(function () {
    Route::get('/take/{mahasiswa}', [MahasiswaController::class, 'take'])->name('mahasiswas.take');
    Route::post('/take/{mahasiswa}', [MahasiswaController::class, 'takeStore'])->name('mahasiswas.takeStore');
});
