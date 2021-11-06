<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="card">
			<form method="POST" action="<?php echo base_url('admin/laporan/filter') ?>">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					<label>dari tanggal</label>
					<input type="date" name="dari" class="form-control" required>
					</div>
					<div class="form-group">
					<label>sampai tanggal</label>
					<input type="date" name="sampai" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-sm btn-primary">Filter</button>
					</div>

				</div>
			</div>
			</form>
		</div>	
	</section>
</div>