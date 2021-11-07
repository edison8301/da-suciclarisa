<h1>Detail Siswa</h1>

<?php

use App\Models\Siswa;

$id = $_GET['id'];

$query = Siswa::query();
$query->where('id','=',$id);

$siswa = $query->first();

?>

<table border="1" cellspacing="0">
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?= $siswa->nama; ?></td>
	</tr>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td><?= $siswa->nisn; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?= $siswa->alamat; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?= $siswa->jenis_kelamin; ?></td>
	</tr>
	<tr>
		<td>Golongan Darah</td>
		<td>:</td>
		<td><?= $siswa->golongan_darah; ?></td>
	</tr>
</table>

<div>
	<a href="<?= url('/siswa/index'); ?>">Kembali ke Daftar Siswa</a>
</div>