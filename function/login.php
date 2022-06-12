<?php

require "connection.php";
session_start();
// login function

if (isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'] ?? '';
	$password = $_POST['password'] ?? '';

	if (!empty($email) && !empty($password)) {
		$sql = "SELECT * FROM user WHERE email = '$email'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$hash = $row['password'];

			if (password_verify($password, $hash)) {
				// if the email and password are correct, redirect to the home page
				// make session variable (id, nama, email, alamat, no_hp)
				$_SESSION['id'] = $row['id'];
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['alamat'] = $row['alamat'];
				$_SESSION['no_hp'] = $row['no_hp'];
				// set session variable to true


				header("Location: ../index.php");
			} else {
				// if the email and password are incorrect, redirect to the login page
				header("Location: ../login.php?status=signin_failed");
			}
		} else {
			// if the email is not in the database, redirect to the login page
			header("Location: ../login.php?status=signin_failed");
		}
	} else {
		// if email and password are empty, redirect to the login page
		header("Location: ../login.php?status=empty_fields");
	}
} else {
	// if the form is not submitted, redirect to the login page
	header("Location: ../login.php");
}
