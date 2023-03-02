<div class="container mt-5">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="row">
					<div class="col-md-4">
						<div class="m-3">
							<img src="<?= base_url('assets/img/'.$product["Image"])?>" height="200px" class="card-img-top" alt="...">
						</div>
					</div>
					<div class="col-md-8">
						<div class="m-5">
							<h5 class="card-title"><?php echo $product["ProductName"] ;?></h5>
							<b>
								<p><?php echo $product["Category"] ;?></p>
							</b>
							<p>Rp <?php echo $product["Price"] ;?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		
			<div class="payment px-2 py-5" style="background-color: #EEEEEE;">
				
				<div class="row justify-content-between">
					
					<div class="col-md-8">
						<b>
							<?php echo $product["ProductName"] ;?>
						</b>
					</div>
					
					<div class="col-md-4">
						<b>
							Rp <?php echo $product["Price"] ;?>
						</b>
					</div>
				
				</div>

				<hr/>

				<div class="total">
					<b>
						<p style="text-Align: right;">
						Total Pembayaran : Rp <?php echo $product["Price"] ;?>
						</p>
					</b>
				</div>

				<div class="method-payment">
					<b>
						<p>
							Cara Pembayaran
						</p>
					</b>
					<ol>
						<li>
							Pembayaran dilakukan via transfer bank ke no. Rekening <b>04241413435343 BNI a.n PT HP Store</b>
						</li>
						<li>
							Upload bukti pembayaran ke form di bawah ini.
						</li>
						<li>
							Pilih Selesai
						</li>
					</ol>
				</div>

				<form action="<?php echo base_url('home/checkout/'.$product["ProductID"]) ;?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Upload Bukti Pembayaran</label>
						<input type="file" class="form-control my-2" name="file" id="image" />
						<?= form_error('image', '<small class="text-danger pl-3" style="color:red;">', '</small>') ;?>
					</div>
					<button class="btn btn-primary" type="submit">Selesai</button>
					
				</form>

			</div>
		
		</div>
	</div>
</div>
