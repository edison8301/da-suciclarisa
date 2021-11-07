<h1>Daftar Siswa</h1>

<?php

use App\Models\Siswa;

$query = Siswa::query();
$arraySiswa = $query->get();

?>

<div style="margin-bottom: 20px;">
	<a href="<?= url('/siswa/tambah'); ?>">Tambah Siswa</a>
</div>

<table border="1" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>NISN</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>
	<?php $no=1; ?>
	<?php foreach ($arraySiswa as $siswa) { ?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $siswa->nama; ?></td>
			<td><?= $siswa->nisn; ?></td>
			<td><?= $siswa->alamat; ?></td>
			<td>
				<a href="<?= url("/siswa/lihat?id=$siswa->id"); ?>">Lihat</a>
				<a href="<?= url("/siswa/ubah?id=$siswa->id"); ?>">Ubah</a>
				<a href="<?= url("/siswa/hapus?id=$siswa->id"); ?>">Hapus</a>
			</td>
		</tr>
		<?php $no = $no + 1; ?>
	<?php } ?>
</table>