@extends('layouts.main')


@section('content')

<?php

use App\Models\Pembayaran;

$id = $_GET['id_siswa'];

$queryPembayaran = Pembayaran::query();
$queryPembayaran->where('id_siswa','=',$id);

$arrayPembayaran = $queryPembayaran->first();

?>



<div class="container">
	<div class="row">
		<div class="col-3">


		<h2>Pembayaran SPP</h2>

			<form action="<?php print url('/pembayaran/tambah-proses/{id_siswa}'); ?>" method="get">

				<input type="hidden" value="<?php print $arrayPembayaran['id_siswa'];?>" name="id_siswa">
				Tanggal<br>
				<input name="tanggal_pembayaran"><br/>
				<br/>
				Bulan<br>
				<input name="bulan"><br/>
				<br/>
				Tahun<br>
				<input name="tahun"><br/>
				<br/>
				Jumlah<br>
				<input name="jumlah"><br/>
				
				<br/>
				<button class="btn btn-success">Simpan</button>

			</form>
		</div>
	</div>
</div>


@endsection