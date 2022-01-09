@extends('layouts.main')


@section('content')

<?php

use App\Models\Siswa;

$id = $_GET['id'];

$query = Siswa::query();
$query->where('id','=',$id);

$siswa = $query->first();

$siswa->nama = $_GET["nama"];
$siswa->nisn = $_GET["nisn"];
$siswa->alamat = $_GET["alamat"];
$siswa->jenis_kelamin = $_GET["jenis_kelamin"];
$siswa->golongan_darah = $_GET["golongan_darah"];
$siswa->save();

?>
<div class="container">
	<div class="row">
		<div class="col-12">

			<h4>Berhasil Diubah</h4>
			<br/>
			<a href="<?php print url ('/siswa/index/'); ?>">Kembali ke Daftar Siswa</a>
			</div>
	</div>
</div>



@endsection