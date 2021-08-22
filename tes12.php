<?php

//Tahap 1 : Membuat koneksi dengan database
$server = "localhost";
$username = "root";
$password = "";
$database = "pesantren2";

$koneksi = mysqli_connect($server, $username, $password, $database);

//Tahap 2 : Menarik data dari tabel
$perintah = "select * from siswa";
$hasil = mysqli_query($koneksi, $perintah);

//Tahap 3 : Menampilkan data pada layar
$array_siswa = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

foreach ($array_siswa as $siswa) {
	print $siswa["id"]."-".$siswa["nama"]."-".$siswa["nisn"]."-".$siswa["alamat"]."<br/>";
}

?>