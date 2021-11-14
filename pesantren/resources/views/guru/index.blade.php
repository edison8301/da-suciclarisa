<h1>Daftar Guru</h1>

<?php

use App\Models\Guru;

$query = Guru::query();
$arrayGuru = $query->get();

?>

<div style="margin-bottom: 20px;">
	<a href="<?= url('/guru/tambah'); ?>">Tambah Guru</a>
</div>

<table border="1" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>NIP</th>
		<th>Jenis Kelamin</th>
		<th>Aksi</th>
	</tr>
	<?php $no=1; ?>
	<?php foreach ($arrayGuru as $guru) { ?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $guru->nama; ?></td>
			<td><?= $guru->nip; ?></td>
			<td><?= $guru->jenis_kelamin; ?></td>
			<td>
				<a href="<?= url("/guru/detail?id=$guru->id"); ?>">Detail</a> |
				<a href="<?= url("/guru/ubah?id=$guru->id"); ?>">Ubah</a> |
				<a href="<?= url("/guru/hapus?id=$guru->id");  ?>">Hapus</a>
			</td>
		</tr>
		<?php $no = $no + 1; ?>
	<?php } ?>
</table>