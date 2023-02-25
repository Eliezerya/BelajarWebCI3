<div class="container h-75 my-4 rounded-lg p-5 bg-light shadow-lg">
	<h1 class="text-center mb-2">Tambah Produk</h1>
    <?php echo validation_errors(); ?>/
    <form action="<?php echo base_url().'index.php/Product/addProduct' ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Nama Produk</label>
                    <input type="text" name="product_name" id="produk" class="form-control">
                    <p class="error-label mb-0 d-none text-danger">Nama produk tidak boleh kosong</p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Kategori</label>
                    <input type="text" name="category" id="kategori" class="form-control">
                    <p class="error-label mb-0 d-none text-danger">Kategori tidak boleh kosong</p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Harga</label>
                    <input type="number" name="price" id="harga" max="999999999" class="form-control">
                    <p class="error-label mb-0 d-none text-danger">Harga yang diperbolehkan Rp. 1 ~ 999999999</p>
                </div>
            </div>
            <!-- <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label for="">Choose Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div> -->
    
            <div class="col-lg-12 d-flex justify-content-center">
                <input type="submit" class="btn btn-md btn-primary rounded-75" value="Submit">
            </div>
        </div>
    </form>
</div>