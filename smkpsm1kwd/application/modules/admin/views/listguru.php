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
				<li class="active dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">GURU<b class="caret"></b></a>
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
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"> JADWAL<b class="caret"></b></a>
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
			<div class="tab-pane well" style="min-height:700px;">
<h3>EDIT DATA GURU</h3> 
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">No.</th>
			<th align="center">NIP</th>
			<th align="center">NUPTK</th>
			<th align="center">Nama Lengkap</th>
			<th align="center">L/P</th>
			<th align="center">Tempat Lahir</th>
			<th align="center">Tanggal Lahir</th>
			<th align="center">Agama</th>
			<th align="center">Alamat</th>
			<th align="center">Mata Pelajaran</th>
			<th align="center">Username</th>
			<th align="center">Password</th>
			<th align="center">Pengaturan</th>
		</tr>
		<?php  
			$no=1;
			foreach ($guru as $data):
				$id=$data->id;
				$bagi=$no%2;
				if($bagi==0){$warna="#E1E1E1";}
				else {$warna="#EEEEEE";}
				$tgl=$data->tgl;
				$searchtgl=array('0');
				$replacetgl=array('');
				$tgl=str_replace($searchtgl,$replacetgl,$tgl);
				$thn=$data->thn;
				$searchthn=array('0');
				$replacethn=array('');
				$thn=str_replace($searchthn,$replacethn,$thn);
				$bln=$data->bln;
				$searchbln=array('0','1','2','3','4','5','6','7','8','9','10','11','12');
				$replacebln=array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
				$bln=str_replace($searchbln,$replacebln,$bln);
				$gender=$data->gender;
				$searchgender=array('0','1','2');
				$replacegender=array('','L','P');
				$gender=str_replace($searchgender,$replacegender,$gender);
				$agama=$data->agama;
				$searchagama=array('0','1','2','3','4','5','6');
				$replaceagama=array('','Islam','Kristen','Katolik','Hindu','Budha','Kong Hu Cu');
				$agama=str_replace($searchagama,$replaceagama,$agama);
				$nama=$data->nama;
				$username=$data->username;
		?>
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center" id="no"><?php echo $no;?>.</td>
			<td align="center"><?php echo $data->nip;?></td>
			<td></td>
			<td align="left" id="nama"><?php echo $nama;?></td>
			<td align="center"><?php echo $gender;?></td>
			<td align="center"><?php echo $data->tempat_lahir;?></td>
			<td align="center"><?php echo $tgl.' '.$bln.' '.$thn;?></td>
			<td align="center"><?php echo $agama;?></td>
			<td align="center"><?php echo $data->alamat;?></td>
			<td align="center"><?php echo $data->matpel;?></td>
			<td align="center"><?php echo $username;?></td>
			<td align="center"><?php echo $data->password;?></td>
			<td align="center">
				<?php
					echo anchor('admin/editguru/'.$id,'<i class="icon-white icon-edit"></i>',array('id'=>'absen'));
				?>
				&nbsp;
				<?php
					echo anchor('admin/removeguru/'.$id,'<i class="icon-white icon-remove"></i>',array('id'=>'remove'));
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
