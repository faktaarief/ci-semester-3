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
       			<li><a href="#">Home</a></li>
       			<li><a href="<?= base_url('UploadController/daftar');?>">Daftar Lagu</a></li>
       			<li><a href="#">Logout</a></li>
				</ul>	
				<div id="sidebarbottom">
					<br>
					<br>
					<a href="<?= base_url('Welcomespotify/profil');?>">Admin User</a>	
       		</div>
		</div>
	</div>