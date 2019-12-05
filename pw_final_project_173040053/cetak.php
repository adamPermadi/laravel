<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'helper/functions.php';
 $flora_dan_fauna = query("SELECT * FROM flora_dan_fauna ORDER BY jenis_spesies ASC");

$html = '<!DOCTYPE html>
<html>
<head>
	<title>Daftar Flora dan Fauna</title>
	<link rel="stylesheet" href="assets/css/cetak.css">
</head>
<body>
	<h1>Daftar Flora dan Fauna</h1>
	<table border="1" cellpadding="10" cellspacing="0">
 	<h1>Flora dan Fauna</h1>
 	<tr>
 		<th>No</th>
 		<th>Jenis Spesies</th>
 		<th>Nama Lain</th>
 		<th>Ciri Khas</th>
 		<th>Penyebab Kepunahan</th>
 		<th>Gambar </th>
 	</tr>';
 	foreach ($flora_dan_fauna as $fn) {
 		$html .= '<tr>
 		<td>'. $i++ .'</td>
 		<td><img src="assets/img/'. $fn["gambar"] .'"></td>
 		<td>'. $fn["jenis_spesies"] .'</td>
 		<td>'. $fn["nama_lain"] .'</td>
 		<td>'. $fn["ciri_khas"] .'</td>
 		<td>'. $fn["penyebab_kepunahan"] .'</td>
 		</tr>';
 	}
$html .= '</table>
</body>
</html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output("daftar-florafauna.pdf", \Mpdf\Output\Destination::INLINE);

?>

