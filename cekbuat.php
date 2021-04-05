<?php 
include 'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$row = mysqli_query($conn, "INSERT INTO tbl_user(username,password,role) VALUES('$username','$password','$role')");
header('location:home.php?pesan=berhasil');
?>