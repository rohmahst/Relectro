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
					<li class="nav-item"><a class="nav-link " href="keranjang.php">Keranjang</a></li>
					<!-- check if session is set -->
					<?php if (isset($_SESSION['id'])) : ?>
						<!-- profile and logout -->
						<li class="nav-item"><a class="nav-link " href="profile.php"><?= !empty($_SESSION['nama']) ? $_SESSION['nama'] : $_SESSION['email']  ?></a></li>
						<li class="nav-item"><a class="nav-link active" href="function/logout.php">Logout</a></li>
					<?php else : ?>
						<li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
					<?php endif; ?>

				</ul>
			</div>
		</div>
	</nav>

	<div class="container my-5" style="padding-top: 100px;">
		<div class="row">

			<!-- if status = success -->
			<?php if (isset($_GET['status']) && $_GET['status'] == "success") { ?>
				<div class="alert alert-success" role="alert">
					<strong>Berhasil!</strong> Data berhasil diubah.
				</div>
			<?php } ?>
			<!-- if status = failed -->
			<?php if (isset($_GET['status']) && $_GET['status'] == "failed") { ?>
				<div class="alert alert-danger" role="alert">
					<strong>Gagal!</strong> Data gagal diubah.
				</div>
			<?php } ?>
			<!-- if status = registered -->
			<?php if (isset($_GET['status']) && $_GET['status'] == "registered") { ?>
				<div class="alert alert-success" role="alert">
					<strong>Berhasil!</strong> Silahkan isi data anda.
				</div>
			<?php } ?>

			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Data Akun</h5>
						<p class="card-text">

						<form action="function/edit_profile.php" method="post">
							<!-- hidden -->
							<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
							<table class="table table-striped">
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td>
										<!-- form group -->
										<div class="form-group">
											<input type="text" class="form-control form-control-sm" id="nama" placeholder="Nama" name="nama" value="<?php echo $_SESSION['nama']; ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>
										<!-- form group -->
										<div class="form-group">
											<input type="text" class="form-control form-control-sm" id="email" placeholder="Email" name="email" disabled value="<?php echo $_SESSION['email']; ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td>
										<!-- form group -->
										<div class="form-group">
											<input type="text" class="form-control form-control-sm" id="alamat" placeholder="Alamat" name="alamat" value="<?php echo $_SESSION['alamat']; ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>No. HP</td>
									<td>:</td>
									<td>
										<!-- form group -->
										<div class="form-group">
											<input type="number" class="form-control form-control-sm" id="no_hp" placeholder="No. HP" name="no_hp" value="<?php echo $_SESSION['no_hp']; ?>">
										</div>
									</td>
								</tr>
							</table>
							<button type="submit" class="btn btn-info">Simpan</button>
						</form>
						</p>




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