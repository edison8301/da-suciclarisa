<?php 

use App\Models\Siswa;

$siswa = new Siswa();

?>

@extends('layouts.main')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">

			<h1>Tambah Siswa</h1>

			@include('siswa/form',[
				'action' => url('/siswa/tambah-proses'),
				'siswa' => $siswa
			])

		</div>
	</div>
</div>

@endsection