@extends('layouts.main')


@section('content')



<?php

use App\Models\Siswa;

$id = $_GET['id'];

$query = Siswa::query();
$query->where('id','=',$id);

$siswa = $query->first();

?>
<div class="container">
	<div class="row">
		<div class="col-12">

			<h1>Detail Siswa</h1>

			<table border="1" cellspacing="0" class="table table-bordered">
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

			<br/>

			<div>
				<a href="<?= url('/siswa/index'); ?>" class="btn btn-success">Kembali ke Daftar Siswa</a>
			</div>

		</div>
	</div>
</div>

@endsection