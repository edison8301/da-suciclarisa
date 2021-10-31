<h1>Latihan 2</h1>

<?php

use \App\Models\Siswa;

$query = Siswa::query();

//untuk memilih data yang ingin ditampilkan
$query->where('id','=','3'); 

//untuk mengupdate data pertama
$siswa = $query->first();

print $siswa->id;
print "<br/>";
print $siswa->nama;
print "<br/>";
print $siswa->alamat;

$siswa->nama = "Hello World";
$siswa->alamat = "Indonesia";
$siswa->save();

?>