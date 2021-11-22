@extends('layouts.main')


@section('content')


<?php

use App\Models\Siswa;
use App\Models\Pembayaran;

$id = $_GET['id_siswa'];

$query = Siswa::query();
$query->where('id','=',$id);

$siswa = $query->first();

$queryPembayaran = Pembayaran::query();
$queryPembayaran->where('id_siswa','=',$id);

$arrayPembayaran = $queryPembayaran->get();

?>
<div class="container">
	<div class="row">
		<div class="col-3">

			<h1>Identitas Siswa</h1>

			<table class="table">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?= $siswa->nama; ?></td>
				</tr>
				<tr>
					<td>NISN</td>
					<td>:</td>
					<td><?= $siswa->nisn; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?= $siswa->alamat; ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?= $siswa->jenis_kelamin; ?></td>
				</tr>
				<tr>
					<td>Golongan Darah</td>
					<td>:</td>
					<td><?= $siswa->golongan_darah; ?></td>
				</tr>
			</table>

			<h2>Pembayaran SPP</h2>
			<form action="<?php print url('/pembayaran/tambah-proses'); ?>" method="get">

				Tanggal<br>
				<input name="tanggal"><br/>
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