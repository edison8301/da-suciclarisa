<?php

use App\Models\Siswa;

$siswa = new Siswa;
$siswa->nama = $_GET["nama"];
$siswa->nisn = $_GET["nisn"];
$siswa->alamat = $_GET["alamat"];
$siswa->save();

?>

<h1>Tambah Siswa Proses</h1>

<a href="<?php print url ('/siswa/index/'); ?>">Daftar Siswa</a>

