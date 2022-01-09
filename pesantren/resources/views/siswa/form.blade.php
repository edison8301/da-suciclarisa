

<form action="<?php print url('/siswa/tambah-proses'); ?>" method="get">

	<div class="mb-3">
		<label class="form-label">Nama</label>
		<input name="nama" class="form-control" value="<?= $siswa->nama; ?>">
	</div>

	<div class="mb-3">
		<label class="form-label">NISN</label>
		<input name="nisn" class="form-control" value="<?= $siswa->nisn; ?>">
	</div>

	<div class="mb-3">
		<label class="form-label">Alamat</label>
		<input name="alamat" class="form-control" value="<?= $siswa->alamat; ?>">
	</div>
	
	<div class="mb-3">
		<label class="form-label">Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control" value="<?= $siswa->jenis_kelamin; ?>">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
	</div>

	<div class="mb-3">
		<label class="form-label">Golongan Darah</label>
		<select name="golongan_darah" class="form-control" value="<?= $siswa->golongan_darah; ?>">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="AB">AB</option>
		<option value="O">O</option>
	</select>
	</div>

	<button class="btn btn-success">Simpan</button>

</form>