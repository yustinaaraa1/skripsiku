<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="card">
			<?php foreach ($buku as $bk): ?>
			<form method="POST" action="<?php echo base_url('admin/transaksi_pengembalian/update_peminjaman_aksi') ?>">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>No Anggota Peminjam</label>
							<input type="hidden" name="id_pinjam" value="<?php echo $bk->id_pinjam ?>">
							<input type="number" name="id_anggota" class="form-control" value="<?php echo $bk->id_anggota ?>" readonly>
							
							<input type="hidden" name="id_buku" value="<?php echo $bk->id_buku ?>">
							
						</div>
						<div class="form-group">
							<label>Tanggal Pinjam</label>
							<input type="date" name="tanggal_pinjam" class="form-control" value="<?php echo $bk->tanggal_pinjam ?>" readonly>
						</div>
						<div class="form-group">
							<label>Tanggal Kembali</label>
							<input type="date" name="tanggal_kembali" class="form-control" value="<?php echo $bk->tanggal_kembali ?>">
						</div>
						<button type="reset" class="btn btn-sm btn-danger">Reset</button>
						<button type="submit" class="btn btn-sm btn-primary">Pinjam</button>
					</div>
					
				</div>
			</div>
			</form>
			<?php endforeach; ?>
		</div>
	</section>
</div>