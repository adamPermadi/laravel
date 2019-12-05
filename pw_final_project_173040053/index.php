<?php 
 
require 'helper/functions.php';
$flora_dan_fauna = query("SELECT * FROM flora_dan_fauna");



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flora dan Fauna</title>
	<link rel="stylesheet" href="assets/css/latihan2.css">
</head>
<body>
	<div class="bar">
		<a href="admin/login.php">
			<div class="login">Login</div>
		</a>
	</div>

		<div class="header">
			<p>Flora dan Fauna</p>
		</div>
		<div class="container">
		<?php  foreach ($flora_dan_fauna as $fn) :?> 
 			
 			<div class="content">
			<div class="gambar">
				<img src="assets/img/<?= $fn['gambar'] ?>">
			</div>
			<p class="nama">
				<a href="php/profil.php?id=<?php echo $fn['id'] ?>"><?php echo $fn['jenis_spesies']; ?></a>
			</p>
			<p><?= $fn['nama_lain'] ?></p>
			<p><?= $fn['ciri_khas'] ?></p>
			
			</div>
		<?php endforeach; ?>

		</div>

</body>
</html>