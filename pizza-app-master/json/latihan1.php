<?php 

// $mahasiswa = [
//       [
//       "nama" => "Muhammad Ridlwan",
//       "nrp" => "173040009",
//       "email" => "ridlwanbaks@mail.unpas.ac.id"
//       ],
//       [
//             "nama" => "Muhammad Adakm",
//             "nrp" => "173040006",
//             "email" => "Adama@mail.unpas.ac.id" 
//       ]

// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc','root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;


?>