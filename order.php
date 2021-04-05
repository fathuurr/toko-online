<!DOCTYPE html>
<html>
<head>
	<title>ORDER BARANG</title>
</head>
<body>
<?php 
include 'conn.php';
$id = $_GET['id'];
$query = mysqli_query($conn ,"SELECT * FROM tbl_barang where id = '$id'");
while ($data = mysqli_fetch_assoc($query)){
?>
	<form action="cekorder.php" method="post">
		<br>
		<label>NAMA 	:</label>
		<input type="text" name="nama" required size="50">
		<br>
		<br>
		<label>EMAIL 	:</label>
		<input type="email" name="email" required>
		<br>
		<br>
		<label>ALAMAT 	:</label>
		<input type="text" name="alamat" required>
		<br>
		<br>
		<label>TELEPON 	:</label>
		<input type="text" name="telepon" required="" d>
		<br>
		<br>
		<label >TIPE 	:</label>
		<input type="text" name="tipe" value="<?php echo $data['jenis']; ?>" readonly>
		<br>
		<br>
		<label>HARGA 	:</label>
		<input type="text" name="harga" value="<?php echo $data['harga']; ?>" readonly>
		<br>
			<br>
			<label>PEMBAYARAN	:</label>
		<select name="bayar">
			<option value="Tunai">TUNAI</option>
			<option value="Digital">DIGITAL</option>
		</select>
		<br>
		<input type="status" name="status" value="Mennunggu"  hidden>
		<br>
		<button type="submit">ORDER</button>
		<a href="lbarang.php">BACK</a>
		<br>
		<?php 
	}
		?>
	</form>

</body>
</html>