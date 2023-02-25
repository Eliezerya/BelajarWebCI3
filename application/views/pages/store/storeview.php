<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Product</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled">Store</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
			<img width="100%" src="<?php echo base_url('assets/img/'.$store["Avatar"]) ?>" alt="">
		</div>
		<div class="col-md-6">
			<h5 style="font-weight: 500">Nama Toko</h5>
			<p>
				<?php echo $store["StoreName"] ;?>
			</p>
			<br/>
			<h5 style="font-weight: 500">Deskripsi Toko</h5>
			<p>
				<?php echo $store["Description"] ;?>
			</p>
			<br/>
			<h5 style="font-weight: 500">Pemilik Toko</h5>
			<p>
				<?php echo $store["Username"] ;?>
			</p>
			<br/>
			<h5 style="font-weight: 500">Lokasi Toko</h5>
			<p>
				<?php echo $store["City"] ;?>
			</p>
			<br/>

		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
		crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</body>
</html>
