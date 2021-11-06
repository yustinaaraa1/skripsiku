<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="search-element" style="margin-left: 691px; margin-bottom: 5px;" >

			<div class="row">
			<?php echo form_open('admin/transaksi_pengembalian/search') ?>
			
				<div class="row">
			<input type="text" name="keyword" class="form-control mr-1" placeholder="Silahkan cari nama anggota pengembali buku" data-width="250"><button type="submit" class=" btn btn-sm btn-primary" >Cari</button>
			</div>
			
			
			<?php echo form_close() ?>
			</div>
		</div>
		<?php echo $this->session->flashdata('pesan'); ?>
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
				<th>Aksi</th>
			</tr>
			<?php $no=1; foreach ($transaksi as $tr): ?>
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
					<td>
						<div class="row">
						<?php if ($tr->status_pengembalian=="1") { ?>
							<div class="row">
								<div class="row">
								<div class="row">	
							<a href="<?php echo base_url('admin/transaksi_pengembalian/pesan_gmail/'.$tr->id_pinjam) ?>" class="btn btn-sm btn-secondary mr-1"><i class="far fa-envelope"></i></a>
							<a href="" class="btn btn-sm btn-success mr-1" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-check"></i></a>
							<a href="<?php echo base_url('admin/transaksi_pengembalian/kembali/'.$tr->id_pinjam) ?>" class="btn btn-sm btn-primary mr-1"><i class="fas fa-check"></i></a>
							<a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-times"></i></a>
									</div>	
								</div>
							</div>
						<?php }else{?>
							<div class="row">
								<div class="row">
									<div class="row">	
							<a href="<?php echo base_url('admin/transaksi_pengembalian/pesan_gmail/'.$tr->id_pinjam) ?>" class="btn btn-sm btn-secondary mr-1"><i class="far fa-envelope"></i></a>
							<a href="<?php echo base_url('admin/transaksi_pengembalian/update_peminjaman/'.$tr->id_pinjam) ?>" class="btn btn-sm btn-success mr-1"><i class="fas fa-check"></i></a>
							<a href="<?php echo base_url('admin/transaksi_pengembalian/kembali/'.$tr->id_pinjam) ?>" class="btn btn-sm btn-primary mr-1"><i class="fas fa-check"></i></a>
							<a onclick="return confirm('Yakin Mau Batal???'); " href="<?php echo base_url('admin/transaksi_pengembalian/batal_transaksi/'.$tr->id_pinjam) ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</section>
</div>

























<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf Transaksi Tidak dapat diBatalkan atau di update karena Transaksi telah selesai
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>