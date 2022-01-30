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



Route::get('/siswa/index', [\App\Http\Controllers\SiswaController::class,'index']);
Route::get('/siswa/hapus', [\App\Http\Controllers\SiswaController::class,'hapus']);
Route::get('/siswa/detail', [\App\Http\Controllers\SiswaController::class,'detail']);
Route::get('/siswa/tambah', [\App\Http\Controllers\SiswaController::class,'tambah']);
Route::get('/siswa/tambah-proses', [\App\Http\Controllers\SiswaController::class,'tambahProses']);
Route::get('/siswa/ubah', [\App\Http\Controllers\SiswaController::class,'ubah']);
Route::get('/siswa/ubah-proses', [\App\Http\Controllers\SiswaController::class,'ubahProses']);

//Guru

Route::get('/guru', function () {
    return view('guru/index');
});

Route::get('/guru/index', function () {
    return view('guru/index');
});

Route::get('/guru/hapus', function () {
    return view('guru/hapus');
});

Route::get('/guru/detail', function () {
    return view('guru/detail');
});

Route::get('/guru/tambah', function () {
    return view('guru/tambah');
});

Route::get('/guru/tambah-proses', function () {
    return view('guru/tambah-proses');
});

Route::get('/guru/ubah', function () {
    return view('guru/ubah');
});

Route::get('/guru/update', function () {
    return view('guru/update');
});


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


//Pembayaran


Route::get('/pembayaran', function () {
    return view('pembayaran/index');
});

Route::get('/pembayaran/index', function () {
    return view('pembayaran/index');
});

Route::get('pembayaran/tambah', function () {
    return view('pembayaran/tambah');
});

Route::get('pembayaran/tambah-proses', function () {
    return view('pembayaran/tambah-proses');
});

Route::get('pembayaran/ubah', function () {
    return view('pembayaran/ubah');
});

Route::get('pembayaran/detail', function () {
    return view('pembayaran/detail');
});

Route::get('pembayaran/hapus', function () {
    return view('pembayaran/hapus');
});

Route::get('pembayaran/ubah-proses', function () {
    return view('pembayaran/ubah-proses');
});