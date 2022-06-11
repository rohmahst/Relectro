<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Relectro</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->

	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<script src="dist/jquery-3.6.0.min.js"></script>
	<script src="dist/css/bootstrap.min.js"></script>
	<script src="dist/css/popper.js"></script>

	<!-- js bootstrap css -->


</head>

<body class="bg-dark">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">

			<a class="navbar-brand " href="index.php">
				<h2 style="font-family: 'Brush Script MT'">Relectro</h2>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- menu in right -->
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
					<li class="nav-item active"><a class="nav-link" href="produk.php">Produk</a></li>
					<li class="nav-item"><a class="nav-link" href="#keranjang">Keranjang</a></li>
					<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container text-white">
		<div class="row mb-5">
			<div class="col-12 text-center">
				Beberapa produk kami
			</div>
		</div>


		<div class="row text-dark">
			<!-- for -->
			<?php
			for ($i = 0; $i < 14; $i++) {
			?>
				<div class="col-md-3">
					<div class="card-deck">
						<div class="card card-sm m-1 p-1" style="width: 18rem;">
							<img src="https://picsum.photos/<?= $i ?>" class="card-img-top" alt="..." width="200" height="200">
							<div class="card-body">
								<h5 class="card-title">Produk <?= $i ?></h5>
								<p class="card-text">
									Baju dengan ukuran S, M, L, XL, XXL
								</p>
								<a href="#" class="btn btn-success">
									<i class="fas fa-shopping-cart"></i>
									Beli
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>





</body>

</html>