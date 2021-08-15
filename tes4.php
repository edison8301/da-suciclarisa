<?php

$angka1 = 10;
$angka2 = 15;
$operasi = $_GET["operasi"];

if($operasi == "tambah") {
	$angka3 = $angka1 + $angka2;
}

if($operasi == "kurang") {
	$angka3 = $angka1 - $angka2;
}

if($operasi == "kali") {
	$angka3 = $angka1 * $angka2;
}

if($operasi == "bagi") {
	$angka3 = $angka1 / $angka2;
}

print $angka3;

?>