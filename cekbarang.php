<?php 
include 'conn.php';
$jenis = $_POST['jenis'];
$seri = $_POST['seri'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

$row = mysqli_query($conn, "INSERT INTO tbl_barang(jenis,seri,tahun,harga,keterangan) VALUES('$jenis','$seri','$tahun','$harga','$keterangan')");
header('location:tbarang.php?pesan=berhasil');
?>