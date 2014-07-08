<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/contact.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Pengisian Data Siswa 
		</h1>
	</div>
</section> 
<!-- Page banner end -->
<section id="bodySection">		
	<div id="wrapper">
		<div class="container">	
		<div class="row">
			<div class="span12">
				<div class="thumbnail"s>
					<h4>Form pendaftaran ini hanya untuk siswa. Harap mengisi data dengan sejujur-jujurnya dan lengkap.</h4>
					<br />
					<?php echo form_open_multipart('psb/simpan',array('class'=>'form-horizontal'));?>
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="input01">No. Pendaftaran</label>
								<div class="controls">
									<?php
										$count=$row+1;
										$no=array('class'=>'span6','value'=>$count,'name'=>'no','readonly'=>'readonly','style'=>'color:blue;text-align:left'); 
										echo form_input($no);
									?>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input11">NIS/NISN (Bila Ada)</label>
								<div class="controls">
									<?php 
										$nisn=array('class'=>'span6','name'=>'nisn','value'=>set_value('nisn'));
										echo form_input($nisn);
									?>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input11">Nama Lengkap</label>
								<div class="controls">
									<?php 
										$nama=array('class'=>'span6','name'=>'nama','value'=>set_value('nama'));
										echo form_input($nama);
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('nama'); ?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="select11">Jenis Kelamin</label>
								<div class="controls">
									<?php
										$gender=array('#'=>'Pilih Jenis Kelamin:','1'=>'Laki-laki','2'=>'Perempuan');
										echo form_dropdown('gender',$gender,set_value('gender'),'id="gender" class="span6"');
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('gender'); ?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Tempat Lahir</label>
								<div class="controls">
									<?php 
										$tempat_lahir=array('class'=>'span6','name'=>'tempat_lahir','value'=>set_value('tempat_lahir'));
										echo form_input($tempat_lahir);
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('tempat_lahir'); ?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="select11">Tanggal Lahir</label>
								<div class="controls">
									<?php
										$tgl['#']='Pilih Tanggal:';
										for($n=1; $n<=31; $n++){$tgl[$n]=$n;}
										echo form_dropdown('tgl',$tgl,set_value('tgl'),'id="tgl" class="span2"');
									?>
									<?php
										$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
										echo form_dropdown('bln',$bln,set_value('bln'),'id="bln" class="span2"');
									?>
									<?php
										$now=date("Y");
										$thn['#']='Pilih Tahun:';
										for($n=1990; $n<=$now; $n++){$thn[$n]=$n;}
										echo form_dropdown('thn',$thn,set_value('thn'),'id="thn" class="span2"');
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('tgl'); ?></span>
								<span class="label label-important"><?php echo form_error('bln'); ?></span>
								<span class="label label-important"><?php echo form_error('thn'); ?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="select11">Agama</label>
								<div class="controls">
									<?php
										$agama=array('#'=>'Pilih Agama:','1'=>'Islam','2'=>'Kristen','3'=>'Katolik','4'=>'Hindu','5'=>'Budha','6'=>'Kong Hu Cu');
										echo form_dropdown('agama',$agama,set_value('agama'),'id="agama" class="span6"');
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('agama');?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Nama Ayah</label>
								<div class="controls">
									<?php 
										$nama_ayah=array('class'=>'span6','name'=>'nama_ayah','value'=>set_value('nama_ayah'));
										echo form_input($nama_ayah);
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('nama_ayah');?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Pekerjaan Ayah</label>
								<div class="controls">
									<?php 
										$kerja_ayah=array('class'=>'span6','name'=>'kerja_ayah','value'=>set_value('kerja_ayah'));
										echo form_input($kerja_ayah);
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('kerja_ayah');?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Nama Ibu</label>
								<div class="controls">
									<?php 
										$nama_ibu=array('class'=>'span6','name'=>'nama_ibu','value'=>set_value('nama_ibu'));
										echo form_input($nama_ibu);
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('nama_ibu');?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Pekerjaan Ibu</label>
								<div class="controls">
									<?php 
										$kerja_ibu=array('class'=>'span6','name'=>'kerja_ibu','value'=>set_value('kerja_ibu'));
										echo form_input($kerja_ibu);
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('kerja_ibu');?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Alamat</label>
								<div class="controls">
									<?php 
										$alamat=array('class'=>'span6','name'=>'alamat','value'=>set_value('alamat'));
										echo form_input($alamat);
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('alamat');?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Nilai UN SMP</label>
								<div class="controls">
									<?php 
										$unsd=array('class'=>'span6','name'=>'unsd','value'=>set_value('unsd'));
										echo form_input($unsd);
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('unsd');?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="select11">Kelas</label>
								<div class="controls">
									<?php
										$kelas=array(
											'#'=>'Pilih Kelas:',
											'1'=>'10TPM1','2'=>'10TPM2','3'=>'10TKR1','4'=>'10TKR2','5'=>'10TSM1','6'=>'10TSM2',
											'7'=>'11TPM1','8'=>'11TPM2','9'=>'11TKR1','10'=>'11TKR2','11'=>'11TSM1','12'=>'11TSM2',
											'13'=>'12TPM1','14'=>'12TPM2','15'=>'12TKR1','16'=>'12TKR2','17'=>'12TSM1','18'=>'12TSM2'
										);
										echo form_dropdown('kelas',$kelas,set_value('kelas'),'id="kelas" class="span6"');
									?>
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php echo form_error('kelas');?></span>
							</div>
							<div class="control-group">
								<label class="control-label" for="textarea">Keterangan (Bila Ada)</label>
								<div class="controls">
									<?php 
										 $data = array(
											'name'        => 'ket',
											'class'          => 'span6',
											'rows'=>'3'
										);
										echo form_textarea($data);
									?>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Foto</label>
								<div class="controls">
									<input class="span6" name="userfile" class="input-file" id="fileInput" type="file">
								</div>
							</div>
							<div class="control-group">
								<span class="label label-important"><?php if(isset($error)) echo $error;?></span>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Daftar</button>
							</div>
						</fieldset>
					<?php echo form_close()?>    
				</div>
			</div>	
		</div>
		<br/>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$('#beranda').attr('class','');
		$('#psb').attr('class','active');
		$('#guru').attr('class','');
		$('#laporan').attr('class','');
		$('#admin').attr('class','');
		$('#jadwal').attr('class','');
	});
</script>