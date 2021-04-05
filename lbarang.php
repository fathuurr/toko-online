<!DOCTYPE html>
<html>
<head>
	<title>LIST BARANG</title>
</head>
<body>
	<table border="1" cellspacing="25" cellpadding="30" style="position: center;">
<thead>
	<tr>
		<td>NO</td>
		<td>JENIS PRINTER</td>
		<td>SERI PRINTER</td>
		<td>TAHUN PRINTER</td>
		<td>HARGA PRINTER</td>
		<td>KETERANGAN</td>
		<td>AKSI</td>
	</tr>
</thead>
<center>
<form action="lbarang.php" method="get" style="text-align: center;">
	<label>CARI:</label>
	<input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
	<button type="submit">CARI</button>
</form>
</center>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>HASIL PENCARIAN :".$cari." </b>";
}
?>

<?php 
 include 'conn.php';
 $no = 1;
 $data_barang = mysqli_query($conn,"SELECT * FROM tbl_barang");
 $jumlah = mysqli_num_rows($data_barang);
?> 
<p>JUMLAH LIST :<b><?php echo $jumlah ?></b><p>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$query = "SELECT * FROM tbl_barang where jenis like '%".$cari."%' OR seri like '%".$cari."%' ORDER BY id ASC ";
	} else {
		$query = "SELECT * FROM tbl_barang ORDER BY id ASC";
	} 
	$result = mysqli_query($conn,$query);
	if(!$result){
		die("QUERY ERROR :".mysqli_errno($conn). " - ".mysqli_error($conn));
	}
	while ($data = mysqli_fetch_assoc($result)){
	?>
	<tbody>
		<tr>
			<td><?php echo $no ?></td>
				<td><?php echo $data['jenis']; ?></td>
				<td><?php echo $data['seri']; ?></td>
				<td><?php echo $data['tahun']; ?></td>
				<td><?php echo $data['harga']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
				<td>
					<a href="order.php?id=<?php echo $data['id'] ?>">ORDER</a>
					<a href="halamanuser.php">BACK</a>
				</td>
		</tr>
		<?php 
$no++;
}
		?>
	</tbody>
</body>
</table>
</html>