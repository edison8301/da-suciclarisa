<form action="<?php print url('/pembayaran/tambah-proses'); ?>" method="get">

	<?php if (isset($_GET['id_siswa']) == true) { ?>
		<input type="hidden" name="id_siswa" value="<?php print $id_siswa ; ?>">
	<?php } ?>

	<?php if (isset($_GET['id_siswa']) == false) { ?>

		<div class="mb-3">
			<label class="form-label">Nama</label>
			<select name="id_siswa" class="form-control">
				<?php foreach($arraySiswa as $siswa) { ?>
				<option value="<?= $siswa->id; ?>"> <?= $siswa->nama; ?></option>
				<?php } ?>
			</select>
		</div>

	<?php } ?>
	

	<div class="mb-3">
		<label class="form-label">Tanggal</label>
		<input name="tanggal_pembayaran" class="form-control" value="<?=$pembayaran->tanggal_pembayaran; ?>">
	</div>

	<div class="mb-3">
		<label class="form-label">Bulan</label>
		<input name="bulan" class="form-control" value="<?=$pembayaran->bulan; ?>">
	</div>

	<div class="mb-3">
		<label class="form-label">Tahun</label>
		<input name="tahun" class="form-control" value="<?=$pembayaran->tahun; ?>">
	</div>

	<div class="mb-3">
		<label class="form-label">Jumlah</label>
		<input name="jumlah" class="form-control" value="<?=$pembayaran->jumlah; ?>">
	</div>

	<button class="btn btn-success">Simpan</button>
</form>