<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Spotify - Home</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>

<body>
	<div id"wrapper">
		<div id="sidebar">
			<img src="<?=base_url('assets/img/logoblogg.png');?>" width="135" height="52">
				<ul> 
       			<li><a href="#">Home</a></li>
       			<li><a href="#">Search</a></li>
       			<li><a href="#">Your Library</a></li>
				</ul>	
				<div id="sidebarbottom">
					<a href="">Install App</a>
					<br>
					<br>
					<a href="">Anonymous</a>	
       		</div>
		</div>
		<div id="header">
				<ul id="list">
					<li><a href="">FEATURED</a></li>
					<li><a href="">PODCAST</a></li>
					<li><a href="">CHARTS</a></li>
					<li><a href="">GENRES & MOODS</a></li>
					<li><a href="">NEW RELEASES</a></li>
					<li><a href="">DISCOVER</a></li>
					</ul>
		</div>
			<div id="content">
				<h2>Popular Playlist</h2>
				<br>
				<div id="galeri">
					<div class="gambar">
					<img src="<?=base_url('assets/img/home/tophits.jpg');?>">
						<p>Today top hits</p>
					</div>
					
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/ind.jpg');?>">
						<p>Top Hits Indonesia</p>
					</div>
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/santai.jpg');?>">
						<p>Santai Sejenak</p>
					</div>
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/kopikustik.png');?>">
						<p>Kopikustik</p>
					</div>
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/megahits.jpg');?>">
					<p>Mega Hits Mix</p>
					</div>
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/acous.jpg');?>">
						<p>Calming Acoustic</p>
					</div>
				</div>
				</div>
				<div id="content">
				<h2>Based on your recent listening</h2>
				<br>
				<div id="galeri">
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/young.jpg');?>">
							<p>Young, wild, free</p>
						</div>
					
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/flo.jpg');?>">
							<p>Santuy</p>
						</div>
					
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/workout.jpg');?>">
							<p>Workout</p>
						</div>
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/werkout.jpg');?>">
							<p>Lepas</p>
						</div>
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/winter.jpg');?>">
							<p>Winter</p>
						</div>
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/viral.jpg');?>">
							<p>Lagi Viral</p>
						</div>
				</div>
			</div>
			
					<div id="playlist">
						<div id="album">
							<img src="<?=base_url('assets/img/home/chin.jpg');?>">
							<h3>Percaya Aku</h3>
								<p>Chintya Gabriella</p>
						</div>
						<div id="audio">
								<audio controls="controls">
									<source src="B.mp3" type="audio/mp3" />
								</audio>
						</div>
					</div>
		</div>
</body>
</html>