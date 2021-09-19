<?php include('header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-12">
			
			<form action="siswa/tambah-proses.php" method="GET">
				<div class="mb-3">
					<label class="form-label">Nama</label>
					<input class="form-control" name="nama">
				</div>
				<div class="mb-3">
					<label class="form-label">NISN</label>
					<input class="form-control" name="nisn">
				</div><div class="mb-3">
					<label class="form-label">Alamat</label>
					<input class="form-control" name="alamat">
				</div>
			</form>

			<button type="submit" class="btn btn-primary">
				Kirim Data
			</button>
			
		</div>
	</div>
</div>
<?php include('footer.php'); ?>