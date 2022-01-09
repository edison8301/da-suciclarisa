@extends('layouts.main')


@section('content')

<?php

use App\Models\Pembayaran;

$id_pembayaran = $_GET['id'];

$queryPembayaran = Pembayaran::query();
$queryPembayaran->where('id','=',$id_pembayaran);

$pembayaran = $queryPembayaran->first();

$pembayaran->id_siswa = $_GET["id_siswa"];
$pembayaran->tanggal_pembayaran = $_GET["tanggal_pembayaran"];
$pembayaran->bulan = $_GET["bulan"];
$pembayaran->tahun = $_GET["tahun"];
$pembayaran->jumlah = $_GET["jumlah"];
$pembayaran->save();

?>
<div class="container">
	<div class="row">
		<div class="col-12">

			<h4>Berhasil Diubah</h4>
			<br/>
			<a href="<?php print url ('/pembayaran/index/'); ?>">Kembali ke Data Siswa</a>
			</div>
	</div>
</div>



@endsection