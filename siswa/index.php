<?php

//Tahap 1 : Membuat koneksi dengan database
$server = "localhost";
$username = "root";
$password = "";
$database = "pesantren2";

$koneksi = mysqli_connect($server, $username, $password, $database);

//Tahap 2 : Menarik data dari tabel
$perintah = "select * from siswa";
$hasil = mysqli_query($koneksi, $perintah);

//Tahap 3 : Menampilkan data pada layar
$array_siswa = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

// foreach ($array_siswa as $siswa) {
	//print $siswa["id"]."-".$siswa["nama"]."-".$siswa["nisn"]."-".$siswa["alamat"]."<br/>";
//}

?>

<a href="tambah.php">Tambah Data Siswa</a>
<br/>
<br/>

<table border="1">
<tr>
	<th>No</th>
	<th>Nama</th>
	<th>NISN</th>
	<th>Alamat</th>
</tr>

<?php foreach ($array_siswa as $siswa) { ?>
<tr>
	<td><?php print $siswa["id"]; ?></td>
	<td><?php print $siswa["nama"]; ?></td>
	<td><?php print $siswa["nisn"]; ?></td>
	<td><?php print $siswa["alamat"]; ?></td>
</tr>
<?php } ?>
</table>