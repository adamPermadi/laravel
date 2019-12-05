$('.tombol-cari').hide();
$('.loader').hide();
$('.keyword').on('keyup', function(){
	//$('.container').load('ajax-cari.php?keyword=' + $('.keyword').val());
	$.ajax({
		url: 'ajax-cari.php';
		type: 'get';
		data: {keyword: $('.keyword').val()},
		success: function(hasil){
			$('.container').html(hasil);
			$('.loader').hide();
		}
});