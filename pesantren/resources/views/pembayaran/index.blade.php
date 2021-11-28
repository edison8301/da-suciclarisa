@extends('layouts.main')


@section('content')



<?php

use App\Models\Pembayaran;

$queryPembayaran = Pembayaran::query();
$arrayPembayaran = $queryPembayaran->get();

?>

<div class="container">
	<div class="row">
		<div class="col-12">


			<h1>Data Pembayaran</h1>

			<div style="margin-bottom: 20px">
				<a href="<?= url('/pembayaran/create'); ?>" class="btn btn-success">Tambah Data Pembayaran</a>
			</div>

			<table border="1" cellspacing="0" class="table table-bordered">
				<tr>
					<th>No</th>
					<th>Id Siswa</th>
					<th>Tanggal Pembayaran</th>
					<th>Bulan</th>
					<th>Tahun</th>
					<th>Jumlah</th>
					<th>Aksi</th>
				</tr>
				<?php $no=1; ?>
				<?php foreach ($arrayPembayaran as $pembayaran)  { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $pembayaran->id_siswa; ?></td>
						<td><?= $pembayaran->tanggal_pembayaran; ?></td>
						<td><?= $pembayaran->bulan; ?></td>
						<td><?= $pembayaran->tahun; ?></td>
						<td><?= $pembayaran->jumlah; ?></td>
						<td>
							<a href="<?= url("/pembayaran/detail?id=$pembayaran->id"); ?>">Detail</a> |
							<a href="<?= url("/pembayaran/ubah?id=$pembayaran->id"); ?>">Ubah</a> |
							<a href="<?= url("/pembayaran/hapus?id=$pembayaran->id");  ?>">Hapus</a>
						</td>
					</tr>
					<?php $no = $no + 1;?>
				<?php } ?>
			</table>
			
		</div>
	</div>
</div>



@endsection