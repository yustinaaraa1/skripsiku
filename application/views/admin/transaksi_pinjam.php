<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="search-element" style="margin-left: 691px; margin-bottom: 5px;" >

			<div class="row">
			<?php echo form_open('admin/transaksi_peminjaman/search') ?>
			
				<div class="row">
			<input type="text" name="keyword" class="form-control mr-1" placeholder="Silahkan cari judul buku" data-width="250"><button type="submit" class=" btn btn-sm btn-primary" >Cari</button>
			</div>
			
			
			<?php echo form_close() ?>
			</div>
		</div>
		<?php echo $this->session->flashdata('pesan') ?>
		<table class="table table-striped table-bordered responsive">
			<tr>
				<th>No</th>
				<th>Jenis Buku</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>Tahun Cetak</th>
				<th>Aksi</th>
			</tr>
			<?php $no=1; foreach ($buku as $bk): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $bk->kode_jenis ?></td>
				<td><?php echo $bk->judul_buku ?></td>
				<td><?php echo $bk->pengarang ?></td>
				<td><?php echo $bk->penerbit ?></td>
				<td><?php echo $bk->tahun_terbit ?></td>
				<td><?php echo $bk->tahun_cetak ?></td>
				<td>
					<?php if ($bk->status=="1") { ?>
						<a href="<?php echo base_url('admin/transaksi_peminjaman/pinjam/'.$bk->id_buku) ?>" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
					<?php }else{ ?>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
					<?php } ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</section>
</div>





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Buku Ini Tidak Tersedia /Tidak bisa diPinjam Sekarang!!!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>