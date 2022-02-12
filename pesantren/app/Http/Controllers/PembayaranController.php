<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PembayaranController extends Controller {
	public function index() {
		return view('pembayaran/index');
	}
	public function tambah() {
		return view('pembayaran/tambah');
	}
	public function tambahProses() {
		return view('pembayaran/tambah-proses');
	}
	public function ubah() {
		return view('pembayaran/ubah');
	}
	public function ubahProses() {
		return view('pembayaran/ubah-proses');
	}
	public function hapus() {
		return view('pembayaran/hapus');
	}
	public function detail() {
		return view('pembayaran/detail');
	}
}

?>