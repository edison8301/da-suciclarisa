<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GuruController extends Controller {
	public function index() {
		return view('guru/index');
	}

	public function tambah() {
		return view('guru/tambah');
	}

	public function tambahProses() {
		return view('guru/tambah-proses');
	}

	public function ubah() {
		return view('guru/ubah');
	}

	public function ubahProses() {
		return view('guru/ubah-proses');
	}

	public function hapus() {
		return view('guru/hapus');
	}
	
	public function detail() {
		return view('guru/detail');
	}

}


?>