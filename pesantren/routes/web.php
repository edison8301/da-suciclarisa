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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', function () {
    return view('siswa/index');
});

Route::get('/siswa/index', function () {
    return view('siswa/index');
});

Route::get('/siswa/tambah', function () {
    return view('siswa/tambah');
});

Route::get('/siswa/tambah-proses', function () {
    return view('siswa/tambah-proses');
});

Route::get('/guru', function () {
    return view('guru/index');
});

Route::get('/guru/index', function () {
    return view('guru/index');
});

Route::get('/guru/tambah', function () {
    return view('guru/tambah');
});

Route::get('/guru/detail', function () {
    return view('guru/detail');
});

Route::get('/guru/hapus', function () {
    return view('guru/hapus');
});

Route::get('/guru/tambah-proses', function () {
    return view('guru/tambah-proses');
});


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