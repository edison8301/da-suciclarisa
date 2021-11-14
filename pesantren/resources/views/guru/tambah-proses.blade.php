<?php

use App\Models\Guru;

$guru = new Guru;
$guru->nama = $_GET["nama"];
$guru->nip = $_GET["nip"];
$guru->jenis_kelamin = $_GET["jenis_kelamin"];
$guru->jenjang_pendidikan = $_GET["jenjang_pendidikan"];
$guru->jurusan = $_GET["jurusan"];

$guru->save();

?>

<h1>Data Guru Berhasil Ditambahkan</h1>

<a href="<?php print url ('/guru/index/'); ?>">Kembali ke Daftar Guru</a>