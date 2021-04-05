<?php 
include 'conn.php';
$id = $_GET['id'];
$jenis = $_POST['jenis'];
$seri = $_POST['seri'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

$row = mysqli_query($conn, "UPDATE tbl_barang SET jenis= '$jenis',seri= '$seri',tahun= '$tahun',harga= '$harga',keterangan= '$keterangan' where id= '$id' ");
header('location:tbarang.php?pesan=berhasil');
?>