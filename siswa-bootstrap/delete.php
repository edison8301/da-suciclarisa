<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "pesantren2";

$koneksi = mysqli_connect($server, $username, $password, $database);

$id = $_GET["id"];

$perintah = "DELETE FROM siswa WHERE id = $id";

$hasil = mysqli_query($koneksi, $perintah);

?>