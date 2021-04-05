<?php 
include 'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];

$row = mysqli_query($conn, "SELECT * FROM tbl_user where username= '$username' and password= '$password'");
$check = mysqli_num_rows($row);

if($check>0){
	$data = mysqli_fetch_assoc($row);
	if($data['role']==1){
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "1";

		header('location:halamanadmin.php');

	} else if($data['role']==2){
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "2";
		header('location:halamanuser.php');
	} else{
		header('location:home.php?pesan=gagal');
	}
} else{
	header('location:home.php?pesan=gagal');
}
?>