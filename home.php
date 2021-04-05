<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
	<title>LOGIN</title>
</head>
<body>
<form action="ceklogin.php" method="post">
	
	<label >USERNAME
	<input type="text" name="username" class="form-control" required></label>
	
	<br>
	<label>PASSWORD
	<input type="password" name="password" class="form-control" required></label>
	<br>
	<br>
	<button type="submit">SIMPAN</button>
	<a href="buat.php">BUAT</a>
	<br>
</form>
</body>
</html>