<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Product</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
					class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>

	<a href="<?php echo base_url() . '/store/addStore'; ?>" class="btn btn-primary btn-sm shadow-sm mb-3">Tambah
		Store</a>

	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="table" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th>No.</th>
						<th>Nama Store</th>
						<th>Pemilik Toko</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i = 1;
					foreach($stores as $items) : ?>
						<td><?php echo $i++ ?></td>
						<td><?php echo $items["StoreName"] ;?></td>
						<td><?php echo $items["Username"] ;?></td>
						<td>
							<a href="<?php echo base_url('store/storeview/'.$items["StoreID"] )?>" target="_blank" class="btn btn-primary">Detail</a>
						</td>
					<?php endforeach ;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
