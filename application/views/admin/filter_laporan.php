<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>

		<div class="card">
			<form method="POST" action="<?php echo base_url('admin/laporan/filter') ?>">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					<label>dari tanggal</label>
					<input type="date" name="dari" class="form-control" required>
					</div>
					<div class="form-group">
					<label>sampai tanggal</label>
					<input type="date" name="sampai" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-sm btn-primary">Filter</button>
					</div>

				</div>
			</div>
			</form>
		</div>	
		<a target="_blank" href="<?php echo base_url('admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai')); ?>" class="btn btn-sm btn-success mb-1"><i class="fas fa-print">Print</i></a>
		<table class="table table-bordered table-striped table-responsive">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Judul</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Tanggal Pengembalian</th>
				<th>Denda telat kembali/hari</th>
				<th>Total Denda</th>
				<th>Status Transaksi</th>
			</tr>
			<?php $no=1; foreach ($laporan as $tr): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tr->nama_anggota ?></td>
					<td><?php echo $tr->judul_buku ?></td>
					<td><?php echo date('d/m/y',strtotime($tr->tanggal_pinjam)) ?></td>
					<td><?php echo date('d/m/y',strtotime($tr->tanggal_kembali)) ?></td>
					<td>
						<?php if ($tr->tanggal_pengembalian=="0000-00-00") {
							echo "-";
						}else{ ?>
							<?php echo date('d/m/Y',strtotime($tr->tanggal_pengembalian)) ?>
						<?php } ?>

						
					</td>
					<td>Rp.<?php echo number_format($tr->denda,0,',','.') ?></td>
					<td>Rp.<?php echo number_format($tr->total_denda,0,',','.') ?></td>
					<td>
						<?php if ($tr->status_pengembalian=="1") {
							echo "Selesai";
						}else{
							echo "Belum Selesai";
						} ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</section>
</div>