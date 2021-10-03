<?php

use App\Models\Siswa;

?>

<h1>Daftar Siswa</h1>

<?php print Siswa::tes(); ?>


<?php

$arraySiswa = Siswa::get() ;

foreach($arraySiswa as $siswa) {
	print $siswa->nama . " . " . $siswa->nisn . " . " . $siswa->alamat . " . " . $siswa->jenis_kelamin;
	print '<br/>';
}

?>