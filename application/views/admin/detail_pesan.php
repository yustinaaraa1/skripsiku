<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?></h1>
		</div>
		<div class="card">
			<div class="card-body">
				<?php foreach ($pesan as $p): ?>
					<table>
						<tr>
							<td>
								<img alt="image" src="<?php echo base_url('assets/upload/'.$p->gambar) ?>" style="width: 49px; height: 49px;" class="rounded-circle" >
								<?php echo $p->nama_anggota ?> :</td>
						</tr>
						<tr>
							<td><?php echo $p->pesan ?></td>
						</tr>
					</table>
				<?php endforeach; ?>
			</div>
		</div>	
	</section>	
</div>	