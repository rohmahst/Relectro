<?php

require "connection.php";
session_start();

// get keranjang where id_user = $_SESSION['id'] and status_keranjang = 0
$sql = "SELECT * FROM keranjang WHERE id_user = '$_SESSION[id]' AND status_keranjang = 0";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// add item to isi keranjang table (id_barang = $_GET['id'], id_keranjang = $row['id'])
$sql = "INSERT INTO isi_keranjang (id_barang, id_keranjang) VALUES ('$_GET[id]', '$row[id]')";
$result = $conn->query($sql);

header("Location: ../keranjang.php");
