<h1>Latihan 1</h1>

<?php


use \App\Models\Siswa;

$objectSiswa = new Siswa;

$objectSiswa->nama = "Suci";
$objectSiswa->nisn = "101";
$objectSiswa->alamat = "Bandung";
$objectSiswa->jenis_kelamin = "Perempuan";
$objectSiswa->golongan_darah = "A";

$objectSiswa->save();

?>