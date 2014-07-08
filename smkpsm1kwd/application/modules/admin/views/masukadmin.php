<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/aboutus.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Halaman Admin</h1>
	</div>
</section> 
<!-- Page banner end -->
<section id="bodySection">
	<div id="sectionTwo" class="in"> 	
	<?php $this->load->view($subcontent); ?>
	<div class="row">
			<div class="span12">
			<div class="tab-pane well" style="min-height:700px;">
				<p class="subcontent">
					
				</p>
			</div>
			</div>
		</div>
		</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$('.hompimenu li').hover(function() {
			$(this).children('ul').filter(':not(:animated)').slideDown(400);
		}, function() {
			$(this).children('ul').slideUp(400);
		});	
		$('#buttonabsensi').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/admin/tabelabsensi',    
					data: 'thn='+lapthn+'&bln='+lapbln,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});	
		$('#buttonguru').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url()?>themes/images/ajax-loader.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/admin/tabelguru',    
					data: 'thn='+lapthn+'&bln='+lapbln,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#beranda').attr('class','');
		$('#psb').attr('class','');
		$('#guru').attr('class','');
		$('#laporan').attr('class','');
		$('#admin').attr('class','active');
		$('#jadwal').attr('class','');
	});
</script>