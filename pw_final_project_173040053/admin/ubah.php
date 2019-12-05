p<?php
require '../helper/functions.php';
$id = $_GET['id'];
$flora_dan_fauna = query("SELECT * FROM flora_dan_fauna WHERE id = $id")[0];



	if(isset($_POST["ubah"])) {
		if(ubah($_POST) > 0) {
			echo "<script>
			alert('data berhasil diubah!');
			document.location.href = 'index.php';
			</script>";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data</title>
	<link rel="stylesheet" href="../assets/css/ubah.css">
</head>
<body>

	<div class="bar">
		<div class="back">
			<a href="index.php">Back</a>
		</div>
	</div>

	<h1>Ubah Data</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $flora_dan_fauna["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?php echo $flora_dan_fauna["gambar"]; ?>">
		<ul>
			<li>
				<label for="jenis_spesies">Jenis Spesies :</label><br><br>
				<input type="text" name="jenis_spesies" id="jenis_spesies" required autocomplete="off" value="<?php echo $flora_dan_fauna["jenis_spesies"]; ?>" required size="40">
			</li>
			<li>
				<label for="nama_lain">Nama Lain :</label><br><br>
				<input type="text" name="nama_lain" id="nama_lain" value="<?php echo $flora_dan_fauna["nama_lain"]; ?>" size="40">
			</li>
			<li>
				<label for="ciri_khas">Ciri Khas :</label><br><br>
				<input type="text" name="ciri_khas" id="ciri_khas" value="<?php echo $flora_dan_fauna["ciri_khas"]; ?>" size="40">
			</li>
			<li>
				<label for="penyebab_kepunahan">Penyebab Kepunahan :</label><br><br>
				<input type="text" name="penyebab_kepunahan" id="penyebab_kepunahan" value="<?php echo $flora_dan_fauna["penyebab_kepunahan"]; ?>" size="40">
			</li>
			<li>
				<label for="gambar">Gambar :</label><br><br>
				<img src="../assets/img/<?= $flora_dan_fauna["gambar"] ?>"><br><br>
				<input type="file" name="gambar" id="gambar"> 
			</li>
			<li>
				<button type="submit" name="ubah">Ubah Data</button>
			</li>
		</ul>

	</form>

</body>
</html> 