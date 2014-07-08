<section id="carouselSection" style="text-align:center">
	<div id="myCarousel" class="carousel slide">
			<?php
			$judul=array();
			$deskripsi=array();
			$isi=array();
			$foto=array();
			foreach($berita as $data)
			{
				$judul[]=$data->judul;
				$deskripsi[]=$data->deskripsi;
				$isi[]=$data->isi;
				$foto[]=$data->foto;
			}
			?>	
			
			<div class="carousel-inner">
					<?php if (isset($foto[0])) {?>
					<div  style="text-align:right"  class="item active">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php echo $foto[0];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[0])) echo $judul[0];?></h2>
					  <p><?php if (isset($deskripsi[0])) echo $deskripsi[0];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
					</div>
					<?php }?>
				<?php if (isset($foto[1])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[1])) echo $foto[1];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[1])) echo $judul[1];?></h2>
					  <p><?php if (isset($deskripsi[1])) echo $deskripsi[1];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[2])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[2])) echo $foto[2];?>">
					<div class="carousel-caption">
                       <h2><?php if (isset($judul[2])) echo $judul[2];?></h2>
					  <p><?php if (isset($deskripsi[2])) echo $deskripsi[2];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[3])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[3])) echo $foto[3];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[3])) echo $judul[3];?></h2>
					  <p><?php if (isset($deskripsi[3])) echo $deskripsi[3];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[4])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[4])) echo $foto[4];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[4])) echo $judul[4];?></h2>
					  <p><?php if (isset($deskripsi[4])) echo $deskripsi[4];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[5])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[5])) echo $foto[5];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[5])) echo $judul[5];?></h2>
					  <p><?php if (isset($deskripsi[5])) echo $deskripsi[5];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[6])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[6])) echo $foto[6];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[6])) echo $judul[6];?></h2>
					  <p><?php if (isset($deskripsi[6])) echo $deskripsi[6];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[7])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[7])) echo $foto[7];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[7])) echo $judul[7];?></h2>
					  <p><?php if (isset($deskripsi[7])) echo $deskripsi[7];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[8])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[8])) echo $foto[8];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[8])) echo $judul[8];?></h2>
					  <p><?php if (isset($deskripsi[8])) echo $deskripsi[8];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[9])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[9])) echo $foto[9];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[9])) echo $judul[9];?></h2>
					  <p><?php if (isset($deskripsi[9])) echo $deskripsi[9];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
</section>
<!-- Sectionone ends ======================================== -->
<section id="middleSection">
<div class="container">
		<div class="row" style="text-align:center">
			<div class="span12">
			<div class="well well-small">
				<h4>Selamat Datang di SIATU SMK PSM 1 Kawedanan</h4>
				<p>
				Sistem Informasi Akademik Terpadu
				<br/>
				Sekolah Menengah Kejuruan Pesantren Sabilil Muttaqien 1 Kawedanan
				<br/>
				<i class="icon-white icon-home"></i> Jalan Ahmad Yani, Kawedanan, Gorang-Gareng, Magetan - Jawa Timur  63382
				<br />
				<i class="icon-white icon-signal"></i> 0351-439551
				</p>
			</div>
			</div>
			</div>
		</div>
</section>
<section id="bodySection">
<div class="container">
<div class="row">
	<div class="span4">
		<div class="thumbnail" style="height:400px;">
			<a href=""><h4>Visi & Misi Sekolah</h4></a>
			<p>
			<br/>
			<center><b>Visi</b></center>
			Unggul Dalam Prestasi, Mampu Menguasai Diri, Memiliki Iptek Berdasarkan Imtaq, Teladan Dalam Sikap dan Perilaku, Berbudaya dan Terampil
			<br/>
			<center><b>Misi</b></center>
			<ul>
				<li>Meningkatkan Perolehan Nilai Ujian (UAN)</li>
				<li>Meningkatkan Minat Peserta Didik Untuk:
				<ul>
					<li>Melanjutkan ke jenjang berikutnya</li>
					<li>Mengembangkan sikap percaya diri </li>
					<li>Meningkatkan kedisiplinan</li>
					<li>Meningkatkan budaya hidup sehat</li>
					<li>Meningkatkan keagamaan, olahraga dan seni</li>
					<li>Meningkatkan kepedulian sosial</li>
				</ul>
				</li>
			</ul>
			<br/>
			</p>
		</div>
	</div>
	<div class="span4">
		<div class="thumbnail" style="height:400px;">
			<a href=""><h4>Tujuan Sekolah</h4></a>
			<p>
			<br/>
			<ul>
				<li>Dapat mengamalkan ajaran agama hasil proses pembelajaran dan kegiatan perkembangan diri</li>
				<li>Meraih prestasi akademik dan non-akademik</li>
				<li>Dapat mencerdaskan peserta didik dan guru sehingga menjadi sekolah yang unggul dan diminati masyarakat </li>
				<li>Menguasai dasar-dasar ilmu pengetahuan dan teknologi serta seni sebagai bekal untuk melanjutkan ke sekolah yang lebih tinggi </li>
				<li>Menjadi sekolah pelopor dan penggerak di lingkungan masyarakat sekitar </li>
			</ul>
			<br/>
			 </p>
		</div>
	</div>
	<div class="span4">
		<div class="thumbnail" style="height:400px;">
			<a href="" name="berita"><h4>Sekilas Info</h4></a>
			<p>
			<br/>
			<marquee direction="down" behavior="scroll" scrollamount="1" scrolldelay="60" onmouseout="this.start()" onmouseover="this.stop()">
						<span>
							<p align="center"><a href="javascript:void();" id="berita10"><?php if (isset($judul[9])) echo $judul[9];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita9"><?php if (isset($judul[8])) echo $judul[8];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita8"><?php if (isset($judul[7])) echo $judul[7];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita7"><?php if (isset($judul[6])) echo $judul[6];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita6"><?php if (isset($judul[5])) echo $judul[5];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita5"><?php if (isset($judul[4])) echo $judul[4];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita4"><?php if (isset($judul[3])) echo $judul[3];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita3"><?php if (isset($judul[2])) echo $judul[2];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita2"><?php if (isset($judul[1])) echo $judul[1];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita1"><?php if (isset($judul[0])) echo $judul[0];?></a></p>
						</span>
					</marquee>	
			<br/>
			 </p>
		</div>
	</div>
</div>
<br/>
</div>
</section>
<section id="clientsSection" style="text-align:center; padding:48px 0">
<div class="container">
	<?php for ($i=0;$i<10;$i++){?>
	<div class="berita<?php echo $i+1;?>" style="display:none">  
	  <a href="" name="berita<?php echo $i+1;?>"><h4><?php if (isset($judul[$i])) echo $judul[$i];?></h4></a>
	  <p><?php if (isset($isi[$i])) echo $isi[$i];?></p>
	</div>
	<?php }?>
</div>
</section>
<!-- body block end======================================== -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#beranda').attr('class','active');
		$('#psb').attr('class','');
		$('#guru').attr('class','');
		$('#laporan').attr('class','');
		$('#admin').attr('class','');
		$('#jadwal').attr('class','');
	});
</script>