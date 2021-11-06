

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('registrasi/tambah_aksi'); ?>" enctype="multipart/form-data">
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
              <label>No.Telp</label>
              <input type="number" name="no_telepon" class="form-control">
              <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>'); ?>
            </div>
            

          </div>

          <div class="col-md-6">
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
              <select name="role_id" class="form-control" hidden>
                <option value="2">User</option>
              </select>
              <?php echo form_error('role_id','<div class="text-small text-danger">','</div>'); ?>
            </div>

            
            <div class="form-group">
              <label>Foto</label>
              <input type="file" name="gambar" class="form-control" required>
            </div>
            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
          </div>
        </div>
        </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

 
