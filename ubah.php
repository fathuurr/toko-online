<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH BARANG</title>
</head>
<body>
	<?php 
include 'conn.php';
$id = $_GET['id'];

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "SELECT * FROM tbl_barang where id= '$id'";
} else {
	$query = "SELECT * FROM tbl_barang where id= '$id'";
}
	$result = mysqli_query($conn,$query);
	if(!$result){
		die ("QUERY ERROR :".mysqli_errno($conn)." - ".mysqli_error($conn));
	}
	while ($data = mysqli_fetch_assoc($result)){
?>
<form action="cekubah.php?id=<?php echo $id ?>" method="post">
	<br>
	<label>JENIS PRINTER</label>
	<input type="text" name="jenis" value="<?php echo $data['jenis']; ?>">
	<br>
	<br>
	<label>SERI PRINTER</label>
	<input type="text" name="seri"  value="<?php echo $data['seri']; ?>">
	<br>
	<br>
	<label>TAHUN PRINTER</label>
	<input type="text" name="tahun" value="<?php echo $data['tahun']; ?>">
	<br>
	<br>
	<label>HARGA PRINTER</label>
	<input type="text" name="harga" value="<?php echo $data['harga']; ?>">
	<br>
	<br>
	<label >KETERANGAN PRINTER</label>
	<textarea name="keterangan" cols="25" rows="4" ><?php echo $data['keterangan']; ?></textarea>
	<br>
	<br>
	<button type="submit">SIMPAN</button>
	<a href="tbarang.php">BACK</a>
	<br>
	<?php 
}
?>
</form>

</body>
</html>
