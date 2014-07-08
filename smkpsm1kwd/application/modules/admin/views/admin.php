<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/blog.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Halaman Admin
		</h1>
	</div>

</section> 
<!-- Page banner end -->
<section id="bodySection">		
	<div id="wrapper">
		<div class="container">	
		<div class="row">
			<div class="span1"></div>
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
							<?php echo form_submit('submit','log in admin', $attributes);?>
			
					<?php echo form_close()?>
				</div>
			</div>
			<div class="span4">
				<div class="thumbnail">
				<br />
				<img src="<?php if(isset($foto)) echo base_url().'themes/upload/'.$foto;?>" />
				<div class="caption">
				  <h5><?php echo $nama;?></h5>
				  <p>
					<i class="icon-white icon-home"></i> <?php echo $alamat;?><br />
					<i class="icon-white icon-envelope"></i> <?php echo $email;?><br />
					<i class="icon-white icon-signal"></i> <?php echo $phone;?>
				 </p>
				 </div>
			  </div>
			</div>
			<div class="span1">	</div>
		</div>
		<div style="height:10px;"></div>
		<br/>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$('#beranda').attr('class','');
		$('#psb').attr('class','');
		$('#guru').attr('class','');
		$('#laporan').attr('class','');
		$('#admin').attr('class','active');
		$('#jadwal').attr('class','');
	});
</script>