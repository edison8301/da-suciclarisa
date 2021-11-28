@extends('layouts.main')


@section('content')

<?php

use App\Models\Pembayaran;
use App\Models\Siswa;

if (isset($_GET["id_siswa"]) == true) {
	$id_siswa = $_GET['id_siswa'];
}

$query = Siswa::query();
$arraySiswa = $query->get();

?>


<div class="container">
	<div class="row">
		<div class="col-3">


		<h2>Pembayaran SPP</h2>

			<form action="<?php print url('/pembayaran/tambah-proses'); ?>" method="get">

				<?php if (isset($_GET['id_siswa']) == true) { ?>
					<input type="hidden" name="id_siswa" value="<?php print $id_siswa ; ?>">
				<?php } ?>

				<?php if (isset($_GET['id_siswa']) == false) { ?>
					Nama<br/>
					<select name="id_siswa">
						<?php foreach($arraySiswa as $siswa) { ?>
							<option value="<?= $siswa->id; ?>">
								<?= $siswa->nama; ?>
							</option>
						<?php } ?>
					</select>
				<?php } ?>
				<br/>
				<br/>
				Tanggal<br>
				<input name="tanggal_pembayaran"><br/>
				<br/>
				Bulan<br>
				<input name="bulan"><br/>
				<br/>
				Tahun<br>
				<input name="tahun"><br/>
				<br/>
				Jumlah<br>
				<input name="jumlah"><br/>
				
				<br/>
				<button class="btn btn-success">Simpan</button>

			</form>
		</div>
	</div>
</div>


@endsection