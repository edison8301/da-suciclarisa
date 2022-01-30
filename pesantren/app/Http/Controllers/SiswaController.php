<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiswaController extends Controller {
	public function index() {

		$query = Siswa::query();
		$arraySiswa = $query->get();

		$queryPembayaran = Pembayaran::query();
		$arrayPembayaran = $queryPembayaran->get();
		return view('siswa/index', [
			'arraySiswa' => $arraySiswa,
			'arrayPembayaran' => $arrayPembayaran,
		]);
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

	public function detail(Request $request) {
		$id = $request->get('id');

		$query = Siswa::query();
		$query->where('id','=',$id);

		$siswa = $query->first();

		$arrayPembayaran = $siswa->getArrayPembayaran();

		return view('siswa/detail', [
			'siswa' => $siswa,
			'arrayPembayaran' => $arrayPembayaran,
		]);
	}
}




?>