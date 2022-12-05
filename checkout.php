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
		<div class="row mb-5">
			<div class="col-12 text-uppercase h5">
				Informasi Pembeli
			</div>
		</div>

		<div class="row">

			<div class="col-md-9">
				<?php
				$sql = "SELECT * FROM keranjang JOIN isi_keranjang ON keranjang.id = isi_keranjang.id_keranjang JOIN barang ON isi_keranjang.id_barang = barang.id WHERE id_user = '$_SESSION[id]' and status_keranjang = '0'"; // get item from table keranjang where id_user = $_SESSION['id'] and status_keranjang = 0 (not yet paid)
				$query = mysqli_query($conn, $sql);
				$total = mysqli_num_rows($query);
				$keranjang = mysqli_fetch_all($query, MYSQLI_ASSOC);

				$totalHarga = 0;
				foreach ($keranjang as $item) {
					$totalHarga += $item['harga'];
				}

				?>

				<form action="function/create_invoice.php" method="POST" id="formIdentitas">
					<!-- hidden id keranjang -->
					<input type="hidden" name="id_keranjang" value="<?= $keranjang[0]['id_keranjang'] ?>">
					<!-- make invoice number yymmddhhmmss -->
					<input type="hidden" name="invoice" value="INV-<?= date('ymdHis') . $_SESSION['id'] ?>">
					<!-- hidden total harga -->
					<input type="hidden" name="total_harga" value="<?= $totalHarga ?>">
					<?php
					$sql = "SELECT * FROM invoice ORDER BY id DESC LIMIT 1";
					?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" placeholder="Nama" value="<?= !empty($_SESSION['nama']) ? $_SESSION['nama'] : $_SESSION['email']  ?>" name="nama" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email" value="<?= $_SESSION['email'] ?? '' ?>" name="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?= $_SESSION['alamat'] ?? '' ?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="no_hp">No. HP</label>
								<input type="text" class="form-control" id="no_hp" placeholder="No. HP" name="no_hp" value="<?= $_SESSION['no_hp'] ?? '' ?>" required>
							</div>
						</div>
					</div>
				</form>

			</div>
			<div class="col-md-3">
				<div class="card" style="width: 18rem;">
					<div class="card-header">
						Ringkasan Belanja
					</div>
					<div class="card-body">

						<p class="card-text">Total Barang : <span class="text-danger"><?= $total ?? 0 ?></span></p>
						<p class="card-text">Total Harga : <span class="text-danger">
								Rp<?= number_format($totalHarga, 0, ',', '.') ?>
							</span></p>
						<hr>

						<button type="submit" form="formIdentitas" class="btn btn-success">Lanjutkan</button>
					</div>
				</div>
			</div>

		</div>
	</div>


	<!-- Footer-->
	<footer class="footer py-4 fixed-bottom" style="background-color:dimgray;">
		<div class="container">
			<div class="row align-items-center text-white">
				<div class="col-lg-4 text-lg-start">Relectro &copy; </div>
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