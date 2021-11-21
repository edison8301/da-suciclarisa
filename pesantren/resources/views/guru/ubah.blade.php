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

			<h1>Ubah Data Guru</h1>

			<tr>
				<form action="<?php print url('/guru/update'); ?>" method="get">
					<input type="hidden" value="<?php print $guru['id'];?>" name="id">
					Nama<br>
					<input value="<?php print $guru['nama'];?>" name="nama"><br/>
					<br/>
					NIP<br>
					<input value="<?php print $guru['nip'];?>" name="nip"><br/>
					<br/>
					Jenis Kelamin<br/>
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
					<input value="<?php print $guru['jurusan'];?>" name="jurusan"><br/>
					<br/>
					<button class="btn btn-primary">Simpan Perubahan</button>
				</form>
			</tr>
		</div>
	</div>
</div>



@endsection