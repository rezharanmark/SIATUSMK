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
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">ADMIN<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('admin/idadmin','Username & Password');?></li>
                		<li><?php echo anchor('admin/fotoadmin','Foto Profil');?></li>
						<li><?php echo anchor('admin/editdataadmin','Biodata');?></li>
					</ul>
				</li>
				<li class="active dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">BERITA<b class="caret"></b></a>
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
<h3>EDIT BERITA</h3> 
<div class="row-fluid">
		<div class="span12">
<table class="berita table" align="center">
	<thead>
		<tr>
			<th align="center">No.</th>
			<th align="center">Judul</th>
			<th align="center">Deskripsi</th>
			<th align="center">Isi Berita</th>
			<th align="center">Foto</th>
			<th align="center">Pengaturan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php  
			foreach ($berita as $data):
				$no=$data->id;
				$bagi=$no%2;
				if($bagi==0){$warna="#E1E1E1";}
				else {$warna="#EEEEEE";}
				$judul=$data->judul;
				$deskripsi=$data->deskripsi;
				$isi=$data->isi;
				$foto=$data->foto;
		?>
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $no;?>.</td>
			<td align="center"><?php echo $judul;?></td>
			<td align="center"><?php echo $deskripsi;?></td>
			<td align="center"><?php echo $isi;?></td>
			<td align="center"><img width="20%" src="<?php echo base_url();?>themes/upload/berita/<?php echo $foto;?>"></td>
			<td align="center">
				<?php
					echo anchor('admin/editberita/'.$no,'<i class="icon-white icon-edit"></i>',array('id'=>'berita'));
				?>
				&nbsp;
				<?php
					echo anchor('admin/removeberita/'.$no,'<i class="icon-white icon-remove"></i>',array('id'=>'remove'));
				?>
			</td>		
		</tr>
		<?php 
			$no++;
			endforeach;
		?>
	</tbody>
</table>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.berita tr').mouseenter(function() {
			$(this).css('background-color','#F0D611');
		});
		$('.berita tr').mouseleave(function() {
			$('.0').css('background-color','#E1E1E1');
			$('.1').css('background-color','#EEEEEE');
		});
	});
</script>
</div>
</div>
</div>
