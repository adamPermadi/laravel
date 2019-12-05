<?php 
require '../helper/functions.php';


	if(isset($_POST["tambah"])) {
		if(tambah($_POST) > 0) {
			echo "<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'index.php';
			</script>";
		} else {
		echo "<script>
		alert('data gagal ditambahkan!');
		document.location.href = 'index.php';
		</script>";
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data Flora dan Fauna</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/tambah.css">
</head>
<body>
	<div class="bar">
		<div class="back">
			<a href="index.php">Back</a>
		</div>
	</div>
	<h1>Tambah Data Flora dan Fauna</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="jenis_spesies">Jenis Spesies :</label><br>
				<input type="text" name="jenis_spesies" id="jenis_spesies" required autocomplete="off" size="40">
			</li>
			<li>
				<label for="nama_lain">Nama Lain :</label><br>
				<input type="text" name="nama_lain" id="nama_lain" size="40">
			</li>
			<li>
				<label for="ciri_khas">Ciri Khas :</label><br>
				<input type="text" name="ciri_khas" id="ciri_khas" autocomplete="off" size="40">
			</li>
			<li>
				<label for="penyebab_kepunahan">Penyebab Kepunahan :</label><br>
				<input type="text" name="penyebab_kepunahan" id="penyebab_kepunahan" autocomplete="off" size="40">
			</li>
			<li>
				<label for="gambar">Gambar :</label><br>
				<input type="file" name="gambar" id="gambar"> 
			</li>
			<li>
				<button type="submit" name="tambah">Tambah Data</button>
			</li>
		</ul>

	</form>

</body>
</html>