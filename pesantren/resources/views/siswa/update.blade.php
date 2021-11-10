<h1>Update Data</h1>

<?php

use App\Models\Siswa;

$siswa = new Siswa;
$siswa->nama = $_GET["nama"];
$siswa->nisn = $_GET["nisn"];
$siswa->alamat = $_GET["alamat"];
$siswa->jenis_kelamin = $_GET["jenis_kelamin"];
$siswa->golongan_darah = $_GET["golongan_darah"];
$siswa->save();

?>

<h4>Berhasil Ditambahkan</h4>
<br/>
<a href="<?php print url ('/siswa/index/'); ?>">Kembali ke Daftar Siswa</a>
