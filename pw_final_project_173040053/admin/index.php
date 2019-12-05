<?php 
sleep(1);
require '../helper/functions.php';
 $flora_dan_fauna = query("SELECT * FROM flora_dan_fauna ORDER BY jenis_spesies ASC");
if(isset($_POST["cari"])) {
	$flora_dan_fauna = cari($_POST["keyword"]);
}

 ?>

 <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Flora dan Fauna</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/index.css">
	</head>
	<body>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="tambah.php">Tambah</a></li>
			<li><a href="../cetak.php" target="_blank">Cetak</a></li>
			<li style="float: right;"><a href="logout.php" ><img src="../assets/img/logout.png" width="40px;"></a></li>
			<form action="" method="post" >
				<input type="text"  placeholder="keyword" name="keyword" class="keyword" autofocus 
					autocomplete="off" style="padding: 10px 10px" size="40px" style="background-color: #bdbdbd" >
				<button type="submit" name="cari" class="tombol-cari">Cari!</button>
			</form>
		</ul>
<div class="container">
 	<table border="1" cellpadding="10" cellspacing="0">
 	<h1>Flora dan Fauna</h1>
 	<tr>
 		<th>No</th>
 		<th>Opsi</th>
 		<th>Gambar </th>
 		<th>Jenis Spesies</th>
 		<th>Nama Lain</th>
 		<th>Ciri Khas</th>
 		<th>Penyebab Kepunahan</th>
 	</tr>

 	<?php $i = 1; ?>
 	<?php foreach ($flora_dan_fauna as $fn ): ?>

 		<tr>
 			<td><?= $i ?></td>
 			<td>
 				<a href="ubah.php?id=<?php echo $fn["id"]; ?>">Ubah</a> 
 				<a href="hapus.php?id=<?php echo $fn['id'];?>" onclick = "return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
 			</td>
 			<td><img src="../assets/img/<?= $fn ['gambar'] ?>"></td>
 			<td style="text-align: center;"><?= $fn['jenis_spesies'] ?></td>
 			<td style="text-align: center;"><?= $fn['nama_lain'] ?></td>
 			<td><?= $fn['ciri_khas'] ?></td>
 			<td><?= $fn['penyebab_kepunahan'] ?></td>
 			
 		</tr>
 		<?php $i++ ?>
 		
 	<?php endforeach ?>
 	</table>
 </div>
 	<script src="../assets/js/jquery-3.2.1.min.js"></script>
 	<script src="../assets/js/script.js"></script>
 </body>
 </html>