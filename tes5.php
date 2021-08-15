<?php

$nama = $_GET["nama"];
$nama = strtoupper($nama); //function converts a string to uppercase

function pangkat($nilai) {
	$hasil = $nilai * $nilai;
	return $hasil;
}

$angka = $_GET["angka"];
$angka = pangkat($angka);

print $angka;

print $nama;

?>