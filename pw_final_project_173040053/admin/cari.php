<?php 

	require 'functions.php';

	$keyword = $_GET["keyword"];
	$sql = "SELECT * FROM
			flora_dan_fauna
			WHERE jenis_spesies LIKE '%$keyword%'";
	$flora_dan_fauna = query($sql);

 ?>

	<div class="kotak">

		<?php 
			if(empty($flora_dan_fauna)) {
			echo "<p class=\"nf\">Maaf, perusahaan yang anda cari tidak ditemukan.</p>";
			} 
		?>

		<?php
			foreach ($flora_dan_fauna as $fn) { ?>
				<img src=../assets/img/<?php echo $fn["gambar"] ?> width="50px">
				<div class="konten">
					<span class="jenis_spesies"><a href="../php/profile.php?id=<?php echo $fn["id"] ?>"><?php echo $fn["jenis_spesies"] ?></a></span><br>
					<span class="nama_lain">Nama Lain: <?php echo $fn["nama_lain"]?></span><br>
				</div><hr>

		<?php } ?>

</div>