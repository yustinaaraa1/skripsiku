<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="search-element" style="margin-left: 691px; margin-bottom: 9px;" >

			<div class="row">
			<?php echo form_open('user/data_buku/search') ?>
			
				<div class="row">
			<input type="text" name="keyword" class="form-control mr-1" placeholder="Silahkan cari Judul buku" data-width="250"><button type="submit" class=" btn btn-sm btn-primary" >Cari</button>
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
				<th>Status Buku</th>
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
					<?php if ($bk->status=="1") {
						echo "Tersedia";
					}else{echo "Tidak Tersedia";
				} 
					?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</section>
</div>