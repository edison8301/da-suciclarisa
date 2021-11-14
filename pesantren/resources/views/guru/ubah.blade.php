<h1>Ubah Data Guru</h1>

<?php

use App\Models\Guru;

$id = $_GET['id'];

$query = Guru::query();
$query->where('id','=',$id);

$guru = $query->first();
?>

<tr>
	<form action="<?php print url('/guru/update'); ?>" method="get">
		<input type="hidden" value="<?php print $guru['id'];?>" name="id">
		Nama<br>
		<input value="<?php print $guru['nama'];?>" name="nama"><br/>
		<br/>
		NIP<br>
		<input value="<?php print $guru['nip'];?>" name="nip"><br/>
		<br/>
		Jenis Kelamin<br/>
		<select name="jenis_kelamin">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
		<br/>
		<br/>
		Jenjang Pendidikan<br>
		<input value="<?php print $guru['jenjang_pendidikan'];?>" name="jenjang_pendidikan"><br/>
		<br/>
		Jurusan<br>
		<input value="<?php print $guru['jurusan'];?>" name="jurusan"><br/>
		<br/>
		<button>Simpan Perubahan</button>
	</form>
</tr>
