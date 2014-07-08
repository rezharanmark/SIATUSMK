<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/aboutus.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Halaman Admin</h1>
	</div>
</section> 
<!-- Page banner end -->
<section id="bodySection">
	<div id="sectionTwo"> 	
		<div class="container">	
			<div class="row">
				<div class="span12">
				<ul class="nav nav-pills pull-left">
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">SISWA<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('admin/siswa/10TPM1','Kelas 10TPM1');?></li>
                		<li><?php echo anchor('admin/siswa/10TPM2','Kelas 10TPM2');?></li>
                		<li><?php echo anchor('admin/siswa/10TKR1','Kelas 10TKR1');?></li>
                		<li><?php echo anchor('admin/siswa/10TKR2','Kelas 10TKR2');?></li>
                		<li><?php echo anchor('admin/siswa/10TSM1','Kelas 10TSM1');?></li>
                		<li><?php echo anchor('admin/siswa/10TSM2','Kelas 10TSM2');?></li>
						<li><?php echo anchor('admin/siswa/11TPM1','Kelas 11TPM1');?></li>
						<li><?php echo anchor('admin/siswa/11TPM2','Kelas 11TPM2');?></li>
						<li><?php echo anchor('admin/siswa/11TKR1','Kelas 11TKR1');?></li>
                		<li><?php echo anchor('admin/siswa/11TKR2','Kelas 11TKR2');?></li>
                		<li><?php echo anchor('admin/siswa/11TSM1','Kelas 11TSM1');?></li>
                		<li><?php echo anchor('admin/siswa/11TSM2','Kelas 11TSM2');?></li>
                		<li><?php echo anchor('admin/siswa/12TPM1','Kelas 12TPM1');?></li>
                		<li><?php echo anchor('admin/siswa/12TPM2','Kelas 12TPM2');?></li>
						<li><?php echo anchor('admin/siswa/12TKR1','Kelas 12TKR1');?></li>
						<li><?php echo anchor('admin/siswa/12TKR2','Kelas 12TKR2');?></li>
						<li><?php echo anchor('admin/siswa/12TSM1','Kelas 12TSM1');?></li>
                		<li><?php echo anchor('admin/siswa/12TSM2','Kelas 12TSM2');?></li>
					</ul>
				</li>
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">GURU<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('admin/listguru','Edit Guru');?></li>
                		<li><?php echo anchor('admin/inputguru','Input Guru');?></li>
					</ul>
				</li>
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">ABSENSI<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('admin/absensiguru','Absensi Guru');?></li>
                		<li><?php echo anchor('admin/absensisiswa','Laporan Absensi Siswa');?></li>
						<li><?php echo anchor('admin/laporanguru','Laporan Absensi Guru');?></li>
					</ul>
				</li>
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">ADMIN<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('admin/idadmin','Username & Password');?></li>
                		<li><?php echo anchor('admin/fotoadmin','Foto Profil');?></li>
						<li><?php echo anchor('admin/editdataadmin','Biodata');?></li>
					</ul>
				</li>
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">BERITA<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('admin/listberita','Edit Berita');?></li>
                		<li><?php echo anchor('admin/inputberita','Input Berita');?></li>
					</ul>
				</li>
				<li class="active dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"> JADWAL<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?php echo anchor('admin/editjadwal','Edit Jadwal');?></li>
							<li><?php echo anchor('admin/inputjadwal','Input Jadwal');?></li>
						</ul>
				</li>
				<li class="">&nbsp;</li>
				<li class="">&nbsp;</li>
				<li class="">&nbsp;</li>
				<li class=""><?php echo anchor('log/out/'.$tipe,'Log Out');?></li>
				</ul>
				</div>
			</div>	
			
			<div class="row">
				<div class="span12">
					<div class="tabbable tabs">
						<div class="tab-content label-primary">
							<div class="tab-pane active">
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
									<?php echo form_button('button','Tampilkan','id="'.$id.'" class="btn btn-warning"');?> 
								</form>
							</div>			
						</div>
					</div> 
				</div>
			</div>
	<div class="row">
		<div class="span12">
			<div class="tab-pane well subcontent" style="min-height:300px;">
				<?php if(isset($subcontent)) $this->load->view($subcontent);?>
			</div>
		</div>
	</div>
</div>
</section>
<script>
	$(document).ready(function(){
		$('#editjadwal').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url()?>themes/images/ajax-loader.gif" alt="Loading" /></div>');
			var hari = $('#hari option:selected').val();
			var kelas = $('#kelas option:selected').val();
			if((hari=='#')||(kelas=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/admin/edittabel',    
					data: 'hari='+hari+'&kelas='+kelas,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});
		$('#inputjadwal').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url()?>themes/images/ajax-loader.gif" alt="Loading" /></div>');
			var hari = $('#hari option:selected').val();
			var kelas = $('#kelas option:selected').val();
			if((hari=='#')||(kelas=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/admin/inputtabel',    
					data: 'hari='+hari+'&kelas='+kelas,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});
		$('#tombolinput').click(function() {
			alert();
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