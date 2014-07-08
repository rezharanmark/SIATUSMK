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
<h3>Halaman Input Nilai Mata Pelajaran <font color="blue">
<?php echo $matpel;?>
</font>
</h3>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">No.</th>
			<th align="center">NIS</th>
			<th align="center">Nama Lengkap</th>
			<th align="center">Tingkat</th>
			<th align="center">Nilai Mapel</th>
		</tr>
		<?php 
			$no=1; 
			foreach ($siswa as $data):
				$bagi=$no%2;
				if($bagi==0){$warna="#E1E1E1";}
				else {$warna="#EEEEEE";}
		?>
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $no;?>.</td>
			<td align="center"><?php echo $data->nisn;?></td>
			<td align="left"><?php echo $data->nama;?></td>
			<td align="center"><?php echo $data->kelas;?></td>
			<td align="center">
				<?php
					$guruid=$this->session->userdata('id');
					$nis=$data->nisn;
					echo anchor('guru/inputnilai/'.$nis.'/'.$guruid,'KLIK DI SINI',array('id'=>'absen'));
				?>
			</td>		
		</tr>
		<?php
			$no++;
			endforeach;
		?>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$('.siswa tr').mouseenter(function() {
			$(this).css('background-color','#33FF33');
		});
		$('.siswa tr').mouseleave(function() {
			$('.0').css('background-color','#E1E1E1');
			$('.1').css('background-color','#EEEEEE');
		});
	});
</script>
</div>
</div>
</div>
</div>	