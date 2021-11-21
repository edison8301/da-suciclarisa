@extends('layouts.main')


@section('content')



<div class="container">
	<div class="row">
		<div class="col-12">

			<h1>Hapus Siswa</h1>

			<?php

			use App\Models\Siswa;

			$id = $_GET['id'];

			$query = Siswa::query();
			$query->where('id','=',$id);

			$siswa = $query->first();

			$siswa->delete();

			?>

			<div>
				<h4>Siswa Berhasil dihapus</h4>
				<h4><a href="<?= url('/siswa/index'); ?>" class="btn btn-success">Kembali ke Daftar Siswa</a></h4>
			</div>
		</div>
	</div>
</div>

@endsection