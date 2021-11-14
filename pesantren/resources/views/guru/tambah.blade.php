<h1>Tambah Guru</h1>

<form action="<?php print url('/guru/tambah-proses'); ?>" method="get">

	Nama<br>
	<input name="nama"><br/>
	<br/>
	NIP<br>
	<input name="nip"><br/>
	<br/>
	Jenis Kelamin<br>
	<select name="jenis_kelamin">
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
	</select>
	<br/>
	<br/>
	Jenjang Pendidikan<br>
	<input name="jenjang_pendidikan"><br/>
	<br/>
	Jurusan<br>
	<input name="jurusan"><br/>
	<br/>

	<button>Kirim</button>

</form>