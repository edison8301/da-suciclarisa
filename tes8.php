<?php

$nama_siswa = "Suci";
$alamat_siswa = "Sukabumi";
$agama_siswa = "Islam";

$siswa1 = [
"nama" => "Suci",
"alamat" => "Alamat 1",
"agama" => "Islam"
];

print $siswa1["nama"];
print "<br/>";
print $siswa1["alamat"];
print "<br/>";
print $siswa1["agama"];

$siswa2 = [
"nama" => "Clarisa",
"alamat" => "Alamat 2",
"agama" => "Islam"
];

$siswa3 = [
"nama" => "Sundari",
"alamat" => "Alamat 3",
"agama" => "Islam"
];

$semua = [
"1" => $siswa1,
"2" => $siswa2,
"3" => $siswa3
];

print "<br/>"."<br/>";
print $semua["1"]["nama"]."-".$semua["1"]["alamat"]."-".$semua["1"]["agama"]."<br/>";
print $semua["2"]["nama"]."-".$semua["2"]["alamat"]."-".$semua["2"]["agama"]."<br/>";
print $semua["3"]["nama"]."-".$semua["3"]["alamat"]."-".$semua["3"]["agama"]."<br/>";

print "<br/>";
foreach ($semua as $data){
	print $data["nama"]."_".$data["alamat"]."-".$data["agama"]."<br/";

}

?>