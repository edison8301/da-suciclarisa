<?php include('header.php'); ?>
<div class="container">
	<h1>Tambah Data Siswa</h1>
	<div class="row">
		<div class="col-8">
<form action=tambah-proses.php method="get">
<a href="tes14.php"> </a>

	<div class="mb-3">
		<label class="form-label">Nama</label>
		<input class="form-control" name="nama">
	</div>
	<div class="mb-3">
		<label class="form-label">NISN</label>
		<input class="form-control" name="nisn">
	</div>
	<div class="mb-3">
		<label class="form-label">Alamat</label>
		<input class="form-control" name="alamat">
	</div>
	<div class="mb-3">
		<label class="form-label">Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>

	</div>
	<?php include('footer.php'); ?>

	<button class="btn btn-primary">Simpan Data Siswa</button>
	<a href="index.php" class="btn btn-warning">Lihat Data Semua Siswa</a>


</form>
<?php include('footer.php'); ?>