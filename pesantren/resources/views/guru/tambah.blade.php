@extends('layouts.main')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Tambah Guru</h1>

			<form action="<?php print url('/guru/tambah-proses'); ?>" method="get">

				Nama<br>
				<input name="nama"><br/>
				<br/>
				NIP<br>
				<input name="nip"><br/>
				<br/>
				Jenis Kelamin<br>
				<select name="jenis_kelamin">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
				<br/>
				<br/>
				Jenjang Pendidikan<br>
				<select name="jenjang_pendidikan">
					<option value="S1">S1</option>
					<option value="S2">S2</option>
				</select>
				<br/>
				<br/>
				Jurusan<br>
				<input name="jurusan"><br/>
				<br/>

				<button class="btn btn-success">Kirim</button>

			</form>

			</div>
	</div>
</div>

@endsection