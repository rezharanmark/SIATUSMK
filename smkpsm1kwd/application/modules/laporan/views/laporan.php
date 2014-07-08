<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/aboutus.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Halaman Laporan</h1>
	</div>
</section> 
<!-- Page banner end -->
<section id="bodySection">
	<div id="sectionTwo"> 	
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
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$(".resolusi").append(screen.width+' x '+screen.height);
		$('#buttonsiswa').click(function(){
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url()?>themes/images/ajax-loader.gif" alt="Loading" /></div>');
			var kelas = $('#combosiswa option:selected').text();
			if(kelas!='Pilih Kelas:'){
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/laporan/tabelsiswa',    
					data: 'kelas='+kelas,   
					success: function (siswa){                 
						$('.subcontent').html(siswa);
					}	  
				});
			}else{
				$('.subcontent').empty();
			}
		})
		$('#buttonabsensi').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			var lapkelas = $('#lapkelas option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/laporan/tabelabsensi',    
					data: 'thn='+lapthn+'&bln='+lapbln+'&kelas='+lapkelas,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});	
		$('#buttonnilai').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var jenis1 = $('#jenis1 option:selected').val();
			var jenis2 = $('#jenis2 option:selected').val();
			var nis = $('#nis').attr('value');
			$.ajax({
				type:'POST',
				url:'<?php echo site_url();?>/laporan/tabelnilai',    
				data: 'jenis1='+jenis1+'&jenis2='+jenis2+'&nis='+nis,   
				success: function (nilai){                 
					$('.subcontent').html(nilai);
				}	  
			});
		});	
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#beranda').attr('class','');
		$('#psb').attr('class','');
		$('#guru').attr('class','');
		$('#laporan').attr('class','active');
		$('#admin').attr('class','');
		$('#jadwal').attr('class','');
	});
</script>