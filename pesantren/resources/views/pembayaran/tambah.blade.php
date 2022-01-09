@extends('layouts.main')


@section('content')

<?php

use App\Models\Pembayaran;
use App\Models\Siswa;

if (isset($_GET["id_siswa"]) == true) {
	$id_siswa = $_GET['id_siswa'];
}

$query = Siswa::query();
$arraySiswa = $query->get();

$pembayaran = new Pembayaran();

?>


<div class="container">
	<div class="row">
		<div class="col-3">


		<h2>Pembayaran SPP</h2>

			@include('pembayaran/form',[
				'action' => url('/pembayaran/tambah-proses'),
				'pembayaran' => $pembayaran
			])

		</div>
	</div>
</div>


@endsection