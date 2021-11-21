@extends('layouts.main')

@section('content')


<?php

use App\Models\Guru;

$id = $_GET['id'];

$query = Guru::query();
$query->where('id','=',$id);

$guru = $query->first();

?>

<div class="container">
	<div class="row">
		<div class="col-12">

			<h1>Detail Guru</h1>


			<table border="1" cellspacing="0">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?= $guru->nama; ?></td>
				</tr>
				<tr>
					<td>NIP</td>
					<td>:</td>
					<td><?= $guru->nip; ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?= $guru->jenis_kelamin; ?></td>
				</tr>
				<tr>
					<td>Jenjang Pendidikan</td>
					<td>:</td>
					<td><?= $guru->jenjang_pendidikan; ?></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><?= $guru->jurusan; ?></td>
				</tr>
			</table>

			<br/>

			<div>
				<a href="<?= url('/guru/index'); ?>" class="btn btn-primary">Kembali ke Daftar Guru</a>
			</div>
		</div>
	</div>
</div>
@endsection