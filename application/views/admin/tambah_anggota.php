<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title; ?></h1>
		</div>
		<div class="card">
			<div class="card-body">
				<form method="POST" action="<?php echo base_url('admin/data_anggota/tambah_aksi'); ?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
					
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama_anggota" class="form-control">
							<?php echo form_error('nama_anggota','<div class="text-small text-danger">','</div>'); ?>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control">
							<?php echo form_error('alamat','<div class="text-small text-danger">','</div>'); ?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control">
							<?php echo form_error('email','<div class="text-small text-danger">','</div>'); ?>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control">
							<?php echo form_error('username','<div class="text-small text-danger">','</div>'); ?>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
							<?php echo form_error('password','<div class="text-small text-danger">','</div>'); ?>
						</div>
						

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>No.Telp</label>
							<input type="number" name="no_telepon" class="form-control">
							<?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>'); ?>
						</div>

						<div class="form-group">
							<label>Gender</label>
							<select name="gender" class="form-control">
								<option value="">--Pilih Gender--</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<?php echo form_error('gender','<div class="text-small text-danger">','</div>'); ?>
						</div>

						<div class="form-group">
							<label>Daftar Sebagai</label>
							<select name="role_id" class="form-control">
								<option value="">--Daftar Sebagai--</option>
								<option value="1">Admin</option>
								<option value="2">User</option>
							</select>
							<?php echo form_error('role_id','<div class="text-small text-danger">','</div>'); ?>
						</div>

						
						<div class="form-group">
							<label>Foto</label>
							<input type="file" name="gambar" class="form-control">
						</div>
						<button type="reset" class="btn btn-sm btn-danger">Reset</button>
						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</section>
</div>