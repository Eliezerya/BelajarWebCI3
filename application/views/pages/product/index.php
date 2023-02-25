<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Product</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
					class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>

	<a href="<?php echo base_url() . 'index.php/Product/addProductView'; ?>"
	   class="btn btn-primary btn-sm shadow-sm mb-3">Tambah Produk</a>

	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="table" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th>No.</th>
						<th>Nama Product</th>
						<th>Kategori</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i = 1;
					foreach ($product as $product) : ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $product['ProductName']; ?></td>
							<td><?= $product['Category']; ?></td>
							<td><?= $product['Price']; ?></td>
							<td>
								<!-- <a href="" class="btn btn-primary">Detail</a> -->
								<a href="javascript:void(0)" class="btn btn-warning" data-toggle="modal"
								   data-target="#modal-edit"
								   onclick="viewData(<?php echo (int)$product['ProductID'] ?>)">Ubah</a>
								<a href="<?php echo base_url() . 'index.php/Product/delete?id=' . $product['ProductID']; ?>"
								   class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url() . 'index.php/product/edit' ?>" method="POST"
				  enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12 d-flex justify-content-center">
							<input type="hidden" id="product_id" name="ProductID" value="">
							<div class="form-group mb-3 w-50">
								<label>Nama Produk</label>
								<input type="text" id="produk" name="ProductName" class="form-control">
								<p class="error-label mb-0 d-none text-danger">Nama produk tidak boleh kosong</p>
							</div>
						</div>
						<div class="col-lg-12 d-flex justify-content-center">
							<div class="form-group mb-3 w-50">
								<label>Kategori</label>
								<input type="text" id="kategori" name="Category" class="form-control">
								<p class="error-label mb-0 d-none text-danger">Kategori tidak boleh kosong</p>
							</div>
						</div>
						<div class="col-lg-12 d-flex justify-content-center">
							<div class="form-group mb-3 w-50">
								<label>Harga</label>
								<input type="number" id="harga" name="Price" max="99999999" class="form-control">
								<p class="error-label mb-0 d-none text-danger">Harga yang diperbolehkan Rp. 1 ~
									999999999</p>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-md btn-primary rounded-75" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
		crossorigin="anonymous"></script>
<script>
	const idProduk = document.getElementById('product_id') //disini error
	const produk = document.getElementById('produk')
	const kategori = document.getElementById('kategori')
	const harga = document.getElementById('harga')
	const viewData = (idData) => {
		$.ajax({
			url: `<?php echo base_url('index.php/product/editProduct'); ?>`,
			type: 'post',
			dataType: 'json',
			data: {
				ProductID: idData
			},
			success: (data) => {
				idProduk.value = data[0].ProductID
				produk.value = data[0].ProductName
				kategori.value = data[0].Category
				harga.value = data[0].Price
			}
		})
	}
</script>

