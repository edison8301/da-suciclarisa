<?php

use App\Models\Guru;

?>

<h1>Daftar Guru</h1>

<a href="<?php print url ('/guru/index/'); ?>" method="get">

<?php print Guru::tes(); ?>


<?php

$arrayGuru = Guru::get() ;

foreach($arrayGuru as $guru) {
	print $guru->nama . " . " . $guru->nip . " . " . $guru->jenis_kelamin . " . " . $guru->jenjang_pendidikan. " . " . $guru->jurusan;
	print '<br/>';
}

?>