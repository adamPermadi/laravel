<?php 
$conn = mysqli_connect("localhost", "root", "", "pw_b_2018");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ){
	$rows[] = $row;
	}

	return $rows;
}

function tambah($data) {
	global $conn;

		$jenis_spesies = htmlspecialchars($data["jenis_spesies"]);
		$nama_lain = htmlspecialchars($data["nama_lain"]);
		$ciri_khas = htmlspecialchars($data["ciri_khas"]);
		$penyebab_kepunahan = htmlspecialchars($data["penyebab_kepunahan"]);
		//$gambar= htmlspecialchars($_FILES['gambar']['nameFiles']);
		$gambar = upload();
		if(!$gambar){
			return false;
		}
		$query = "INSERT INTO flora_dan_fauna
				VALUES
				('', '$jenis_spesies', '$nama_lain', '$ciri_khas', '$penyebab_kepunahan', '$gambar')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if($error === 4){
		echo "<script>
		alert('pilih gambar terlebih dahulu');
		</script>";

		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
		alert('yang anda upload bukan gambar');
		</script>";

		return false;
	}

	if($ukuranFile > 1000000) {
		echo "<script>
		alert('ukuran gambar terlalu besar');
		</script>";

		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);
	return $namaFileBaru;

}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM flora_dan_fauna WHERE id= $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
		global $conn;

		$id = $data["id"];
		$jenis_spesies = htmlspecialchars($data["jenis_spesies"]);
		$nama_lain = htmlspecialchars($data["nama_lain"]);
		$ciri_khas = htmlspecialchars($data["ciri_khas"]);
		$penyebab_kepunahan = htmlspecialchars($data["penyebab_kepunahan"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		if($_FILES['gambar']['error'] === 4){
			$gambar = $gambarLama;
		} else{
			$gambar =upload();
		}
		
		$query = "UPDATE flora_dan_fauna SET 
			  jenis_spesies = '$jenis_spesies',
			  nama_lain = '$nama_lain',
			  ciri_khas = '$ciri_khas',
			  penyebab_kepunahan = '$penyebab_kepunahan',
			  gambar = '$gambar'
			  WHERE id = $id

	";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
	
function koneksi(){
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal!");
		mysqli_select_db($conn, "pw_b_2018") or die("Database salah!");

		return $conn;
	}
 
//end of function

//function query

function cari($keyword){
		$query = "SELECT * FROM flora_dan_fauna
					WHERE 
					jenis_spesies LIKE '%$keyword%' OR
					nama_lain LIKE '%$keyword%' OR
					ciri_khas LIKE '%keyword%' OR
					penyebab_kepunahan LIKE '%keyword%'
					";
		return query($query);
	}

function registrasi($data){
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
    	echo "<script>
    	alert('username sudah terdaftar');
    	</script>";

    	return false;
    }
	if( $password !== $password2){
		echo "<script>
		alert('konfirmasi password tidak seusai!')
		</script>";

		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}




 ?>