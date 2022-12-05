<?php
require "function/connection.php";
session_start(); ?>
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
					<li class="nav-item"><a class="nav-link active" href="produk.php">Produk</a></li>
					<li class="nav-item"><a class="nav-link" href="keranjang.php">Keranjang</a></li>
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

	<div class="container mt-5" style="padding-top: 100px;">
		<div class="row mb-5">
			<div class="col-12 text-uppercase h4">
				Daftar produk kami
			</div>
		</div>

		<div class="row">
			<?php
			// get page number
			$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
			// get limit
			$limit = 8;
			// get offset
			$offset = ($page - 1) * $limit;
			// get total rows
			$sql = "SELECT COUNT(*) AS total FROM barang";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$total_rows = $row['total'];
			// get total pages
			$total_pages = ceil($total_rows / $limit);
			// get data
			$sql = "SELECT * FROM barang LIMIT $limit OFFSET $offset";

			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			foreach ($row as $row) : ?>
				<div class="col-md-3">
					<div class="card-deck">
						<div class="card m-1 p-1" style="width: 18rem;">
							<img class="img-fluid" src="images/<?= $row['image'] ?>" alt="..." style="width: 100%; height: 200px;" alt="...">
							<div class="card-body bg-light">
								<h5 class="card-title" style="font-size: 14px;"><?= $row['nama_barang'] ?></h5>
								<p class="card-text text-wrap overflow-auto" style="height: 150px; font-size: 14px;">
									<?= $row['deskripsi'] ?>
								</p>
								<div class="row">
									<div class="col-6 text-left">
										<h5 class="card-title" style="font-size: 14px;">Rp<?= number_format($row['harga'], 0, ',', '.') ?></h5>
									</div>
									<div class="col-6 text-right">
										<a href="function/addCart.php?id=<?= $row['id'] ?>" class="btn btn-success">
											<i class="fas fa-shopping-cart"></i>
											Beli
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<?php if ($page > 1) : ?>
							<li class="page-item">
								<a class="page-link" href="?page=<?= $page - 1 ?>">
									<i class="fas fa-chevron-left"></i>
								</a>
							</li>
						<?php endif; ?>
						<?php for ($i = 1; $i <= $total_pages; $i++) : ?>
							<li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
								<a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
							</li>
						<?php endfor; ?>
						<?php if ($page < $total_pages) : ?>
							<li class="page-item">
								<a class="page-link" href="?page=<?= $page + 1 ?>">
									<i class="fas fa-chevron-right"></i>
								</a>
							</li>
						<?php endif; ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>


	<!-- Footer-->
	<footer class="footer py-4" style="background-color:dimgray;">
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