<?php session_start(); ?>
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
	<link href="dist/css/styles.css" rel="stylesheet" />

	<script src="dist/jquery-3.6.0.min.js"></script>

</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<!-- <a class="navbar-brand" href="#page-top"><img src="dist/assets/img/navbar-logo.svg" alt="..." /></a> -->
			<a class="navbar-brand" href="#page-top">
				<h2 style="font-family: 'Brush Script MT'">Relectro</h2>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
					<li class="nav-item"><a class="nav-link" href="keranjang.php">Keranjang</a></li>
					<!-- check if session is set -->
					<?php if (isset($_SESSION['id'])) : ?>
						<!-- profile and logout -->
						<li class="nav-item"><a class="nav-link" href="profile.php"><?= !empty($_SESSION['nama']) ? $_SESSION['nama'] : $_SESSION['email']  ?></a></li>
						<li class="nav-item"><a class="nav-link" href="function/logout.php">Logout</a></li>
					<?php else : ?>
						<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Masthead-->
	<header class="masthead">
		<div class="container">
			<div class="masthead-subheading">Welcome To Our Store!</div>
			<div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
			<a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
		</div>
	</header>

	<!-- Services-->
	<section class="page-section" id="services">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">Keunggulan</h2>
				<h3 class="section-subheading text-muted">Keunggulan Memakai E-Commerce Kami</h3>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="my-3">E-Commerce Terpecaya</h4>
					<p class="text-muted">Relectro merupakan salah satu e-commerce terpecaya dalam transaksi jual beli
						online barang elektronik.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="my-3">Berbagai Pilihan Pembayaran</h4>
					<p class="text-muted">Relectro menyediakan berbagai pilihan pembayaran yang memudahkan konsumen
						dalam berbelanja online.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="my-3">Jaminan Keamanan Transaksi</h4>
					<p class="text-muted">Relectro menyediakan keamanan traksaksi berbelanja online dari transaksi
						pembayaran hingga produk yang dipesan sampai ke tangan konsumen.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer-->
	<footer class="footer py-4" style="background-color:dimgray;">
		<div class="container">
			<div class="row align-items-center text-white">
				<div class="col-lg-4 text-lg-start">Relectro &copy;</div>
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

	<!-- Bootstrap core JS-->
	<script src="dist/js/bootstrap.min.js"></script>
	<!-- Core theme JS-->
	<script src="dist/js/scripts.js"></script>
	<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>