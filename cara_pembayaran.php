<?php
require 'function/connection.php';
session_start();

if (!isset($_SESSION['id'])) {
	header("Location: login.php");
}
?>

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
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/popper.min.js"></script>
	<link href="dist/css/styles.css" rel="stylesheet" />


	<!-- js bootstrap css -->


</head>

<body id="page-top">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<div class="container">
			<!-- <a class="navbar-brand" href="#page-top"><img src="dist/assets/img/navbar-logo.svg" alt="..." /></a> -->
			<a class="navbar-brand" href="index.php">
				<h2 style="font-family: 'Brush Script MT'">Relectro</h2>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
					<li class="nav-item"><a class="nav-link active" href="keranjang.php">Keranjang</a></li>
					<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>

				</ul>
			</div>
		</div>
	</nav>

	<div class="container my-5" style="padding-top: 100px;">
		<div class="row mb-5">
			<div class="col-12 text-uppercase h5">
				Tata Cara Pembayaran dengan <?php echo $_GET['metode']; ?>
			</div>
		</div>

		<div class="row">

			<div class="col-md-9">
				<?php
				$sql = "SELECT * FROM cara_pembayaran WHERE kode_metode = '" . $_GET['metode'] . "'";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				echo $row['cara_bayar'];
				?>
			</div>
			<div class="col-md-3">
				<div class="card" style="width: 18rem;">
					<div class="card-header">
						Ringkasan Belanja
					</div>
					<div class="card-body">
						<?php
						// get invoice where invoice_number = $_GET['invoice']
						$sql = "SELECT * FROM invoice WHERE invoice_number = '" . $_GET['invoice'] . "'";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
						?>
						<p class="card-text">Total Harga : <strong>Rp. <?= number_format($row['total_harga'], 0, ',', '.'); ?></strong></p>
						<p class="card-text">Nomor Invoice : <strong><?= $row['invoice_number']; ?></strong></p>
					</div>
				</div>
			</div>

		</div>
	</div>


	<!-- Footer-->
	<footer class="footer py-4 fixed-bottom" style="background-color:dimgray;">
		<div class="container">
			<div class="row align-items-center text-white">
				<div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
				<div class="col-lg-4 my-3 my-lg-0">
					<a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<div class="col-lg-4 text-lg-end">
					<a class="link-dark text-decoration-none me-3 text-white" href="#!">Privacy Policy</a>
					<a class="link-dark text-decoration-none text-white" href="#!">Terms of Use</a>
				</div>
			</div>
		</div>
	</footer>

	<script src="dist/js/scripts.js"></script>

</body>

</html>