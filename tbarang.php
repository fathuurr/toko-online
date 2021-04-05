<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH BARANG</title>
</head>
<body>
<form action="cekbarang.php" method="post">
	<br>
	<label>JENIS PRINTER</label>
	<input type="text" name="jenis" required>
	<br>
	<br>
	<label>SERI PRINTER</label>
	<input type="text" name="seri" required>
	<br>
	<br>
	<label>TAHUN PRINTER</label>
	<input type="text" name="tahun" required>
	<br>
	<br>
	<label>HARGA PRINTER</label>
	<input type="text" name="harga" required>
	<br>
	<br>
	<label>KETERANGAN PRINTER</label>
	<textarea name="keterangan"></textarea>
	<br>
	<br>
	<button type="submit">SIMPAN</button>
	<a href="halamanadmin.php">BACK</a>
	<br>
</form>
<form action="tbarang.php" method="get" style="text-align: center">
	<label>CARI :</label>
	<input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
	<button type="submit">CARI</button>
</form>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>NAMA CARI : ".$cari."</b> ";
}
?>
<?php 
include 'conn.php';
$data_barang = mysqli_query($conn, "SELECT * FROM tbl_barang");
$jumlah = mysqli_num_rows($data_barang);
?>
<p>JUMLAH DATA :<b><?php echo $jumlah ?></b></p>
<table border="1" cellpadding="10" cellspacing="10">
<thead>
	<tr>
		<td>NO</td>
		<td>JENIS PRINTER</td>
		<td>SERI PRINTER</td>
		<td>TAHUN PRINTER</td>
		<td>HARGA PRINTER</td>
		<td>KETERANGAN PRINTER</td>
		<td>AKSI</td>
	</tr>
</thead>
<?php 
include 'conn.php';
$no = 1;
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$query = "SELECT * FROM tbl_barang where jenis like '%".$cari."%' OR seri like '%".$cari."%' OR tahun like '%".$cari."%' ORDER BY id ASC";
} else {
	$query = "SELECT * FROM tbl_barang ORDER BY id ASC";
}
	$result = mysqli_query($conn,$query);
	if(!$result){
		die ("QUERY ERROR :".mysqli_errno($conn)." - ".mysqli_error($conn));
	}
	while ($data = mysqli_fetch_assoc($result)){
?>
<tbody>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['jenis']; ?></td>
		<td><?php echo $data['seri']; ?></td>
		<td><?php echo $data['tahun']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['keterangan']; ?></td>
		<td>
			<a href="ubah.php?id=<?php echo $data['id']?>">UBAH</a>
			<a href="hapus.php?id=<?php echo $data['id']?>">HAPUS</a>
		</td>
	</tr>
</tbody>
<?php 
$no++;
}
?>
</body>
</table>
</html>