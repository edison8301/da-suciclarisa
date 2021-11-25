@extends('layouts.main')


@section('content')

<?php

use App\Models\Pembayaran;


$pembayaran = new Pembayaran;
$pembayaran->id_siswa = $_GET["id_siswa"];
$pembayaran->bulan = $_GET["bulan"];
$pembayaran->tahun = $_GET["tahun"];
$pembayaran->tanggal_pembayaran = $_GET["tanggal_pembayaran"];
$pembayaran->jumlah = $_GET["jumlah"];

$pembayaran->save();


?>

<div class="container">
	<div class="row">
		<div class="col-12">

			<h4>Berhasil Disimpan</h4>
			<br/>
		</div>
	</div>
</div>

@endsection
