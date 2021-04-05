<!DOCTYPE html>
<html>
<head>
	<title>LIST PESANAN</title>
</head>
<body>
<form action="lpesan.php" method="GET" style="text-align: center;">
	<label>CARI ORDER :</label>
	<input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari']; } ?>">
	<button type="submit">CARI</button>
</form>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>HASIL PENCARIAN : ".$cari." </b>";
}
?>

<?php 
include 'conn.php';
$data_order = mysqli_query($conn , "SELECT * FROM tbl_order");
$jumlah = mysqli_num_rows($data_order);
?>
<p>JUMLAH ORDER : <b><?php echo $jumlah ?></b></p>
<center>
<table border="1" cellpadding="50"  cellspacing="35" style="text-align: center; " >
	<thead>
		<tr>
			<td>NO</td>
			<td>NAMA</td>
			<td>TIPE</td>
			<td>STATUS</td>
			<td>AKSI</td>
		</tr>
	</thead>
	<?php 
	include 'conn.php';
	$no = 1;
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$query = "SELECT * FROM tbl_order where nama like '%".$cari."%' OR tipe like '%".$cari."%' ORDER BY id ASC"; 

	} else {
		$query = "SELECT * FROM tbl_order ORDER BY id ASC";
	} 
	$result = mysqli_query($conn,$query);
	if(!$result){
		die ("QUERY ERROR :".mysqli_errno($conn)." - ".mysqli_error($conn));
	} while ($data = mysqli_fetch_assoc($result)){
	?>
	<tbody>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tipe']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><a href="halamanuser.php">BACK</a></td>
		</tr>
	</tbody>
	<?php
	$no ++; 
}
	?>
</table>
</center>
</body>
</html>