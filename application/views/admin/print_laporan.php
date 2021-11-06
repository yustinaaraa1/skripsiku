


<table style="margin-top: 45px; margin-bottom: 31px;">
	<h1 align="center">Laporan Data Peminjaman dan Pengembalian Buku P.A.K</h1>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d/m/Y',strtotime($_GET['dari'])) ?></td>
	</tr>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d/m/Y',strtotime($_GET['sampai'])) ?></td>
	</tr>
</table>





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



		<script type="text/javascript">
			window.print();
		</script>