<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/aboutus.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Halaman Guru</h1>
	</div>
</section> 
<!-- Page banner end -->
<section id="bodySection">
	<div id="sectionTwo" class="in"> 	
		
				<?php $this->load->view($subcontent); ?>
			
	</div>

	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$('#beranda').attr('class','');
		$('#psb').attr('class','');
		$('#guru').attr('class','active');
		$('#laporan').attr('class','');
		$('#admin').attr('class','');
		$('#jadwal').attr('class','');
	});
</script>