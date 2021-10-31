<h1>Latihan 4 Hapus data</h1>

<?php

use \App\Models\Siswa;

$query = Siswa::query();
$query->where('id',"=","1");


$siswa = $query->first();

if ($siswa !== null) {
	$siswa->delete();
}

?>