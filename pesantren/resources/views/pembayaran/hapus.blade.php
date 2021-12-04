@extends('layouts.main')


@section('content')

<?php

use App\Models\Pembayaran;

$id_pembayaran = $_GET['id'];

$queryPembayaran = Pembayaran::query();
$queryPembayaran->where('id','=',$id_pembayaran);

$pembayaran = $queryPembayaran->first();

$pembayaran->delete();

?>

<div class="container">
	<div class="row">
		<div class="col-12">

			<div>
				<h4>Data Pembayaran Berhasil dihapus</h4>
				<h4><a href="<?= url('/pembayaran/index'); ?>" class="btn btn-success">Kembali ke Data Pembayaran</a></h4>
			</div>
		</div>
	</div>
</div>

@endsection