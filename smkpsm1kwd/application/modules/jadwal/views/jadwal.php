<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/aboutus.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Jadwal Pelajaran</h1>
	</div>
</section> 
<!-- Page banner end -->
<section id="bodySection">
	<div id="sectionTwo"> 	
		<div class="container">	
		<div class="row">
			
			<div class="span12">	
			<div class="row">
			

			<!-- ========================= -->

			<div class="span12">
			<div class="tabbable tabs">
			  <div class="tab-content label-primary">
				<div class="tab-pane active" id="siswa">
					<form class="well form-inline">
					<?php
						$hari=array('#'=>'Pilih Hari:',
	'senin'=>'Senin',
	'selasa'=>'Selasa',
	'rabu'=>'Rabu',
	'kamis'=>'Kamis',
	'jumat'=>'Jumat',
	'sabtu'=>'Sabtu',
	'minggu'=>'Minggu',
	);
							echo form_dropdown('hari',$hari,set_value('hari'),'id="hari"');
						?> 
						<?php
	$kelas=array('#'=>'Pilih Kelas:',
	'10TPM1'=>'10TPM1',
	'10TPM2'=>'10TPM2',
	'10TKR1'=>'10TKR1',
	'10TKR2'=>'10TKR2',
	'10TSM1'=>'10TSM1',
	'10TSM2'=>'10TSM2',
	
	'11TPM1'=>'11TPM1',
	'11TPM2'=>'11TPM2',
	'11TKR1'=>'11TKR1',
	'11TKR2'=>'11TKR2',
	'11TSM1'=>'11TSM1',
	'11TSM2'=>'11TSM2',

	'12TPM1'=>'12TPM1',
	'12TPM2'=>'12TPM2',
	'12TKR1'=>'12TKR1',
	'12TKR2'=>'12TKR2',
	'12TSM1'=>'12TSM1',
	'12TSM2'=>'12TSM2'
	);
							echo form_dropdown('kelas',$kelas,set_value('kelas'),'id="kelas"');
						?>  
						<?php echo form_button('button','Tampilkan','id="jadwalbutton" class="btn btn-warning"');?> 
					</form>
				</div>
				
			</div>
			</div> <!-- /tabbable -->


			</div>
			</div>
			<!-- ========================= -->
		</div>
	
	</div>

	<div class="row">
			<div class="span12">
			<div class="tab-pane well subcontent" style="min-height:300px;">
			</div>
			</div>
	</div>
	</div>
</section>
<script>
	$(document).ready(function(){
		$('#jadwalbutton').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url()?>themes/images/ajax-loader.gif" alt="Loading" /></div>');
			var hari = $('#hari option:selected').val();
			var kelas = $('#kelas option:selected').val();
			if((hari=='#')||(kelas=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/jadwal/tabel',    
					data: 'hari='+hari+'&kelas='+kelas,   
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
		$('#admin').attr('class','');
		$('#jadwal').attr('class','active');
	});
</script>