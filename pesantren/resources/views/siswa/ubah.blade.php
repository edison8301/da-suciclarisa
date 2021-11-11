<h1>Ubah Data Siswa</h1>

<?php

use App\Models\Siswa;

$id = $_GET['id'];

$query = Siswa::query();
$query->where('id','=',$id);

$siswa = $query->first();
?>

<tr>
	<form action="<?php print url('/siswa/update'); ?>" method="get">
		<input type="hidden" value="<?php print $siswa['id'];?>" name="id">
		Nama<br>
		<input value="<?php print $siswa['nama'];?>" name="nama"><br/>
		<br/>
		NISN<br>
		<input value="<?php print $siswa['nisn'];?>" name="nisn"><br/>
		<br/>
		Alamat<br>
		<input value="<?php print $siswa['alamat'];?>" name="alamat"><br/>
		<br/>
		Jenis Kelamin<br>
		<select name="jenis_kelamin">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
		<br/>
		<br/>
		Golongan Darah<br>
		<select name="golongan_darah">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="AB">AB</option>
			<option value="O">O</option>
		</select>
		<br/>
		<br/>
		<button>Simpan Perubahan</button>
	</form>
</tr>
