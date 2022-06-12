<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Relectro</title>
	<!-- Favicon-->
	<!-- <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" /> -->
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
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- menu in right -->
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
					<li class="nav-item active"><a class="nav-link" href="keranjang.php">Keranjang</a></li>
					<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container text-black">
		<div class="row mb-5">
			<div class="col-4"></div>
			<div class="col-4">
				<div class="card">
					<div class="card-header">
						<h3>Detail Pembayaran</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="exampleRadios"
										id="exampleRadios1" value="option1" checked>
									<label class="form-check-label" for="exampleRadios1">
										COD (Cash On Delivery)
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="exampleRadios"
										id="exampleRadios1" value="option1" checked>
									<label class="form-check-label" for="exampleRadios1">
										Transfer Bank
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="exampleRadios"
										id="exampleRadios1" value="option1" checked>
									<label class="form-check-label" for="exampleRadios1">
										Kartu Kredit/Debit
									</label>
								</div>
							</div>
							<div class="row align-center">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary mb-4">Buat Pesanan</button>
								</div>
							</div>
							<!-- <div class="form-group">
									<label for="">Alamat</label>
									<input type="text" class="form-control" id="alamat" placeholder="Alamat">
								</div>
								<div class="form-group">
									<label for="">No. HP</label>
									<input type="text" class="form-control" id="no_hp" placeholder="No. HP">
								</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-4"></div>
	</div>
	</div>

</body>

</html>