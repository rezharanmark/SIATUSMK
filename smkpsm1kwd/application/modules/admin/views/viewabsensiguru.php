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
				<li class="active dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">ABSENSI<b class="caret"></b></a>
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
Halaman Absensi Guru Hari <font color="blue" id="hari"><?php echo $hari;?></font> Tanggal <font color="blue"><?php echo $tgl;?></font>
<?php
	foreach ($guru as $data){
?>
</table>
<?php echo form_open('admin/simpanabsenguru');?>
<center>
<table class="absensi">
	<tr>
        <td valign="top">ID Guru</td>
        <td>
          	<?php
          		$id=array('value'=>$data->id,'name'=>'id','readonly'=>'readonly','style'=>'color:blue;text-align:left'); 
          		echo form_input($id);
			?>
         </td>
    </tr>
	<tr>
		<td>NIP</td>
		<td><div id="abnis"><?php echo $data->nip;?></div></td>
	</tr>
	<tr>
		<td>Mata Pelajaran</td>
		<td><div id="abkelas"><?php echo $data->matpel;?></div></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><div id="abnama"><?php echo $data->nama;?></div></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td>
			<?php
				$ket=array('1'=>'Sakit','2'=>'Izin','3'=>'Alpha');
				echo form_dropdown('ket',$ket,'0','id="ket" style="font-size:12px;"');
			?>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><?php echo form_submit('guru','ABSEN');?></td>
		<td><?php echo form_button('kembali','KEMBALI','id="kembali"');?></td>
	</tr>
</table>
</center>
<?php echo form_close();?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#kembali').click(function() {
			$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/admin/ajaxabsensiguru',       
					success: function (status){                 
						$('.in').html(status);
					}	  
				});
		});
		$('#editabsensi').css('background','white');
		$('#editabsensi').css('color','black');
	});
</script>
</div>
</div>
</div>
