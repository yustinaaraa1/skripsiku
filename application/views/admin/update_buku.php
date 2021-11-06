<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="card">
			<div class="card-body">
				<?php foreach ($buku as $bk): ?>
				<form method="POST" action="<?php echo base_url('admin/data_buku/update_aksi') ?>">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Jenis Buku</label>
						<input type="hidden" name="id_buku" value="<?php echo $bk->id_buku ?>">
						<select name="kode_jenis" class="form-control">
							<option value="<?php echo $bk->kode_jenis ?>"><?php echo $bk->kode_jenis ?></option>
							<?php foreach ($jenis as $j): ?>
							<option value="<?php echo $j->kode_jenis ?>"><?php echo $j->kode_jenis ?></option>
						<?php endforeach; ?>
						</select>
						<?php echo form_error('kode_jenis','<div class="text-small text-danger">','</div>'); ?>
					</div>
					<div class="form-group">
						<label>Judul Buku</label>
						<input type="text" name="judul_buku" class="form-control" value="<?php echo $bk->judul_buku ?>">
						<?php echo form_error('judul_buku','<div class="text-small text-danger">','</div>'); ?>
					</div>
					<div class="form-group">
						<label>Pengarang Buku</label>
						<input type="text" name="pengarang" class="form-control" value="<?php echo $bk->pengarang ?>">
						<?php echo form_error('pengarang','<div class="text-small text-danger">','</div>'); ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Penerbit Buku</label>
						<input type="text" name="penerbit" class="form-control" value="<?php echo $bk->penerbit ?>">
						<?php echo form_error('penerbit','<div class="text-small text-danger">','</div>'); ?>
					</div>
					<div class="form-group">
						<label>Tahun Terbit</label>
						<input type="number" name="tahun_terbit" class="form-control" value="<?php echo $bk->tahun_terbit ?>">
						<?php echo form_error('tahun_terbit','<div class="text-small text-danger">','</div>'); ?>
					</div>
					<div class="form-group">
						<label>Tahun Cetak</label>
						<input type="number" name="tahun_cetak" class="form-control" value="<?php echo $bk->tahun_cetak ?>">
						<?php echo form_error('tahun_cetak','<div class="text-small text-danger">','</div>'); ?>
					</div>
					<button type="reset" class="btn btn-sm btn-danger">Reset</button>
					<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
				</div>
			</div>
			</form>
		<?php endforeach; ?>
		</div>
		</div>
	</section>
</div>