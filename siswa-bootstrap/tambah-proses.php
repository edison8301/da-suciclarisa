<?php include('header.php'); ?>
<div class="container">
	<h1>Data Berhasil Disimpan</h1>
	<div class="row">
		<div class="col-12">
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "pesantren2";

$koneksi = mysqli_connect($server, $username, $password, $database);

$nama = $_GET["nama"];
$nisn = $_GET["nisn"];
$alamat = $_GET["alamat"];
$jenis_kelamin = $_GET["jenis_kelamin"];

$perintah = "INSERT INTO siswa (id, nama, nisn, alamat, jenis_kelamin) VALUES (NULL, '$nama', '$nisn', '$alamat', '$jenis_kelamin');";
$hasil = mysqli_query($koneksi, $perintah);

?>

<a href="index.php" class="btn btn-primary">Lihat Data Semua Siswa</a>
<?php include('footer.php'); ?>