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
					<?php if($this->session->userdata('akses_admin') == 1 || $this->session->userdata('akses_admin') == 2) { ?> 
						<li><a href="<?= base_url('admin/dashboard');?>">Home</a></li>
						<li><a href="<?= base_url('admin/dashboard/daftar-lagu');?>">Daftar Lagu</a></li>
						<li><a href="<?= base_url('admin/dashboard/daftar-genre');?>">Daftar Genre</a></li>
					<?php } ?>
					<?php if($this->session->userdata('akses_admin') == 1) { ?> 
						<li><a href="<?= base_url('admin/dashboard/daftar-admin');?>">Daftar Admin</a></li>
					<?php } ?>
					
					<?php if($this->session->userdata('akses_admin') == 3 || $this->session->userdata('akses_admin') == 1) { ?> 
						<li><a href="<?= base_url('admin/dashboard/daftar-user');?>">Daftar User</a></li>
					<?php } ?>
					
					<li><a href="<?= base_url('logout');?>">Logout</a></li>
				<br><br>
				
				</ul>	
			<div id="sidebarbottom">
				<li><a href="<?= base_url('admin/dashboard/daftar-admin/edit') . '/' . $this->session->userdata('session_id') ;?>">MY ACCOUNT<br>(<?= ucwords(substr($this->session->userdata('session_nama'), 2)); ?>)</a></li>
       		</div>
		</div>
	