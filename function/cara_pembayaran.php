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
$metode_bayar = $_POST['metode'];
$invoice_number = $_GET['invoice'];

// get item from table cara_pembayaran where kode_metode = $metode_bayar
$sql = "SELECT * FROM cara_pembayaran WHERE kode_metode = '$metode_bayar'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// update table invoice set id_cara_pembayaran = $row['id'] where invoice_number = $invoice_number
$sqlInvoice = "UPDATE invoice SET id_cara_pembayaran = '$row[id]' WHERE invoice_number = '$invoice_number'";
$resultInvoice = $conn->query($sql);

header("Location: ../cara_pembayaran.php?invoice=$invoice_number&metode=$metode_bayar");
