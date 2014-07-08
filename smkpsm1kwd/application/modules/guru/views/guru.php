<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/aboutus.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Halaman Guru
		</h1>
	</div>
</section> 
<!-- Page banner end -->
<section id="bodySection">		
	<div id="wrapper">
		<div class="container">	
		<div class="row">
			<div class="span3"></div>
			<div class="span6">
				<div class="thumbnail"s>
					<br />
					<?php echo form_open('log/in',array('class'=>'form-horizontal'))?>
							<div class="control-group">
								<label class="control-label" for="input01">Nama Pengguna</label>
								<div class="controls">
									<?php echo form_input('username','','id="username"');?>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input11">Kata Sandi</label>
								<div class="controls">
									<?php echo form_password('password','','id="password"');?>	 
								</div>
							</div>
				
							<?php  $attributes='class="btn btn-primary"'; ?>
							<?php echo form_submit('submit','log in guru', $attributes);?>
					<?php echo form_close()?>
				</div>
			</div>
			<div class="span3"></div>
		</div>
		<div style="height:100px;"></div>
		<br/>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$('#beranda').attr('class','');
		$('#psb').attr('class','');
		$('#guru').attr('class','active');
		$('#laporan').attr('class','');
		$('#admin').attr('class','');
		$('#jadwal').attr('class','');
	});
</script>