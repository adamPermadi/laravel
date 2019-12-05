const keyword = document.querySelector('.keyword');
const tombolCari = document.querySelector('.tombol-cari');
const container = document.querySelector('.container');


tombolCari.style.display = 'none';
// tambahkan aksi

keyword.addEventListener('keyup', function() {
	
	//buat objek ajax

	const xhr = new XMLHttpRequest();

	//cek kesiapan ajax

	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText;
		}
	}

	// jalankan ajax

	xhr.open('get', 'ajax-cari.php?keyword=' + keyword.value);
	xhr.send();


});
