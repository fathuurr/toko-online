<?php 
include 'conn.php';
$id = $_GET['id'];


$row = mysqli_query($conn , "UPDATE tbl_order SET status='Batal' where id= '$id' ");
header('location:luser.php');
?>