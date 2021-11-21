@extends('layouts.main')


@section('content')

<?php

use App\Models\Guru;

$id = $_GET['id'];

$query = Guru::query();
$query->where('id','=',$id);

$siswa = $query->first();

$siswa->nama = $_GET["nama"];
$siswa->nip = $_GET["nip"];
$siswa->jenis_kelamin = $_GET["jenis_kelamin"];
$siswa->jenjang_pendidikan = $_GET["jenjang_pendidikan"];
$siswa->jurusan = $_GET["jurusan"];
$siswa->save();

?>
<div class="container">
	<div class="row">
		<div class="col-12">

			<h4>Berhasil Diubah</h4>
			<br/>
			<a href="<?php print url ('/guru/index/'); ?>">Kembali ke Daftar Guru</a>
			</div>
	</div>
</div>



@endsection