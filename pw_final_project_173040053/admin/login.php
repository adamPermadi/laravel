<?php 

	if (isset($_POST["submit"])) {
		if ($_POST["username"]=="admin" && $_POST["password"]=="123") {
			header("Location: index.php");
			exit;
		}
		else{
			$error = true;
		}
	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>
<body>
	<div class="bar">
		<a href="../admin/registrasi.php">
			<div class="registrasi">Registrasi !</div>
		</a>
	</div>
	<h1 style="text-align: center; color: ">Login Admin</h1>
	<div class="kotak">
		<form action="" method="post">
				<img src="../assets/img/login.png" width="60px" style="float: center;"><br><br>
				<label for="username" >Username :</label>
				<input type="text" name="username" id="username" autofocus autocomplete="off" size="60"><br><br>
				<label for="password" >Password :</label>
				<input type="password" name="password" id="password" size="60"><br><br>
				<button type="submit" name="submit">LOGIN</button><br><br>
				<input type="checkbox" name="remember" value="remember">Remember Me!<br>
				
		</form>
	</div>
				<?php if (isset($error)) :?>

					<p style="color: red; font-style: italic; text-align: center;" >Username / password salah!</p>

				<?php endif; ?>
			
				



</body>
</html>