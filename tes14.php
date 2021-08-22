<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "pesantren2";

$koneksi = mysqli_connect($server, $username, $password, $database);

$nama = $_GET["nama"];
$nisn = $_GET["nisn"];
$alamat = $_GET["alamat"];

$perintah = "INSERT INTO siswa (id, nama, nisn, alamat) VALUES (NULL, '$nama', '$nisn', '$alamat');";
$hasil = mysqli_query($koneksi, $perintah);

?>