@extends('layouts.main')


@section('content')



<?php

use App\Models\Siswa;

$query = Siswa::query();
$arraySiswa = $query->get();

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
					<th>Aksi</th>
				</tr>
				<?php $no=1; ?>
				<?php foreach ($arraySiswa as $siswa) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $siswa->nama; ?></td>
						<td><?= $siswa->nisn; ?></td>
						<td><?= $siswa->alamat; ?></td>
						<td>
							<a href="<?= url("/siswa/detail?id=$siswa->id"); ?>">Detail</a> |
							<a href="<?= url("/siswa/ubah?id=$siswa->id"); ?>">Ubah</a> |
							<a href="<?= url("/siswa/hapus?id=$siswa->id");  ?>">Hapus</a>
						</td>
					</tr>
					<?php $no = $no + 1; ?>
				<?php } ?>
			</table>
			
		</div>
	</div>
</div>



@endsection