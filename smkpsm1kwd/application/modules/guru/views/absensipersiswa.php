<div class="container">	

			<div class="row">
			<div class="span12">
				<ul class="nav nav-pills pull-left">
				<li class="active dropdown"><a href="guru" class="dropdown-toggle" data-toggle="dropdown">ABSENSI<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('guru/absensi/10TPM1','Kelas 10TPM1');?></li>
                		<li><?php echo anchor('guru/absensi/10TPM2','Kelas 10TPM2');?></li>
                		<li><?php echo anchor('guru/absensi/10TKR1','Kelas 10TKR1');?></li>
                		<li><?php echo anchor('guru/absensi/10TKR2','Kelas 10TKR2');?></li>
                		<li><?php echo anchor('guru/absensi/10TSM1','Kelas 10TSM1');?></li>
                		<li><?php echo anchor('guru/absensi/10TSM2','Kelas 10TSM2');?></li>
						<li><?php echo anchor('guru/absensi/11TPM1','Kelas 11TPM1');?></li>
						<li><?php echo anchor('guru/absensi/11TPM2','Kelas 11TPM2');?></li>
						<li><?php echo anchor('guru/absensi/11TKR1','Kelas 11TKR1');?></li>
                		<li><?php echo anchor('guru/absensi/11TKR2','Kelas 11TKR2');?></li>
                		<li><?php echo anchor('guru/absensi/11TSM1','Kelas 11TSM1');?></li>
                		<li><?php echo anchor('guru/absensi/11TSM2','Kelas 11TSM2');?></li>
                		<li><?php echo anchor('guru/absensi/12TPM1','Kelas 12TPM1');?></li>
                		<li><?php echo anchor('guru/absensi/12TPM2','Kelas 12TPM2');?></li>
						<li><?php echo anchor('guru/absensi/12TKR1','Kelas 12TKR1');?></li>
						<li><?php echo anchor('guru/absensi/12TKR2','Kelas 12TKR2');?></li>
						<li><?php echo anchor('guru/absensi/12TSM1','Kelas 12TSM1');?></li>
                		<li><?php echo anchor('guru/absensi/12TSM2','Kelas 12TSM2');?></li>
					</ul>
				</li>
				<li class=""><?php echo anchor('guru/nilai','NILAI');?></li>
		
				<li class="">&nbsp;</li>
				<li class="">&nbsp;</li>
				<li class="">&nbsp;</li>
				<li class=""><?php echo anchor('log/out/'.$tipe,'Log Out');?></li>
				</ul>
			</div>
			</div>
			<div class="row">
			<div class="span12">
			<div class="tab-pane well" style="min-height:700px;">
<?php
	$str1=explode(" ",date('r'));
	$str2=explode("0",$str1[5]);
	if ($str2[1]==null) $dif=0;
	else $dif=$str2[1];
	$gmt=time()+($dif*60*60);
	$wib=$gmt+(7*60*60);
?>
Halaman Absensi Kelas <font color="blue"><?php echo $kelas;?></font> Hari <font color="blue" id="hari"><?php echo $hari;?></font> Tanggal <font color="blue"><?php echo $tgl;?></font>
<?php 
	if(isset($carinis)){
		foreach ($carinis as $data):
?>
<center>
	<table class="absensi">
		<tr>
			<td>NIS</td>
			<td align="center">:</td>
			<td><div id="abnis"><?php echo $data->nisn;?></div></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td align="center">:</td>
			<td><div id="abkelas"><?php echo $data->kelas;?></div></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td align="center">:</td>
			<td><div id="abnama"><?php echo $data->nama;?></div></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td align="center">:</td>
			<td>
				<?php
					$ket=array('1'=>'Sakit','2'=>'Izin','3'=>'Alpha');
					echo form_dropdown('ket',$ket,'1','id="ket" style="font-size:10px;"');
				?>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td><?php echo form_button('simpan','ABSEN','id="simpan"');?></td>
			<td>&nbsp;</td>
			<td><?php echo form_button('kembali','KEMBALI','id="kembali"');?></td>
		</tr>
	</table>
</center>
<?php endforeach;}?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#absensi').css('background','white');
		$('#absensi').css('color','black');
		$('#kembali').click(function() {
			$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/guru/ajaxabsensi/<?php echo $kelas?>',       
					success: function (status){                 
						$('.in').html(status);
					}	  
			});
		});
		$('#simpan').click(function() {
			$('#loading').html('Loading...');
			var ket=$('#ket option:selected').text();
				var nama=$('#abnama').text();
				var nis=$('#abnis').text();
				var kelas=$('#abkelas').text();
				var hari=$('#hari').text();
				var tgl=<?php echo date('d',$wib)?>;
				var bln=<?php echo date('m',$wib)?>;
				var thn=<?php echo date('Y',$wib)?>;
				
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/guru/cekabsensi',    
					data: 'tgl='+tgl+'&bln='+bln+'&thn='+thn+'&nis='+nis,   
					success: function (status){                 
						if(status==0){
							var r=confirm('Anda yakin bahwa '+nama+' tidak masuk sekolah hari ini karena '+ket+'?');	
							if (r==true){	
								$.ajax({
									type:'POST',
									url:'<?php echo site_url();?>/guru/simpanabsensi',    
									data: 'ket='+ket+'&nis='+nis+'&kelas='+kelas+'&nama='+nama+'&hari='+hari+'&tgl='+tgl+'&bln='+bln+'&thn='+thn,   
									success: function (status){                 
										alert(status);
									}	  
								});
							}else{
								$('#loading').html(null);
							}
						}else if (status==1) {
							alert('SISWA SUDAH ABSEN');
						}
					}	  
				});
			
		});
	});
</script>
</div>
</div>
</div>
</div>		