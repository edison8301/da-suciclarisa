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

//Siswa

Route::get('/siswa/index', [\App\Http\Controllers\SiswaController::class,'index']);
Route::get('/siswa/hapus', [\App\Http\Controllers\SiswaController::class,'hapus']);
Route::get('/siswa/detail', [\App\Http\Controllers\SiswaController::class,'detail']);
Route::get('/siswa/tambah', [\App\Http\Controllers\SiswaController::class,'tambah']);
Route::get('/siswa/tambah-proses', [\App\Http\Controllers\SiswaController::class,'tambahProses']);
Route::get('/siswa/ubah', [\App\Http\Controllers\SiswaController::class,'ubah']);
Route::get('/siswa/ubah-proses', [\App\Http\Controllers\SiswaController::class,'ubahProses']);

//Guru

Route::get('/guru/index', [\App\Http\Controllers\GuruController::class,'index']);
Route::get('/guru/hapus', [\App\Http\Controllers\GuruController::class,'hapus']);
Route::get('/guru/detail', [\App\Http\Controllers\GuruController::class,'detail']);
Route::get('/guru/tambah', [\App\Http\Controllers\GuruController::class,'tambah']);
Route::get('/guru/tambah-proses', [\App\Http\Controllers\GuruController::class,'tambahProses']);
Route::get('/guru/ubah', [\App\Http\Controllers\GuruController::class,'ubah']);
Route::get('/guru/ubah-proses', [\App\Http\Controllers\GuruController::class,'ubahProses']);

//Pembayaran

Route::get('/pembayaran/index', [\App\Http\Controllers\PembayaranController::class,'index']);
Route::get('/pembayaran/hapus', [\App\Http\Controllers\PembayaranController::class,'hapus']);
Route::get('/pembayaran/detail', [\App\Http\Controllers\PembayaranController::class,'detail']);
Route::get('/pembayaran/tambah', [\App\Http\Controllers\PembayaranController::class,'tambah']);
Route::get('/pembayaran/tambah-proses', [\App\Http\Controllers\PembayaranController::class,'tambahProses']);
Route::get('/pembayaran/ubah', [\App\Http\Controllers\PembayaranController::class,'ubah']);
Route::get('/pembayaran/ubah-proses', [\App\Http\Controllers\PembayaranController::class,'ubahProses']);


//Latihan

Route::get('/latihan1', function () {
    return view('latihan1');
});

Route::get('/latihan2', function () {
    return view('latihan2');
});

Route::get('/latihan3', function () {
    return view('latihan3');
});

Route::get('/latihan4', function () {
    return view('latihan4');
});


?>