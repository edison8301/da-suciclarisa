<?php

//Tahap 1 : Membuat koneksi dengan database
$server = "localhost";
$username = "root";
$password = "";
$database = "pesantren2";

$koneksi = mysqli_connect($server, $username, $password, $database);

//Tahap 2 : Perintah create data ke database
$perintah = "INSERT INTO siswa (id, nama, nisn, alamat) VALUES (NULL, 'Ani', '105', 'Bogor');";
$hasil = mysqli_query($koneksi, $perintah);



?>