<?php

require "connection.php";
session_start();


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
