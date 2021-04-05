<?php 
include 'conn.php';
$id = $_GET['id'];

$row = mysqli_query($conn , "DELETE FROM tbl_order where id= '$id'");
header('location:luser.php')

?>