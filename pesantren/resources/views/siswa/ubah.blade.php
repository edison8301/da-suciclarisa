<?php

use App\Models\Siswa;

$id = $_GET['id'];

$query = Siswa::query();
$query->where('id','=',$id);

$siswa = $query->first();

?>


@extends('layouts.main')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-12">

			<h1>Ubah Data Siswa</h1>
			
			@include('siswa/form',[
				'action' => url('/siswa/ubah-proses'),
				'siswa' => $siswa
			])
			

		</div>
	</div>
</div>



@endsection