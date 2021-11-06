<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title; ?></h1>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<?php foreach ($anggota as $ag): ?>
						<div class="col-md-4">
							<img style="width: 95%;" src="<?php echo base_url('assets/upload/'.$ag->gambar) ?>">
						</div>
						<div class="col-md-8">
							<div class="card" style="width: 89%; height: 89%;">
  								<ul class="list-group list-group-flush">
  									<table class="table table-responsive">
  									<tr>
  									<td>Nama</td>
  									<td>:</td>
  									<td><li class="list-group-item"><?php echo $ag->nama_anggota ?></li></td>
  									</tr>
  									<tr>
  									<td>Alamat</td>
  									<td>:</td>
  									<td><li class="list-group-item"><?php echo $ag->alamat ?></li></td>
  									</tr>
  									<tr>
  									<td>No.Telp</td>
  									<td>:</td>
  									<td><li class="list-group-item"><?php echo $ag->no_telepon ?></li></td>
  									</tr>
  									<tr>
  									<td>Jenis Kelamin</td>
  									<td>:</td>
  									<td><li class="list-group-item"><?php echo $ag->gender ?></li></td>
  									</tr>
  									<tr>
  									<td>Email</td>
  									<td>:</td>
  									<td><li class="list-group-item"><?php echo $ag->email ?></li></td>
  									</tr>
  									</table>
  								</ul>
							</div>
						</div>
						
					
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
</div>