<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?php echo $title ?></h1>
    </div>
<div class="card">
    <div class="card-body">
      <div class="col-md-6">
        <form method="POST" action="<?php echo base_url('user/ganti_password/aksi') ?>" >
          <div class="form-group">
            <label for="pass_baru">Password Baru</label>
            <input type="hidden" name="id_anggota" value="<?php echo $this->session->userdata('id_anggota') ?>">
            <input id="pass_baru" type="password" class="form-control" name="pass_baru" tabindex="1" autofocus>
            <?php echo form_error('pass_baru','<div class= "text-small text-danger">','</div>'); ?>
          </div>

          <div class="form-group">
            <div class="d-block">
              <label for="ulang_pass" class="control-label">Ulangi Passwor</label>
            </div>
            <input id="ulang_pass" type="password" class="form-control" name="ulang_pass" tabindex="2" >
            <?php echo form_error('ulang_pass','<div class= "text-small text-danger">','</div>'); ?>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
              Ganti Password
            </button>
          </div>
        </form>
        </div>
        <div class="col-md-6">
          
        </div>

          </div>
   </div>
  </section>
</div>