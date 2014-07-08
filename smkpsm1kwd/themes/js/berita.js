$(document).ready(function() { 
	$('#berita1').live('click', function() {
		$('.berita1').show();	
		for (s=2;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita2').live('click', function() {
		$('.berita2').show();	
		for (s=1;s<2;s++){
			$('.berita'+s).hide();
		}
		for (s=3;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita3').live('click', function() {
		$('.berita3').show();	
		for (s=1;s<3;s++){
			$('.berita'+s).hide();
		}
		for (s=4;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita4').live('click', function() {
		$('.berita4').show();	
		for (s=1;s<4;s++){
			$('.berita'+s).hide();
		}
		for (s=5;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita5').live('click', function() {
		$('.berita5').show();	
		for (s=1;s<5;s++){
			$('.berita'+s).hide();
		}
		for (s=6;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita6').live('click', function() {
		$('.berita6').show();	
		for (s=1;s<6;s++){
			$('.berita'+s).hide();
		}
		for (s=7;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita7').live('click', function() {
		$('.berita7').show();	
		for (s=1;s<7;s++){
			$('.berita'+s).hide();
		}
		for (s=8;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita8').live('click', function() {
		$('.berita8').show();	
		for (s=1;s<8;s++){
			$('.berita'+s).hide();
		}
		for (s=9;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita9').live('click', function() {
		$('.berita9').show();	
		for (s=1;s<9;s++){
			$('.berita'+s).hide();
		}
		for (s=10;s<11;s++){
			$('.berita'+s).hide();
		}
	});
	$('#berita10').live('click', function() {
		$('.berita10').show();	
		for (s=1;s<10;s++){
			$('.berita'+s).hide();
		}
	});
});