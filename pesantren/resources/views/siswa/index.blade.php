@extends('layouts.main')


@section('content')



<?php

use App\Models\Siswa;
use App\Models\Pembayaran;

$query = Siswa::query();
$arraySiswa = $query->get();

$queryPembayaran = Pembayaran::query();
$arrayPembayaran = $queryPembayaran->get();

?>

<div class="container">
	<div class="row">
		<div class="col-12">


			<h1>Daftar Siswa</h1>

			<div style="margin-bottom: 20px;">
				<a href="<?= url('/siswa/tambah'); ?>" class="btn btn-primary">Tambah Siswa</a>
			</div>

			<table class="table table-hover">
				<tr class="table-primary">
					<th>No</th>
					<th>Nama</th>
					<th>NISN</th>
					<th>Alamat</th>
					<th>Total Pembayaran SPP</th>
					<th>Aksi</th>
				</tr>
				<?php $no=1; ?>
				<?php foreach ($arraySiswa as $siswa) { ?>
				<?php $total_pembayaran = 0; ?>
				<?php foreach($arrayPembayaran as $pembayaran) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $siswa->nama; ?></td>
						<td><?= $siswa->nisn; ?></td>
						<td><?= $siswa->alamat; ?></td>
						<td><?= $total_pembayaran; ?></td>
						<td>
							<a href="<?= url("/siswa/detail?id=$siswa->id"); ?>">Detail</a> |
							<a href="<?= url("/siswa/ubah?id=$siswa->id"); ?>">Ubah</a> |
							<a href="<?= url("/siswa/hapus?id=$siswa->id");  ?>">Hapus</a>
						</td>
					</tr>
				<?php $no = $no + 1; ?>
				<?php $total_pembayaran =$pembayaran->jumlah; ?>
				<?php } ?>
				<?php } ?>
			</table>
			
		</div>
	</div>
</div>



@endsection