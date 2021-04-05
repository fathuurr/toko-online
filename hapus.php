<?php 
include 'conn.php';
$id = $_GET['id'];

$row = mysqli_query($conn,"DELETE FROM tbl_barang where id='$id'");
header('location:tbarang.php?pesan=berhasilhapus');
?>