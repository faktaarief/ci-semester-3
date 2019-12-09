<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Spotify - Home</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>

<body>
	<div>
		<div id="sidebar">
			<img src="<?=base_url('assets/img/logoblogg.png');?>" width="135" height="52">
				<ul>
				<li><h4 style="color: black; padding: 7px; background-color: white; font-weight:bold;">Menu Tambah</h4></li>
       			<li><a href="<?= base_url('admin/dashboard/upload');?>">Tambah Lagu</a></li>
       			<li><a href="<?= base_url('admin/dashboard/tambah-genre');?>">Tambah Genre</a></li>
				<li><h4 style="color: black; padding: 7px; background-color: white; font-weight:bold;">Menu Daftar</h4></li>
				<li><a href="<?= base_url('admin/dashboard/daftar-lagu');?>">Daftar Lagu</a></li>
				<li><a href="<?= base_url('admin/dashboard/daftar-genre');?>">Daftar Genre</a></li>
				<li><h4 style="color: black; padding: 7px; background-color: white; font-weight:bold;">Lain-Lain</h4></li>				   
       			<li><a href="#">Permintaan User</a></li>
				</ul>	
				<div id="sidebarbottom">
					<br>
					<br>
					<a href="">Admin User</a>	
       		</div>
		</div>
	</div>