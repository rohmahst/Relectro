<?php

require "connection.php";
session_start();

// edit profile function
// id
// nama
// email
// no_hp
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'] ?? "";
	$no_hp = $_POST['no_hp'] ?? "";
	$alamat = $_POST['alamat'] ?? "";

	$sql = "UPDATE user SET nama = '$nama', no_hp = '$no_hp', alamat = '$alamat' WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$_SESSION['nama'] = $nama;
		$_SESSION['no_hp'] = $no_hp;
		$_SESSION['alamat'] = $alamat;
		header("Location: ../profile.php?status=success");
	} else {
		header("Location: ../profile.php?status=failed");
	}
} else {
	header("Location: ../profile.php?status=failed");
}
