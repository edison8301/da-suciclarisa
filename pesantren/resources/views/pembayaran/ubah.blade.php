@extends('layouts.main')


@section('content')



<?php

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

			<tr>
				<form action="<?php print url('/pembayaran/update'); ?>" method="get">
					<input type="hidden" value="<?php print $pembayaran['id'];?>" name="id">
					Id Siswa<br>
					<input value="<?php print $pembayaran['id_siswa'];?>" name="id_siswa">
					<br/>
					<br/>
					Tanggal Pembayaran<br>
					<input value="<?php print $pembayaran['tanggal_pembayaran'];?>" name="tanggal_pembayaran">
					<br/>
					<br/>
					Bulan<br/>
					<input value="<?php print $pembayaran['bulan'];?>" name="bulan">
					<br/>
					<br/>
					Tahun<br>
					<input value="<?php print $pembayaran['tahun'];?>" name="tahun">
					<br/>
					<br/>
					Jumlah<br>
					<input value="<?php print $pembayaran['jumlah'];?>" name="jumlah">
					<br/>
					<br/>
					<button class="btn btn-primary">Simpan Perubahan</button>
				</form>
			</tr>
		</div>
	</div>
</div>



@endsection