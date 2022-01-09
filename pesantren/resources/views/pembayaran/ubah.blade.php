@extends('layouts.main')


@section('content')



<?php

use App\Models\Siswa;

$query = Siswa::query();
$arraySiswa = $query->get();


use App\Models\Pembayaran;

$id_pembayaran = $_GET['id'];

$queryPembayaran = Pembayaran::query();
$queryPembayaran->where('id','=',$id_pembayaran);

$pembayaran = $queryPembayaran->first();
?>

<div class="container">
	<div class="row">
		<div class="col-12">

			<h1>Ubah Data Pembayaran</h1>

					@include('pembayaran/form',[
						'action' => url('/pembayaran/ubah-proses'),
						'pembayaran' => $pembayaran
					])
					

				</form>
			</tr>
		</div>
	</div>
</div>



@endsection