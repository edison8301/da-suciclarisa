<?php include('header.php'); ?>
<div class="container">
	<h1>Tambah Data Siswa</h1>
	<div class="row">
		<div class="col-8">
<form action=tambah-proses.php method="get">
<a href="tes14.php"> </a>

	Nama<br>
	<input name="nama"><br/>
	NISN<br>
	<input name="nisn"><br/>
	Alamat<br>
	<input name="alamat"><br/>
	<br/>
	<?php include('footer.php'); ?>

	<button class="btn btn-primary">Simpan Data Siswa</button>
	<a href="index.php" class="btn btn-warning">Lihat Data Semua Siswa</a>


</form>
<?php include('footer.php'); ?>