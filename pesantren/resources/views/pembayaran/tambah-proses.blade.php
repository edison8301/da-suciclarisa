@extends('layouts.main')


@section('content')

<?php


use App\Models\Pembayaran;

$pembayaran = new Pembayaran;
$pembayaran->tanggal_pembayaran = $_GET["tanggal"];
$pembayaran->bulan = $_GET["bulan"];
$pembayaran->tahun = $_GET["tahun"];
$pembayaran->jumlah = $_GET["jumlah"];

$pembayaran->save();


?>

<div class="container">
	<div class="row">
		<div class="col-12">

			<h4>Berhasil Disimpan</h4>
			<br/>
			<a href="<?php print url ('/pembayaran/index/'); ?>" class="btn btn-success">Kembali ke Daftar Siswa</a>

		</div>
	</div>
</div>

@endsection
