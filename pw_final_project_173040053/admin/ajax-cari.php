<?php 
require '../helper/functions.php';
$keyword = $_GET["keyword"];
$keyword = $_GET["keyword"];
	$sql = "SELECT * FROM
			flora_dan_fauna
			WHERE jenis_spesies LIKE '%$keyword%'";
	$flora_dan_fauna = query($sql);
 ?>
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
 			<td><?= $fn['jenis_spesies'] ?></td>
 			<td><?= $fn['nama_lain'] ?></td>
 			<td><?= $fn['ciri_khas'] ?></td>
 			<td><?= $fn['penyebab_kepunahan'] ?></td>
 		</tr>
 		<?php $i++ ?>
 		
 	<?php endforeach ?>
 	</table>