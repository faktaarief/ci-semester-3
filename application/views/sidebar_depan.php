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
				<li>
					
				   	<?php echo form_open('playlist/cari') ?>
						<input class="search" name="keyword" placeholder="search" required>
						<input class="submit" type="submit" value="Cari">
					<?php echo form_close() ?>
				</li>
					<br>
       			<li><a href="<?= base_url('dashboard'); ?>">Home</a></li>
       			<li><a href="#">Your Library</a></li>
				</ul>	
				<div id="sidebarbottom">
					<a href="">Install App</a>
					<br>
					<br>
					<a href="">Anonymous</a>	
       		</div>
		</div>
	</div>