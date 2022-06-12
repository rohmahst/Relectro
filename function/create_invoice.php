<?php

require "connection.php";
session_start();

// get all post data
// array(7) { 
// 	["id_keranjang"]=> string(1) "2" 
// ["invoice"]=> string(17) "INV-2206122012024" 
// ["total_harga"]=> string(7) "5637950" 
// ["nama"]=> string(6) "Rafibr" 
// ["email"]=> string(16) "rdf399@gmail.com" 
// ["alamat"]=> string(34) "Jl. Janar Putih Pasar Batuah No.37" 
// ["no_hp"]=> string(11) "82255303169" 
// }
$id_user = $_SESSION['id'];
$id_keranjang = $_POST['id_keranjang'];
$invoice = $_POST['invoice'];
$total_harga = $_POST['total_harga'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

if ($id_user) {
	// update keranjang table status_keranjang = 1
	$sql = "UPDATE keranjang SET status_keranjang = true WHERE id = '$id_keranjang' AND id_user = '$id_user'";
	$result = mysqli_query($conn, $sql);

	// make new keranjang
	$sql = "INSERT INTO keranjang (id_user, status_keranjang) VALUES ('$id_user', false)";
	$result = mysqli_query($conn, $sql);


	$sql = "INSERT INTO invoice (
		id_cara_pembayaran,
		id_keranjang,
		id_user,
		invoice_number,
		nama_pembeli,
		email_pembeli,
		alamat_pembeli,
		no_hp,
		total_harga,
		status
	) VALUES (
		null,
		'$id_keranjang',
		'$id_user',
		'$invoice',
		'$nama',
		'$email',
		'$alamat',
		'$no_hp',
		'$total_harga',
		'0'
	)";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location: ../invoice.php?status=success&invoice_number=$invoice");
	} else {
		header("Location: ../invoice.php?status=failed");
	}
} else {
	header("Location: ../invoice.php?status=failed");
}
