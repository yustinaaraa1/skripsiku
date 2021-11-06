<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
	</section>
	<div class="card">
		<?php foreach ($transaksi as $tr): ?>
			<form method="POST" action="<?php echo base_url('admin/transaksi_pengembalian/kembali_aksi') ?>">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Nama</label>
						<input type="hidden" name="id_pinjam" value="<?php echo $tr->id_pinjam ?>">
						<input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali ?>">
						<input type="hidden" name="denda" value="<?php echo $tr->denda ?>">
						<input type="hidden" name="id_buku" value="<?php echo $tr->id_buku ?>">
						<input type="text" name="nama_anggota" class="form-control" value="<?php echo $tr->nama_anggota ?>" readonly>
					</div>
					<div class="form-group">
						<label>Judul</label>
						<input type="text" name="judul_buku" class="form-control" value="<?php echo $tr->judul_buku ?>" readonly>
					</div>	
					<div class="form-group">
						<label>Tanggal Pengembalian</label>
						<input type="date" name="tanggal_pengembalian" class="form-control" required>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Status Pengembalian Buku</label>
						<select class="form-control" name="status">
						<option <?php if ($tr->status=="1") {echo "selected=selected";} ?> value="1">Kembali</option>
						<option <?php if ($tr->status=="0") {echo "selected='selected'";} ?> value="0">Belum Kembali</option>
						</select>
					</div>
					<div class="form-group">
						<label>Status Status Transaksi</label>
						<select class="form-control" name="status_pengembalian">
						<option <?php if ($tr->status_pengembalian=="1") {echo "selected=selected";} ?> value="1">Selesai</option>
						<option <?php if ($tr->status_pengembalian=="0") {echo "selected='selected'";} ?> value="0">Belum Selesai</option>
						</select>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-sm btn-primary form-control">Kembalikan Buku</button>
					</div>
				</div>
			</div>	
		</div>	
		</form>
	<?php endforeach; ?>
	</div>	
</div>