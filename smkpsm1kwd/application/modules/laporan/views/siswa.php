<div class="container">	
		<div class="row">
			
			<div class="span12">	
			<div class="row">
			<div class="span12">
				<ul class="nav nav-pills pull-left">
				<li class="active"><?php echo anchor('laporan/siswa','DAFTAR SISWA');?></li>
				<li class=""><?php echo anchor('laporan/absensi','ABSENSI');?></li>
				<li class=""><?php echo anchor('laporan/nilai','NILAI');?></li>
				</ul>
			</div>
				</div>

		</div>
	
	</div>
			<div class="row">
			<div class="span12">
			<div class="tab-pane well">
<?php
	$kelas=array(
	'0'=>'Pilih Kelas:',
	'1'=>'10TPM1',
	'2'=>'10TPM2',
	'3'=>'10TKR1',
	'4'=>'10TKR2',
	'5'=>'10TSM1',
	'6'=>'10TSM2',
	
	'7'=>'11TPM1',
	'8'=>'11TPM2',
	'9'=>'11TKR1',
	'10'=>'11TKR2',
	'11'=>'11TSM1',
	'12'=>'11TSM2',

	'13'=>'12TPM1',
	'14'=>'12TPM2',
	'15'=>'12TKR1',
	'16'=>'12TKR2',
	'17'=>'12TSM1',
	'18'=>'12TSM2',
	
	'19'=>'Semua Kelas'
	);
	echo form_dropdown('combosiswa',$kelas,'0','id="combosiswa" style="font-size:10px;"');
?>
&nbsp;
<?php echo form_button('buttonsiswa','Tampilkan','id="buttonsiswa"');?>
<script>
	$('#siswa').css('background','white');
	$('#siswa').css('color','black');
</script>
</div>
</div>
</div>
