<div class="container">	
		<div class="row">
			
			<div class="span12">	
			<div class="row">
			<div class="span12">
				<ul class="nav nav-pills pull-left">
				<li class=""><?php echo anchor('laporan/siswa','DAFTAR SISWA');?></li>
				<li class=""><?php echo anchor('laporan/absensi','ABSENSI');?></li>
				<li class="active"><?php echo anchor('laporan/nilai','NILAI');?></li>
				</ul>
			</div>
				</div>

		</div>
	
	</div>
			<div class="row">
			<div class="span12">
			<div class="tab-pane well">
<center>
<b>Masukkan NIS Anda:</b> 
<?php
	$nis=array('id'=>'nis');
	echo form_input($nis);
?>
&nbsp; 
<?php echo form_button('button','Tampilkan','id="buttonnilai" class="btn btn-warning"');?> 
</center>
</div>
</div>
</div>