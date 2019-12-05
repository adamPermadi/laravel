<?php 

if (!isset($_GET['id'])) {
	header("Location: index.php");
}

require '../helper/functions.php';
$id = $_GET['id'];

$flora_dan_fauna = query("SELECT * FROM flora_dan_fauna WHERE id = $id")[0]



 ?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flora dan Fauna</title>
	<link rel="stylesheet" href="../assets/css/latihan3.css">
</head>
<body>
	

	<div class="header">
		<p>Profil Flora dan Fauna</p>
	</div>
<div class="container">
	<div class="content">
		<div class="gambar">
			<img src="../assets/img/<?= $flora_dan_fauna['gambar'] ?>">
		</div>
		<div class="desc">
			<p class= "jenis_spesies"><?= $flora_dan_fauna['jenis_spesies'] ?></p>
			<p><?= $flora_dan_fauna['nama_lain'] ?></p>
			<p><?= $flora_dan_fauna['ciri_khas'] ?></p>
			<p><?= $flora_dan_fauna['penyebab_kepunahan'] ?></p>
			<p><a href="../index.php">Kembali</a></p>
		</div>
	</div>
</div>

	
</body>
</html>