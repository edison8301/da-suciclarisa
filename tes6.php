<?php

$bulan = $_GET["bulan"]; //http://localhost/latihan/tes6.php?bulan=1

if($bulan == "1") {
	$bulan1 = "Januari";
}

if($bulan == "2") {
	$bulan1 = "Februari";
}

if ($bulan == "3") {
	$bulan1 = "Maret";
}

print $bulan1;

?>