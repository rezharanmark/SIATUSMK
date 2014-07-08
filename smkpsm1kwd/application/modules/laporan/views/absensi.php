<div class="container">	
		<div class="row">
			
			<div class="span12">	
			<div class="row">
			<div class="span12">
				<ul class="nav nav-pills pull-left">
				<li class=""><?php echo anchor('laporan/siswa','DAFTAR SISWA');?></li>
				<li class="active"><?php echo anchor('laporan/absensi','ABSENSI');?></li>
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
	$now=date("Y");
	$thn['#']='Pilih Tahun:';
	for($n=2009; $n<=$now+17; $n++){$thn[$n]=$n;}
	echo form_dropdown('lapthn',$thn,set_value('thn'),'id="lapthn" style="font-size:10px;"');
?>
&nbsp;
<?php
	$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
	echo form_dropdown('lapbln',$bln,set_value('bln'),'id="lapbln" style="font-size:10px;"');
?> 
&nbsp;
<?php
	$kelas=array('#'=>'Pilih Kelas:',
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
	'18'=>'12TSM2'
	);
	echo form_dropdown('lapkelas',$kelas,set_value('kelas'),'id="lapkelas" style="font-size:10px;"');
?>  
<?php echo form_button('button','Tampilkan','id="buttonabsensi"');?> 
<script>
	$(document).ready(function(){
		$('#buttonabsensi').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url()?>themes/images/ajax-loader.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			var lapkelas = $('#lapkelas option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')||(lapkelas=='Pilih Kelas:')){                 
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
	});
</script>
</div>
</div>
</div>