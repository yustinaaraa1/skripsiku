<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1 align="text-center"><?php echo $title; ?></h1>
		</div>
		
		
		
		<div class="search-element" style="margin-left: 691px; margin-bottom: -31px;" >

			<div class="row">
			<?php echo form_open('admin/data_anggota/search') ?>
			
				<div class="row">
			<input type="text" name="keyword" class="form-control mr-1" placeholder="Silahkan cari nama anggota" data-width="250"><button type="submit" class=" btn btn-sm btn-primary" >Cari</button>
			</div>
			
			
			<?php echo form_close() ?>
			</div>
		</div>
		<a href="<?php echo base_url('admin/data_anggota/tambah') ?>" class="btn btn-sm btn-primary mb-2">Tambah Aggota</a>
			<?php echo $this->session->flashdata('pesan'); ?>
		<table class="table table-bordered table-striped">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No.Tlp</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
			<?php $no=1; foreach ($anggota as $ag): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $ag->nama_anggota ?></td>
					<td><?php echo $ag->alamat; ?></td>
					<td><?php echo $ag->no_telepon; ?></td>
					<td><?php echo $ag->email; ?></td>
					<td>
						<a href="<?php echo base_url('admin/data_anggota/detail/'.$ag->id_anggota) ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
						<a href="<?php echo base_url('admin/data_anggota/update/'.$ag->id_anggota); ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
						<a onclick="return confirm('Yakin Mau Hapus')" href="<?php echo base_url('admin/data_anggota/delete/'.$ag->id_anggota) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>

						<a href="<?php echo base_url('admin/data_anggota/card/'.$ag->id_anggota) ?>" class="btn btn-sm btn-dark"><i class="fas fa-address-card"></i></a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</section>
</div>