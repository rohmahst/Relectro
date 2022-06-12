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

	<?php
	// get invoice from database where invoice_number = $_GET['invoice_number']
	$invoice_number = $_GET['invoice_number'];
	$sql = "SELECT * FROM invoice WHERE invoice_number = '$invoice_number'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	?>

	<div class="container my-5" style="padding-top: 100px;">
		<div class="row mb-5">
			<div class="col-12 text-uppercase h5">
				Invoice
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<!-- Make invoice -->
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Invoice</h4>
					</div>

					<!-- invoice body -->
					<div class="card-body">
						<div class="row">
							<!-- invoice number -->
							<div class="col-md-3">
								<div class="form-group">
									<label class="form-label">Invoice Number</label>
									<input type="text" class="form-control" value="<?= $row['invoice_number'] ?>" readonly>
								</div>
							</div>
						</div>
						<!-- buyer information consist of Name, Phone, Email, Address -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Nama</label>
									<input type="text" class="form-control" value="<?= $row['nama_pembeli'] ?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Email</label>
									<input type="text" class="form-control" value="<?= $row['email_pembeli'] ?>" readonly>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">No. HP</label>
									<input type="text" class="form-control" value="<?= $row['no_hp'] ?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Alamat</label>
									<input type="text" class="form-control" value="<?= $row['alamat_pembeli'] ?>" readonly>
								</div>
							</div>
							<!-- list item -->
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th>Product</th>
											<th> </th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<?php
										// get list item from table isi_keranjang join barang on isi_keranjang.id_barang = barang.id  where id_keranjang = $row['id_keranjang']
										$sql = "SELECT * FROM isi_keranjang JOIN barang ON isi_keranjang.id_barang = barang.id WHERE id_keranjang = '$row[id_keranjang]'";
										$result = mysqli_query($conn, $sql);
										$no = 1;
										$totalHarga = 0;
										foreach ($result as $row) :
											$totalHarga += $row['harga'];
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $row['nama_barang'] ?></td>
												<td> </td>
												<td>Rp. <?= number_format($row['harga'] * 1) ?></td>
											</tr>
										<?php endforeach; ?>


									</tbody>
									<tfoot>
										<tr>
											<td colspan="3">Total</td>
											<td>Rp. <?= number_format($totalHarga * 1) ?></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-3">
				<div class="card" style="width: 18rem;">
					<div class="card-header">
						Metode Pembayaran
					</div>
					<div class="card-body">
						<!-- radio button metode pembayaran -->
						<!-- - COD -->
						<!-- - Transfer Bank (BCA) -->
						<form action="function/cara_pembayaran.php?invoice=<?= $_GET['invoice_number'] ?>" method="POST">

							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="metode" id="cod" value="cod" checked>
									<label class="form-check-label" for="cod">
										Cash On Delivery
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="metode" id="bca" value="bca">
									<label class="form-check-label" for="bca">
										Transfer Bank (BCA)
									</label>
								</div>
							</div>

							<!-- button bayar -->
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Bayar</button>
							</div>
						</form>
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

</body>

</html>