<?php

use App\Models\Guru;

$id = $_GET['id'];

$query = Guru::query();
$query->where('id','=',$id);

$guru = $query->first();

$guru->delete();

?>

<div>
	<h3>Data Guru Berhasil dihapus</h3>
	<h3><a href="<?= url('/guru/index'); ?>">Kembali ke Daftar Guru</a></h3>
</div>