@extends('layouts.main')


@section('content')

<?php

use App\Models\Guru;

$id = $_GET['id'];

$query = Guru::query();
$query->where('id','=',$id);

$guru = $query->first();

$guru->delete();

?>


<div class="container">
	<div class="row">
		<div class="col-12">

			<div>
				<h4>Data Guru Berhasil dihapus</h4>
				<h4><a href="<?= url('/guru/index'); ?>" class="btn btn-info">Kembali ke Daftar Guru</a></h4>
			</div>
		</div>
	</div>
</div>

@endsection