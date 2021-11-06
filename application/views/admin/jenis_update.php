<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>

		<div class="card">
			<div class="card-body">
				<?php foreach ($jenis as $j):?>
				<form method="POST" action="<?php echo base_url('admin/jenis_buku/update_aksi') ?>">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Kode Jenis</label>
							<input type="hidden" name="id_jenis" value="<?php echo $j->id_jenis ?>">
							<input type="text" name="kode_jenis" class="form-control" value="<?php echo $j->kode_jenis ?>">
							<?php echo form_error('kode_jenis','<div class="text-small text-danger">','</div>') ?>
						</div>
						<div class="form-group">
							<label>Nama Jenis</label>
							<input type="text" name="nama_jenis" class="form-control" value="<?php echo $j->nama_jenis ?>">
							<?php echo form_error('nama_jenis','<div class="text-small text-danger">','</div>') ?>
						</div>
						<button type="reset" class="btn btn-sm btn-danger">Reset</button>
						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
					</div>
					<div class="col-md-6"></div>
				</div>
				</form>
			<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>