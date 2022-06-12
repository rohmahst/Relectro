<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.88.1">
	<title>Signin Template · Bootstrap v4.6</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">



	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


	<!-- Custom styles for this template -->
	<link href="dist/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

	<form class="form-signin" action="function/login.php" method="post">
		<h1>Relectro</h1>
		<h4>Toko Laptop dan Komputer</h4>

		<br>

		<?php
		if (isset($_GET['status'])) {
			if ($_GET['status'] == 'registered') {
				echo '<div class="alert alert-success" role="alert">
						Pendaftaran berhasil, silahkan login.
					</div>';
			} else if ($_GET['status'] == 'already_registered') {
				echo '<div class="alert alert-danger" role="alert">
						Email sudah terdaftar.
					</div>';
			} else if ($_GET['status'] == 'empty_fields') {
				echo '<div class="alert alert-danger" role="alert">
						Harap isi semua field.
					</div>';
			} else if ($_GET['status'] == 'signin_failed') {
				echo '<div class="alert alert-danger" role="alert">
						Email atau password salah.
					</div>';
			} else if ($_GET['status'] == 'failed') {
				echo '<div class="alert alert-danger" role="alert">
						Pendaftaran gagal.
					</div>';
			}
		}
		?>


		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

		<hr>

		<button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #FFC800;">
			Sign in
		</button>

		<div class="mt-5 mb-3 text-muted">
			Don't have an account? <a href="register.php">Sign up</a>
		</div>

		<p class="mt-5 mb-3 text-muted">&copy; 2022-now</p>
	</form>



</body>

</html>