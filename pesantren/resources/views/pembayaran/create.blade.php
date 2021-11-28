@extends('layouts.main')


@section('content')

<?php

use App\Models\Pembayaran;

$id_siswa = $_GET['id_siswa'];

?>


<div class="container">
	<div class="row">
		<div class="col-3">


		<h2>Pembayaran SPP</h2>

			<form action="<?php print url('/pembayaran/tambah-proses'); ?>" method="get">

				<input type="hidden" name="id_siswa" value="<?php print $id_siswa ; ?>">
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