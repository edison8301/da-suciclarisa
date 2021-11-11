<h1>Hapus Siswa</h1>

<?php

use App\Models\Siswa;

$id = $_GET['id'];

$query = Siswa::query();
$query->where('id','=',$id);

$siswa = $query->first();

$siswa->delete();

?>

<div>
	<h3>Siswa Berhasil dihapus</h3>
	<h3><a href="<?= url('/siswa/index'); ?>">Kembali ke Daftar Siswa</a></h3>
</div>