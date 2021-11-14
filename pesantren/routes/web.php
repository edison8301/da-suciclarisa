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

Route::get('/siswa', function () {
    return view('siswa/index');
});

Route::get('/siswa/index', function () {
    return view('siswa/index');
});

Route::get('/siswa/hapus', function () {
    return view('siswa/hapus');
});

Route::get('/siswa/detail', function () {
    return view('siswa/detail');
});

Route::get('/siswa/tambah', function () {
    return view('siswa/tambah');
});

Route::get('/siswa/tambah-proses', function () {
    return view('siswa/tambah-proses');
});

Route::get('/siswa/ubah', function () {
    return view('siswa/ubah');
});

Route::get('/siswa/update', function () {
    return view('siswa/update');
});


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