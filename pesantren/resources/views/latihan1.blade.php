<h1>Latihan 1</h1>

<?php


use \App\Models\Siswa;

$objectSiswa = new Siswa;

print $objectSiswa->helloWorld();


$objectSiswa->nama = "Suci";
$objectSiswa->nisn = "101";
$objectSiswa->alamat = "Bandung";
$objectSiswa->jenis_kelamin = "Perempuan";

$objectSiswa->save();

print Siswa::helloWorldStatic();
?>