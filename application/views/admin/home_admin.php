<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Spotify - Home</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>

<body>
		<div id="sidebar">
			<img src="<?=base_url('assets/img/logoblogg.png');?>" width="135" height="52">
				<ul> 
       			<li><a href="<?= base_url('UploadController/home');?>">Home</a></li>
       			<li><a href="<?= base_url('UploadController/daftar');?>">Daftar Lagu</a></li>
				<li><a href="<?= base_url('admin/dashboard/daftar-genre');?>">Daftar Playlist</a></li>
				<li><a href="<?= base_url('logout');?>">Logout</a></li>
				<br><br>
				
				<li><h4 style="color: black; padding: 7px; background-color: white; font-weight:bold;">Lain-Lain</h4></li>				   
       			<li><a href="#">Permintaan User</a></li>
				</ul>	
				<div id="sidebarbottom">
					<br>
					<a href="<?= base_url('Welcomespotify/profil');?>">Akun Profil</a>	
       		</div>
		</div>
	