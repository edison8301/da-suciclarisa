@extends('layouts.main')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">

			<h1>Tambah Siswa</h1>


			<form action="<?php print url('/siswa/tambah-proses'); ?>" method="get">

				Nama<br>
				<input name="nama"><br/>
				<br/>
				NISN<br>
				<input name="nisn"><br/>
				<br/>
				Alamat<br>
				<input name="alamat"><br/>
				<br/>
				Jenis Kelamin<br>
				<select name="jenis_kelamin">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
				<br/>
				<br/>
				Golongan Darah<br>
				<select name="golongan_darah">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="AB">AB</option>
					<option value="O">O</option>
				</select>
				<br/>
				<br/>
				<button class="btn btn-success">Simpan</button>

			</form>

		</div>
	</div>
</div>

@endsection