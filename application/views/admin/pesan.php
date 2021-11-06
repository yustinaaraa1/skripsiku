<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title ?><div class="btn btn-sm"><i class="far fa-envelope"></i></div></h1>
		</div>
		<?php foreach ($pesan as $p): ?>
		<div class="card">
			<div class="card-body">
				<table>
					<tr>
						<td>
						<img alt="image" src="<?php echo base_url('assets/upload/'.$p->gambar) ?>" style="width: 49px; height: 49px;" class="rounded-circle" >
						<?php echo $p->nama_anggota ?> :</td>
						<td><?php echo $p->pesan ?></td>
						
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
						<a href="">Balas</a>
						</td>
					</tr>
				</table>
			</div>
		</div>	
		<?php endforeach; ?>
	</section>
</div>