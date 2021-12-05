@extends('layouts.main')


@section('content')


<?php

use App\Models\Guru;

$query = Guru::query();
$arrayGuru = $query->get();

?>

<div class="container">
	<div class="row">
		<div class="col-12">

			<h1>Daftar Guru</h1>

			<div style="margin-bottom: 20px;">
				<a href="<?= url('/guru/tambah'); ?>" class="btn btn-primary">Tambah Guru</a>
			</div>

			<table border="1" cellspacing="0" class="table table-hover">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>NIP</th>
					<th>Jenis Kelamin</th>
					<th>Aksi</th>
				</tr>
				<?php $no=1; ?>
				<?php foreach ($arrayGuru as $guru) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $guru->nama; ?></td>
						<td><?= $guru->nip; ?></td>
						<td><?= $guru->jenis_kelamin; ?></td>
						<td>
							<a href="<?= url("/guru/detail?id=$guru->id"); ?>">Detail</a> |
							<a href="<?= url("/guru/ubah?id=$guru->id"); ?>">Ubah</a> |
							<a href="<?= url("/guru/hapus?id=$guru->id");  ?>">Hapus</a>
						</td>
					</tr>
					<?php $no = $no + 1; ?>
				<?php } ?>
			</table>
			</div>
	</div>
</div>



@endsection