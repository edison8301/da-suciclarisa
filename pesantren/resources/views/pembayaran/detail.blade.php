@extends('layouts.main')

@section('content')


<?php

use App\Models\Pembayaran;

$id_pembayaran = $_GET['id'];

$queryPembayaran = Pembayaran::query();
$queryPembayaran->where('id','=',$id_pembayaran);

$pembayaran = $queryPembayaran->first();

?>

<div class="container">
	<div class="row">
		<div class="col-6">

			<h1>Detail Pembayaran</h1>

			<table class="table table-bordered">
				<tr>
					<td>Id Pembayaran</td>
					<td><?= $pembayaran->id_siswa; ?></td>
				</tr>
				<tr>
					<td>Tanggal Pembayaran</td>
					<td><?= $pembayaran->tanggal_pembayaran; ?></td>
				</tr>
				<tr>
					<td>Bulan</td>
					<td><?= $pembayaran->bulan; ?></td>
				</tr>
				<tr>
					<td>Tahun</td>
					<td><?= $pembayaran->tahun; ?></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><?= $pembayaran->jumlah; ?></td>
				</tr>
			</table>

			<br/>

			<div>
				<a href="<?= url('/pembayaran/index'); ?>" class="btn btn-primary">Kembali ke Data Pembayaran</a>
			</div>
		</div>
	</div>
</div>

@endsection