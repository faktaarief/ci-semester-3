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
<<<<<<< HEAD
       			<li><a href="#">Home</a></li>
       			<li><a href="<?= base_url('UploadController/daftar');?>">Daftar Lagu</a></li>
       			<li><a href="#">Logout</a></li>
=======
       			<li><a href="<?= base_url('admin/dashboard/upload');?>">Kelola Spotify</a></li>
       			<li><a href="<?= base_url('admin/dashboard/daftar-lagu');?>">Daftar Lagu</a></li>
       			<li><a href="#">Permintaan User</a></li>
>>>>>>> ba3a938e6d4427bb832988babc9f482ec08c7f55
				</ul>	
				<div id="sidebarbottom">
					<br>
					<br>
					<a href="<?= base_url('Welcomespotify/profil');?>">Admin User</a>	
       		</div>
		</div>
	</div>