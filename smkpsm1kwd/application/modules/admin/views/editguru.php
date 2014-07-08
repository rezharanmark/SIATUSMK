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
<h3>FORM EDIT DATA GURU</h3>
<?php foreach ($guru as $data){?>
<?php echo form_open('admin/simpaneditguru');?>
<table class="form">
    <tr>
		<td valign="top">ID Guru</td>
        <td>
			<?php 
          		$guruid=array('name'=>'guruid','value'=>$data->id,'readonly'=>'readonly');
          		echo form_input($guruid);
          	?>          		
        </td>
	</tr>
	<tr>
    	<td valign="top">NIP</td>
        <td>
			<?php 
          		$nip=array('name'=>'nip','value'=>$data->nip);
          		echo form_input($nip);
          	?>          		
        </td>
    </tr>
    <tr>
    	<td valign="top">NUPTK</td>
        <td>
			<?php 
          		$nuptk=array('name'=>'nuptk','value'=>set_value('nuptk'));
          		echo form_input($nuptk);
          	?>          		
        </td>
    </tr>
    <tr>
        <td valign="top">Nama Lengkap</td>
       	<td>
          	<?php 
          		$nama=array('name'=>'nama','value'=>$data->nama);
          		echo form_input($nama);
          	?>
        </td>
    </tr>
    <tr>
        <td valign="top">Jenis Kelamin</td>
        <td>
          	<?php
				$gender=array('#'=>'Pilih Jenis Kelamin:','1'=>'Laki-laki','2'=>'Perempuan');
				echo form_dropdown('gender',$gender,$data->gender,'id="gender"');
			?>
        </td>
    </tr>
    <tr>
        <td valign="top">Agama</td>
        <td>
          	<?php
				$agama=array('#'=>'Pilih Agama:','1'=>'Islam','2'=>'Kristen','3'=>'Katolik','4'=>'Hindu','5'=>'Budha','6'=>'Kong Hu Cu');
				echo form_dropdown('agama',$agama,$data->agama,'id="agama"');
			?>
        </td>
    </tr>
	<tr>
        <td valign="top">Alamat</td>
    	<td>
        	<?php 
          		$alamat=array('name'=>'alamat','value'=>$data->alamat);
          		echo form_input($alamat);
          	?>
       </td>
	</tr>
    <tr>
       <td valign="top">Mata Pelajaran</td>
       <td>
          	<?php
          	$matpel=array('#'=>'Pilih Mata Pelajaran:','PAI'=>'PAI',
				'PPKn'=>'PPKn',
				'BIN'=>'BIN',
				'OR'=>'OR',
				'SBK'=>'SBK',
				'MAT'=>'MAT',
				'BIG'=>'BIG',
				'IPA'=>'IPA',
				'KIMIA'=>'KIMIA',
				'FISIKA'=>'FISIKA',
				'IPS'=>'IPS',
				'KWU'=>'KWU',
				'KKPI'=>'KKPI',
				'MULOK'=>'MULOK',
				'PSM'=>'PSM',
				'PRO1'=>'PRO1',
				'PRO2'=>'PRO2',
				'PRO3'=>'PRO3',
				'PRO4'=>'PRO4',
				'PRO5'=>'PRO5',
				'PRO6'=>'PRO6'
				);
				echo form_dropdown('matpel',$matpel,$data->matpel,'id="matpel"');
			?> 
       </td>
    </tr>
    <tr>
       <td valign="top">Username</td>
       <td>
          	<?php
          		$username=array('name'=>'username','value'=>$data->username);
          		echo form_input($username);
			?> 
       </td>
    </tr>
    <tr>
       <td valign="top">Password</td>
       <td>
          	<?php
          		$password=array('name'=>'password','value'=>$data->password);
          		echo form_password($password);
			?> 
       </td>
    </tr>
    <tr>
       <td valign="top">Password</td>
       <td>
          	<?php
          		$konfirmasi=array('name'=>'konfirmasi');
          		echo form_password($konfirmasi);
			?> 
       </td>
    </tr>
    <tr>
       <td valign="top"></td>
       <td>
       		<?php echo form_submit('submit','UPDATE')?>
       </td>
    </tr>
</table>      
<?php echo form_close()?>
<?php }?>

</div>
</div>
</div>
