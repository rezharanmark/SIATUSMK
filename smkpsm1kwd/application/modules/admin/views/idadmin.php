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
				<li class="active dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">ADMIN<b class="caret"></b></a>
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
			<div class="tab-pane well">
<div id="log">
	<center>
	<?php echo form_open('admin/simpanidadmin')?>
		<table class="log" align="center">
			<tr>
				<td>Username Lama</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$usernamelama=array('name'=>'usernamelama','id'=>'usernamelama','value'=>set_value('usernamelama'));
						echo form_input($usernamelama);
					?>
				</td>
			</tr>
			<tr>
				<td>Password Lama</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$passwordlama=array('name'=>'passwordlama','id'=>'passwordlama','value'=>set_value('passwordlama'));
						echo form_password($passwordlama);
					?>
				</td>
			</tr>
			<tr>
				<td>Username Baru</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$usernamebaru=array('name'=>'usernamebaru','id'=>'usernamebaru','value'=>set_value('usernamebaru'));
						echo form_input($usernamebaru);
					?>
				</td>
			</tr>
			<tr>
				<td>Password Baru</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$passwordbaru=array('name'=>'passwordbaru','id'=>'passwordbaru','value'=>set_value('passwordbaru'));
						echo form_password($passwordbaru);
					?>
				</td>
			</tr>
			<tr>
				<td>Password Baru</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$konfirmasi=array('name'=>'konfirmasi','id'=>'konfirmasi','value'=>set_value('konfirmasi'));
						echo form_password($konfirmasi);
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td align="center" colspan="3"><?php echo form_submit('submit','UPDATE');?></td>
			</tr>
		</table>
	</center>
	<?php echo form_close()?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#editadmin').css('background','white');
		$('#editadmin').css('color','black');
	});
</script>
</div>
</div>
</div>
