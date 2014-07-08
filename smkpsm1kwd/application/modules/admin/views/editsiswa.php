<div class="container">	

			<div class="row">
			<div class="span12">
				<ul class="nav nav-pills pull-left">
				<li class="active dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">SISWA<b class="caret"></b></a>
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
Edit Data Siswa Kelas <font color="blue"><?php echo $kelas;?></font>
<?php foreach ($editsiswa as $data){?>
<?php echo form_open_multipart('admin/updatesiswa');?>

<table class="form">
	<tr>
        <td valign="top">No</td>
        <td>
          	<?php
          		$id=array('value'=>$data->no,'name'=>'no','readonly'=>'readonly'); 
          		echo form_input($id);
			?>
         </td>
    </tr>
    <tr>
    	<td valign="top">NIS/NISN (Bila Ada)</td>
        <td>
			<?php 
          		$nisn=array('name'=>'nisn','value'=>$data->nisn);
          		echo form_input($nisn);
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
          		$LP=$data->gender;
				if($LP){
				if($LP=='L') $kelamin='1';
				elseif($LP=='P') $kelamin='2';
				$gender=array('#'=>'Pilih Jenis Kelamin:','1'=>'Laki-laki','2'=>'Perempuan');
				echo form_dropdown('gender',$gender,$kelamin,'id="gender"');
				}else{
					$gender=array('#'=>'Pilih Jenis Kelamin:','1'=>'Laki-laki','2'=>'Perempuan');
					echo form_dropdown('gender',$gender,'id="gender"');
				}
			?>
        </td>
    </tr>
    <tr>
    	<td valign="top">Tempat Lahir</td>
        <td>
          	<?php 
          		$tempat_lahir=array('name'=>'tempat_lahir','value'=>$data->tempat_lahir);
          		echo form_input($tempat_lahir);
          	?>
        </td>
    </tr>
    <tr>
        <td valign="top">Tanggal Lahir</td>
        <td>
          	<?php
          		$date=$data->tgl_lahir;
				if($date){
				$lahir=explode('-',$date);
				$dbtgl=$lahir[2];
				$dbbln=$lahir[1];
				$dbthn=$lahir[0];
				
          	?>
			<?php
				$tgl['#']='Pilih Tanggal:';
				for($n=1; $n<=31; $n++){$tgl[$n]=$n;}
				echo form_dropdown('tgl',$tgl,$dbtgl,'id="tgl"');
			?>
			&nbsp;
			<?php
          		$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
				echo form_dropdown('bln',$bln,$dbbln,'id="bln"');
			?>
			&nbsp;
			<?php
          		$now=date("Y");
				$thn['#']='Pilih Tahun:';
				for($n=1990; $n<=$now; $n++){$thn[$n]=$n;}
				echo form_dropdown('thn',$thn,$dbthn,'id="thn"');
			}else{
				$tgl['#']='Pilih Tanggal:';
				for($n=1; $n<=31; $n++){$tgl[$n]=$n;}
				echo form_dropdown('tgl',$tgl,'id="tgl"');
			?>
			&nbsp;
			<?php
          		$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
				echo form_dropdown('bln',$bln,'id="bln"');
			?>
			&nbsp;
			<?php
          		$now=date("Y");
				$thn['#']='Pilih Tahun:';
				for($n=1990; $n<=$now; $n++){$thn[$n]=$n;}
				echo form_dropdown('thn',$thn,'id="thn"');
			}
			?>
        </td>
    </tr>
    <tr>
        <td valign="top">Agama</td>
        <td>
          	<?php
          		$religi=$data->agama;
				if($religi=='Islam') $dbagama='1';
				elseif($religi=='Kristen') $dbagama='2';
				elseif($religi=='Katolik') $dbagama='3';
				elseif($religi=='Hindu') $dbagama='4';
				elseif($religi=='Budha') $dbagama='5';
				elseif($religi=='Kong Hu Cu') $dbagama='6';
				else $dbagama='#';
				$agama=array('#'=>'Pilih Agama:','1'=>'Islam','2'=>'Kristen','3'=>'Katolik','4'=>'Hindu','5'=>'Budha','6'=>'Kong Hu Cu');
				echo form_dropdown('agama',$agama,$dbagama,'id="agama"');
			?>
        </td>
    </tr>
    <tr>
        <td valign="top">Nama Ayah</td>
        <td>
          	<?php 
          		$nama_ayah=array('name'=>'nama_ayah','value'=>$data->nama_ayah);
          		echo form_input($nama_ayah);
          	?>
        </td>
    </tr>
    <tr>
        <td valign="top">Pekerjaan Ayah</td>
        <td>
          	<?php 
          		$kerja_ayah=array('name'=>'kerja_ayah','value'=>$data->kerja_ayah);
          		echo form_input($kerja_ayah);
          	?>
        </td>
   	</tr>
   	<tr>
        <td valign="top">Nama Ibu</td>
        <td>
          	<?php 
          		$nama_ibu=array('name'=>'nama_ibu','value'=>$data->nama_ibu);
          		echo form_input($nama_ibu);
          	?>
        </td>
   	</tr>
   	<tr>
        <td valign="top">Pekerjaan Ibu</td>
        <td>
          	<?php 
          		$kerja_ibu=array('name'=>'kerja_ibu','value'=>$data->kerja_ibu);
          		echo form_input($kerja_ibu);
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
         <td>Nilai UN SD</td>
         <td>
          	<?php 
          		$unsd=array('name'=>'unsd','value'=>$data->unsd);
          		echo form_input($unsd);
          	?>
         </td>
	</tr>
    <tr>
       <td valign="top">Kelas</td>
       <td>
          	<?php
          		$kelas=array(
								'#'=>'Pilih Kelas:',
								'10TPM1'=>'10TPM1','10TPM2'=>'10TPM2','10TKR1'=>'10TKR1','10TKR2'=>'10TKR2','10TSM1'=>'10TSM1','10TSM2'=>'10TSM2',
								'11TPM1'=>'11TPM1','11TPM2'=>'11TPM2','11TKR1'=>'11TKR1','11TKR2'=>'11TKR2','11TSM1'=>'11TSM1','11TSM2'=>'11TSM2',
								'12TPM1'=>'12TPM1','12TPM2'=>'12TPM2','12TKR1'=>'12TKR1','12TKR2'=>'12TKR2','12TSM1'=>'12TSM1','12TSM2'=>'12TSM2'
							);
				echo form_dropdown('kelas',$kelas,$data->kelas,'id="kelas"');
			?>
       </td>
    </tr>
    <tr>
       <td valign="top">Keterangan (Bila Ada)</td>
       <td><?php echo form_textarea('ket',$data->ket);?></td>
    </tr>
	<tr>
        <td>Foto</td>
        <td>
			<?php
			if($data->foto){
			?>
			<img src="<?php echo base_url().'themes/upload/psb/'.$data->foto;?>" width="150" height="150"/>
			<br />
			<input type="file" name="userfile" size="20" />
			<?php }else{?>
				<input type="file" id="fileInput" name="userfile" size="20" />
			<?php
			}
			?>
		</td>
	 </tr>
    <tr>
       <td valign="top"></td>
       <td>
       		<?php echo form_submit('submit','UPDATE')?>
       		&nbsp;
       		<?php echo anchor('admin/siswa/'.$data->kelas,'KEMBALI')?>
       </td>
    </tr>
</table>  
      
<?php echo form_close()?>
<?php }?>
</div>
</div>
</div>
