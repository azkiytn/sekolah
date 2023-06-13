<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index']);
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index']);
Route::get('/mapel', [App\Http\Controllers\MapelController::class, 'index']);
Route::get('/jadwal', [App\Http\Controllers\JadwalController::class, 'index']);
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/nilai', [App\Http\Controllers\NilaiController::class, 'index']);
Route::get('/presensi', [App\Http\Controllers\PresensiController::class, 'index']);

Route::post('/simpan-data-guru', [App\Http\Controllers\GuruController::class, 'simpan']);
Route::get('{id}/edit-guru', [App\Http\Controllers\GuruController::class, 'edit']);
Route::post('update-guru/{id}', [App\Http\Controllers\GuruController::class, 'update']);
