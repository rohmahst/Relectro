<?php

require "connection.php";
session_start();

$id_keranjang = $_GET['id_keranjang'];
$id_barang = $_GET['id_barang'];

// delete item from isi_keranjang table where id_keranjang = $id_keranjang and id_barang = $id_barang
$sql = "DELETE FROM isi_keranjang WHERE id_keranjang = '$id_keranjang' AND id_barang = '$id_barang'";
$result = $conn->query($sql);

header("Location: ../keranjang.php");