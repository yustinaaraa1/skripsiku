<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<a href="<?php echo base_url('admin/jenis_buku/tambah') ?>" class="btn btn-sm btn-primary mb-3">Tambah Jenis Buku</a>
		<?php echo $this->session->flashdata('pesan'); ?>
			<table class="table table-bordered table-striped">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Nama</th>
					<th>Aksi</th>
				</tr>
				<?php $no=1; foreach ($jenis as $j): ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $j->kode_jenis ?></td>
					<td><?php echo $j->nama_jenis ?></td>
					<td>
						<a href="<?php echo base_url('admin/jenis_buku/update/'.$j->id_jenis) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
						<a onclick="return confirm('Yakin Mau Hapus???') " href="<?php echo base_url('admin/jenis_buku/delete/'.$j->id_jenis) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		
	</section>
</div>