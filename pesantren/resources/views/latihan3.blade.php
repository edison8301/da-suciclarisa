<h1>Latihan 3</h1>

<?php

use \App\Models\Siswa;

$query = Siswa::query();
$query->where('golongan_darah',"=","A");

$arraySiswa = $query->get();

foreach($arraySiswa as $data) {
	print $data->id . " - " . $data->nama . " - " . $data->alamat . "<br/>";
}


?>