function login() {
	var password = document.getElementById('pass').value;
	var username = document.getElementById('user').value;
	if(password == "admin" && username == "admin") {
		alert("Selamat datang admin");
		document.location.href = "../admin/index.php";
	} else if (username == "" && password == "") {
		alert("Silahkan masukkan username!");
	} else {
		alert("Username Anda salah!");
	}

	
}