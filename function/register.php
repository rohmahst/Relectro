<?php

require "connection.php";
session_start();
// get the data from the form and store it in variables
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// if email and password are not empty, then we can proceed
if (!empty($email) && !empty($password)) {
	// check if the email is already in the database
	$sql = "SELECT * FROM user WHERE email = '$email'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// if the email is already in the database, redirect to the login page
		header("Location: ../login.php?status=already_registered");
	} else {
		// hash the password
		$password = password_hash($password, PASSWORD_DEFAULT);

		// if the email is not in the database, insert the data into the database
		$sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
		$result = $conn->query($sql);

		if ($result) {
			// if the data is inserted into the database, redirect to the login page

			// get the id of the user that just registered and save the session variable
			$sql = "SELECT * FROM user WHERE email = '$email'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$_SESSION['id'] = $row['id'];
			$_SESSION['nama'] = $row['nama'] ?? '';
			$_SESSION['email'] = $row['email'] ?? '';
			$_SESSION['alamat'] = $row['alamat'] ?? '';
			$_SESSION['no_hp'] = $row['no_hp'] ?? '';

			header("Location: ../profile.php?status=registered");
		} else {
			// if the data is not inserted into the database, redirect to the login page
			header("Location: ../login.php?status=failed");
		}
	}
} else {
	// if email and password are empty, redirect to the register page
	header("Location: ../register.php?status=empty_fields");
}
