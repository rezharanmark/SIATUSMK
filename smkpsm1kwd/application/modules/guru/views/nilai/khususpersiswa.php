<div class="container">	

			<div class="row">
			<div class="span12">
				<ul class="nav nav-pills pull-left">
				<li class="dropdown"><a href="guru" class="dropdown-toggle" data-toggle="dropdown">ABSENSI<b class="caret"></b></a>
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
				<li class="active"><?php echo anchor('guru/nilai','NILAI');?></li>
		
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
<?php foreach($siswa as $data){?>
<center>
	<h3>Halaman Input Nilai Per Siswa</h3>
	<table class="absensi">
		<tr>
			<td>NIS</td>
			<td>
				<?php
          			$nis=array('id'=>'nis','value'=>$data->nisn,'name'=>'nis','readonly'=>'readonly','style'=>'color:blue;text-align:left'); 
          			echo form_input($nis);
				?>
			</td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><div id="abkelas"><?php echo $data->kelas;?></div></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><div id="abnama"><?php echo $data->nama;?></div></td>
		</tr>
		<tr>
			<td>Mata Pelajaran</td>
			<td>
				<?php
          			$matpelname=array('id'=>'matpelname','value'=>$subname,'name'=>'matpelname','readonly'=>'readonly','style'=>'color:blue;text-align:left'); 
          			echo form_input($matpelname);
				?>
			</td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>
				<?php
					$jenis1=array('1'=>'PR','2'=>'Tugas','3'=>'Ujian');
					echo form_dropdown('jenis1',$jenis1,'1','id="jenis1" style="font-size:12px;"');
				?>
				&nbsp;
				<?php
					$jenis2=array('1'=>'Mid 1','2'=>'Semester 1','3'=>'Mid 2','4'=>'Semester 2');
					echo form_dropdown('jenis2',$jenis2,'1','id="jenis2" style="font-size:12px;"');
				?>
			</td>
		</tr>
		<tr>
			<td>Nilai</td>
			<td>
				<?php
					$nilai=array('id'=>'prestasi');
					echo form_input($nilai);
				?>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		<tr>
			<td><?php echo form_button('simpan','SIMPAN NILAI','id="simpan"');?></td>
			<td><?php echo form_button('kembali','KEMBALI','id="kembali"');?></td>
		</tr>
	</table>
	<br />
</center>
<?php }?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#kembali').click(function() {
			$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/guru/ajaxnilai',       
					success: function (status){                 
						$('.in').html(status);
					}	  
				});
		});
		$('#simpan').click(function() {
			var nis=$('#nis').attr('value');
			var nilai=$('#prestasi').attr('value');
			var jenis1=$('#jenis1 option:selected').val();
			var jenis2=$('#jenis2 option:selected').val();
			var matpel=<?php echo $matpel?>;
			$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/guru/ajaxceknilai', 
					data:'nis='+nis+'&jenis1='+jenis1+'&jenis2='+jenis2+'&matpel='+matpel,      
					success: function (status){                 
						if(status==1){
							var s=confirm('Data ini sudah pernah disimpan. Apakah Anda ingin mengupdatenya?');
							if (s==true){
								$.ajax({
									type:'POST',
									url:'<?php echo site_url();?>/guru/ajaxupdatenilai', 
									data:'nis='+nis+'&jenis1='+jenis1+'&jenis2='+jenis2+'&nilai='+nilai+'&matpel='+matpel,      
										success: function (status){
											alert(status);
										}
								});
							}
						}else if(status==0){
							var u=confirm('Anda yakin ingin menyimpan data ini?');
							if (u==true){
								$.ajax({
									type:'POST',
									url:'<?php echo site_url();?>/guru/ajaxsimpannilai', 
									data:'nis='+nis+'&jenis1='+jenis1+'&jenis2='+jenis2+'&nilai='+nilai+'&matpel='+matpel,      
										success: function (status){
											alert(status);
										}
								});
							}
						}
					}	  
				});
		});
		$('#nilai').css('background','white');
		$('#nilai').css('color','black');
	});
</script>
</div>
</div>
</div>
</div>	
