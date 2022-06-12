<?php
require "function/connection.php";
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
	<script src="dist/popper.js"></script>

	<link href="dist/css/styles.css" rel="stylesheet" />

	<link rel="stylesheet" href="dist/DataTables/datatables.min.css">
	<script src="dist/DataTables/datatables.min.js"></script>

	<!-- js bootstrap css -->

</head>

<body class="">
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
					<!-- check if session is set -->
					<?php if (isset($_SESSION['id'])) : ?>
						<!-- profile and logout -->
						<li class="nav-item"><a class="nav-link " href="profile.php"><?= !empty($_SESSION['nama']) ? $_SESSION['nama'] : $_SESSION['email']  ?></a></li>
						<li class="nav-item"><a class="nav-link" href="function/logout.php">Logout</a></li>
					<?php else : ?>
						<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
					<?php endif; ?>

				</ul>
			</div>
		</div>
	</nav>

	<div class="container my-5" style="padding-top: 100px;">
		<div class="row mb-2">
			<div class="col-12 text-uppercase h5">
				Keranjang
			</div>
		</div>

		<!-- <div class="table-responsive">
  <table class="table"> -->
		<div class="row">
			<div class="col-md-9">
				<table class="table table-responsive table-striped table-hover w-100 d-block d-md-table" id="table-cart">
					<thead>
						<tr>
							<th scope="col">Item</th>
						</tr>
					</thead>

					<?php
					$sql = "SELECT * FROM keranjang WHERE status_keranjang = 0 AND id_user = '" . $_SESSION['id'] . "'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

					$isExistKeranjangActive = false;

					if (count($row) < 1) {
						$isExistKeranjangActive = true;
					}



					// if not found insert new item to table keranjang id_user and status_keranjang = 0 (not yet paid)
					if ($isExistKeranjangActive) {
						$sql = "INSERT INTO keranjang (id_user, status_keranjang) VALUES ('$_SESSION[id]', '0')";
						$result = mysqli_query($conn, $sql);
						$sql = "SELECT * FROM keranjang JOIN isi_keranjang ON keranjang.id = isi_keranjang.id_keranjang JOIN barang ON isi_keranjang.id_barang = barang.id WHERE id_user = '$_SESSION[id]' and status_keranjang = '0'"; // get item from table keranjang where id_user = $_SESSION['id'] and status_keranjang = 0 (not yet paid)
						$result = mysqli_query($conn, $sql);
						echo "<tr><td>Keranjang kosong</td></tr>";
					} else {
						$sql = "SELECT * FROM keranjang JOIN isi_keranjang ON keranjang.id = isi_keranjang.id_keranjang JOIN barang ON isi_keranjang.id_barang = barang.id WHERE id_user = '$_SESSION[id]' and status_keranjang = '0'"; // get item from table keranjang where id_user = $_SESSION['id'] and status_keranjang = 0 (not yet paid)
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

						if (count($row) < 1) {
							$totalBarang = count($row) ?? 0;

							echo "<tr><td>Keranjang kosong</td></tr>";
						} else {
							$totalHarusDibayar = 0;
							$totalBarang = count($row) ?? 0;

							foreach ($row as $key => $row) {
								$totalHarusDibayar += $row['harga'];
					?>
								<tr>
									<td>
										<div class="row">
											<div class="col-2">
												<img src="images/<?= $row['image'] ?>" class="img-thumbnail" height="100px" width="100px" style="border-radius: 10%; width: 100px; height: 100px;">
											</div>
											<div class="col-9">
												<p>
													<span class="h6">
														<?= $row['nama_barang'] ?>
													</span>
												</p>
												<p>
													<span>
														Rp<?= number_format($row['harga'], 0, ',', '.') ?>
													</span>
												</p>
											</div>
											<!-- at bottom -->
											<div class="col-1 text-right text-white">
												<a class="btn btn-danger btn-sm" href="function/deleteCart.php?id_barang=<?= $row['id_barang'] ?>&id_keranjang=<?= $row['id_keranjang'] ?>">
													<i class="fas fa-trash"></i>
												</a>
											</div>
										</div>
									</td>
								</tr>
					<?php

							}
						}
					}
					?>

				</table>
			</div>

			<div class="col-md-3">
				<div class="card position-fixed" style="width: 18rem;">
					<div class="card-header">
						Ringkasan Belanja
					</div>
					<div class="card-body">
						<p class="card-text">Total Barang : <span class="text-danger">
								<?=
								$totalBarang ?? 0
								?>
							</span>
						</p>
						<p class="card-text">Total Harga : <span class="text-danger">
								Rp<?= number_format($totalHarusDibayar ?? 0, 0, ',', '.') ?>
							</span>
						</p>
						<hr>

						<?php
						if ($totalBarang > 0) {
						?>
							<a href="checkout.php" class="btn btn-success">Checkout</a>
						<?php

						} else {
						?>
							<a href="produk.php" class="btn btn-success">Lanjutkan Belanja</a>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>


	</div>

	<!-- Footer-->
	<footer class="footer py-4" style="background-color:dimgray;">
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
	<script>
		$(document).ready(function() {
			$('#table-cart').DataTable();
		});
	</script>
</body>