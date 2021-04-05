<!DOCTYPE html>
<html>
<head>
	<title>LIST USER</title>
</head>
<body>
	<form action="luser.php" method="GET" style="text-align: center;">
		<label>CARI :</label>
		<input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari']; }?>">
		<button type="submit">CARI</button>
	</form>

	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>HASIL PENCARIAN :".$cari."</b>";
	}
	?>


	<form action="cekuser.php" method="post">
<table border="1" cellpadding="25" cellspacing="20">
	<thead>
		<tr>
			<td>NO</td>
			<td>NAMA</td>
			<td>EMAIL</td>
			<td>ALAMAT</td>
			<td>TIPE</td>
			<td>HARGA</td>
			<td>PEMBAYARAN</td>
			<td>STATUS</td>
			<td>KONFRIMASI PEMBAYARAN</td>
			<td>AKSI</td>
		</tr>
	</thead>

		<?php 
	include 'conn.php';
	$no = 1;
	$data_order = mysqli_query($conn, "SELECT * FROM tbl_order");
	$jumlah = mysqli_num_rows($data_order);
	?>
	<p>JUMLAH ORDER : <b><?php echo $jumlah ?></b></p>

	<?php
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$query = "SELECT * FROM tbl_order where nama like '%".$cari."%' OR email like '%".$cari."%' ORDER BY id ASC";
	}  else{
		$query = "SELECT * FROM tbl_order ORDER BY id ASC";
	} 
	$result = mysqli_query($conn,$query);
	if(!$result){
		die("QUERY ERROR :".mysqli_errno($conn). " - ".mysqli_error($conn));
	} while($data = mysqli_fetch_assoc($result)){
	?>

	<tbody>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['tipe']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['bayar']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td>
				<a href="konfirmasi.php?id=<?php echo $data['id'] ?>">Konfirmasi</a>
				<p></p>
				<a href="batal.php?id=<?php echo $data['id'] ?>">Dibatalkan</a>
				
				
			</td>
			<td>
				
				<a href="ohapus.php?id=<?php echo $data['id'] ?>"> Hapus </a>
				<p></p>
				<a href="halamanadmin.php"> Back </a>
			</td>
		</tr>
	</tbody>
	<?php 
$no++;
}
	?>
</table>
</form>
</body>
</html>