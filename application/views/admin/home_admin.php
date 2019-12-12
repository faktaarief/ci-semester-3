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
       			<li><a href="<?= base_url('admin/dashboard');?>">Home</a></li>
       			<li><a href="<?= base_url('admin/dashboard/daftar-lagu');?>">Daftar Lagu</a></li>
				<li><a href="<?= base_url('admin/dashboard/daftar-genre');?>">Daftar Playlist</a></li>
				<li><a href="<?= base_url('admin/dashboard/daftar-user');?>">Daftar User</a></li>
				<li><a href="<?= base_url('logout');?>">Logout</a></li>
				<br><br>
				
				</ul>	
			<div id="sidebarbottom">
				<li><a href="<?= base_url('dashboard/profil');?>">MY ACCOUNT<br>(<?= ucwords($this->session->userdata('session_nama')); ?>)</a></li>
       		</div>
		</div>
	