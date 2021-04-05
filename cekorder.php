<?php 
include 'conn.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$bayar = $_POST['bayar'];
$status = $_POST['status'];

$row = mysqli_query($conn, "INSERT INTO tbl_order(nama,email,alamat,telepon,tipe,harga,bayar,status) VALUES('$nama','$email','$alamat','$telepon','$tipe','$harga','$bayar', '$status')");
header('location:lbarang.php?berhasil=order;')

?>