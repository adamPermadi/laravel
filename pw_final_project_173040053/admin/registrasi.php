<?php 
require '../helper/functions.php';
	if(isset($_POST["register"])) {
		if(registrasi($_POST) > 0) {
			echo "<script>
			alert('user baru berhasil ditambahkan!');
			</script>";
		} else {
			echo_mysqli_error($conn);
		}
	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/registrasi.css">
</head>
<body>
	<div class="bar">
		<div class="back">
			<a href="login.php">Back</a>
		</div>
	</div>
	<h1 style="text-align: center;">Halaman Registrasi</h1>
	<div class="kotak">
		<form action="" method="post">
			<label for="username">Username : </label>
			<input type="text" name="username" id="username" autofocus autocomplete="off" size="60"><br><br>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password" autofocus autocomplete="off" size="60"><br><br>
			<label for="password2">Konfirmasi Password : </label>
			<input type="password" name="password2" id="password2" autofocus autocomplete="off" size="48"><br><br>
			<button type="submit" name="register">Registrasi ! </button>
		</form>
	</div>

</body>
</html>