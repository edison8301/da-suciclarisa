<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class SiswaController extends Controller {
	public function index() {
		return view('siswa/index');
	}

	public function tambah() {
		return view('siswa/tambah');
	}

	public function tambahProses() {
		return view('siswa/tambah-proses');
	}

	public function ubah() {
		return view('siswa/ubah');
	}

	public function ubahProses() {
		return view('siswa/ubah-proses');
	}
	public function hapus() {
		return view('siswa/hapus');
	}

	public function detail() {
		return view('siswa/detail');
	}
}




?>