<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Akademik Terpadu SMK PSM 1 Kawedanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script src="<?php echo base_url()?>themes/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>themes/js/berita.js" type="text/javascript"></script>
	<link id="callCss" rel="stylesheet" href="<?php echo base_url()?>themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="<?php echo base_url()?>themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>themes/css/base.css" rel="stylesheet" type="text/css">
	<style type="text/css" id="enject"></style>
	<link rel="shortcut icon" href="<?php echo base_url()?>themes/images/logo.png" />
	<style>
		.biru{color:blue;font-weight:bold;}
		.merah{color:red;font-weight:bold;}
	</style>
</head>
<body>
<section id="headerSection">
	<div class="container">
		<div class="navbar">
			<div class="container">
				<button type="button" class="btn btn-navbar active" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<h4>
					<a class="brand" href="<?php echo base_url()?>"> 
						<img src="<?php echo base_url();?>themes/images/header.png" width="300px"/>	
					</a>
				</h4>
				<br />
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li id="beranda"><?php echo anchor('beranda','Beranda');?></li>
						<li id="psb"><?php echo anchor('psb','Pendaftaran Siswa');?></li>  
						<li id="guru"><?php echo anchor('guru','Guru');?></li>
						<li id="laporan"><?php echo anchor('laporan','Laporan');?></li>
						<li id="admin"><?php echo anchor('admin','Admin');?></li>
						<li id="jadwal"><?php echo anchor('jadwal','Jadwal Pelajaran');?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Header Ends================================================ -->