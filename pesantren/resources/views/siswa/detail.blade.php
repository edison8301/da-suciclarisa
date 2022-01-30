@extends('layouts.main')


@section('content')


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
				<a href="<?= url('/pembayaran/tambah?id_siswa='.$siswa->id); ?>" class="btn btn-primary">Tambah Data Pembayaran</a>
			</div>

			<table class="table table-hover">
				<tr style="text-align: center" class="table-active">
					<th>No</th>
					<th>Bulan</th>
					<th>Tahun</th>
					<th>Jumlah</th>
					<th>Tanggal Pembayaran</th>
					<th>Aksi</th>
				</tr>
				<?php $no =1 ; ?>
				<?php $total_pembayaran = 0; ?>
				<?php foreach($arrayPembayaran as $pembayaran) { ?>
					<tr>
						<td style="text-align: center"><?= $no; ?></td>
						<td style="text-align: center"><?= $pembayaran->bulan; ?></td>
						<td style="text-align: center"><?= $pembayaran->tahun; ?></td>
						<td style="text-align: right;"><?= $pembayaran->jumlah; ?></td>
						<td style="text-align: center"><?= $pembayaran->tanggal_pembayaran; ?></td>
						<td>
							<a href="<?= url("/pembayaran/ubah?id=$pembayaran->id"); ?>">Ubah</a> |
							<a href="<?= url("/pembayaran/hapus?id=$pembayaran->id");  ?>">Hapus</a>
						</td>
					</tr>
				<?php $total_pembayaran = $total_pembayaran + $pembayaran->jumlah; ?>
				<?php $no = $no + 1; ?>

			<?php } ?>

			<tr>
				<th></th>
				<th>Total</th>
				<th></th>
				<th style="text-align: right;"> <?= $total_pembayaran; ?></th>
				<th></th>
			</tr>
			</table>

			<div>
				<a href="<?= url('/siswa/index'); ?>" class="btn btn-success">Kembali ke Daftar Siswa</a>
			</div>

		</div>
	</div>
</div>

@endsection