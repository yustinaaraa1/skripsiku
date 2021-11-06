<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title; ?></h1>
		</div>
		<div class="card">
			<div class="card-body">
        <p>   ANGGOTA PERPUSTAKAAN ASAH KODA</p>
				<div class="row">
					<?php foreach ($anggota as $ag): ?>
						<div class="col-md-2">
							<img style="width: 145px; height: 135px;" src="<?php echo base_url('assets/upload/'.$ag->gambar) ?>"><hr>
              <?php 
              $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
              echo $generator->getBarcode('xx'.$ag->id_anggota, $generator::TYPE_CODE_128);
               ?>
						</div>
						<div class="col-md-3">
							<div class="card" style="width: 89%; height: 89%;">
  								
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama   :<?php  echo $ag->nama_anggota ?></li>
                        <li class="list-group-item">Kode:xx<?php  echo $ag->id_anggota ?></li>
                        <li class="list-group-item">Alamat :<?php  echo $ag->alamat ?></li>
                      </ul>
							</div>
              
						</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
</div>