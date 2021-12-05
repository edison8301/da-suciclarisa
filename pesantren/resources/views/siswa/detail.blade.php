@extends('layouts.main')


@section('content')


<?php

use App\Models\Siswa;
use App\Models\Pembayaran;

$id = $_GET['id'];

$query = Siswa::query();
$query->where('id','=',$id);

$siswa = $query->first();

$queryPembayaran = Pembayaran::query();
$queryPembayaran->where('id_siswa','=',$id);

$arrayPembayaran = $queryPembayaran->get();

?>
<div class="container">
	<div class="row">
		<div class="col-6">

			<h1>Detail Siswa</h1>

			<table class="table table-bordered">
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
		</div>

			<div class="col-9">

			<h2>Pembayaran SPP</h2>

			<div style="margin-bottom: 20px">
				<a href="<?= url('/pembayaran/create?id_siswa='.$siswa->id); ?>" class="btn btn-primary">Tambah Data Pembayaran</a>
			</div>

			<table class="table table-hover">
				<tr class="table-active">
					<th>No</th>
					<th>Bulan</th>
					<th>Tahun</th>
					<th>Jumlah</th>
					<th>Tanggal Pembayaran</th>
				</tr>
				<?php $no =1 ; ?>
				<?php foreach($arrayPembayaran as $pembayaran) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $pembayaran->bulan; ?></td>
						<td><?= $pembayaran->tahun; ?></td>
						<td><?= $pembayaran->jumlah; ?></td>
						<td><?= $pembayaran->tanggal_pembayaran; ?></td>
					</tr>
				<?php $no = $no + 1; ?>
			<?php } ?>
			</table>

			<br/>

			<div>
				<a href="<?= url('/siswa/index'); ?>" class="btn btn-success">Kembali ke Daftar Siswa</a>
			</div>

		</div>
	</div>
</div>

@endsection