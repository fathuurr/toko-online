<!DOCTYPE html>
<html>
<head>
	<title>BUAT</title>
</head>
<body>
<form action="cekbuat.php" method="post">
	<br>
	<label>USERNAME</label>
	<input type="text" name="username" required>
	<br>
	<br>
	<label>PASSWORD</label>
	<input type="password" name="password" required>
	<br>
	<input type="text" name="role" value="2" hidden>	
	<br>
	<button type="submit">SIMPAN</button>
	<a href="home.php">KEMBALI KE LOGIN</a>
	<br>
</form>
</body>
</html>