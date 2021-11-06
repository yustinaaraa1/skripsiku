<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="card">
			<div class="card-body">
				<?php foreach ($transaksi as $tr): ?>
				<form method="POST" action="<?php echo base_url('admin/transaksi_pengembalian/pesan_gmail_aksi') ?>">
					<div class="row">
						<div class="col-md-6">
					<div class="form-group">
						<label>To message</label>
						<input type="text" name="email" class="form-control" value="<?php echo $tr->email ?>" readonly>
					</div>
					<div class="form-group">
						<label>subject</label>
						<input type="text" name="subject" class="form-control">
					</div>
					<div class="form-group">
						<label>Pesan</label>
						<textarea type="text" name="pesan" class="form-control" style="width: 99%; height: 159px;"></textarea>
					</div>
					<button type="submit" class="btn btn-sm btn-primary" style="margin-left: 89%">Kirim</button>
						</div>
					</div>	
				</form>
			<?php endforeach; ?>
			</div>	
		</div>		
	</section>	
</div>	