<div id="bg">
<div id="cover">
	<center>
		<img src="<?= base_url('assets/img/home/chin.jpg');?>">
		<h2>Today Top Hits</h2>
			<h3>Spotify</h3>
		 <style>
			.btn-primary {
            font-size: 15px;
            color: #FFF;
            letter-spacing: 3px;
            font-weight: bold;
            line-height: 1px;
            border: 2px solid #1DB954;
            border-radius: 40px;
            background: #1DB954;
            transition: all 0.3s ease 0s;
            width: 220px;
            height: 40px;
        	}

      		.btn-primary:hover {
            color: #FFF;
            background: #14db5a;
            border: 2px solid #14db5a;
			margin-left: 30px;
        }
		
    </style>
		</center>
		<center>
         <input type="submit" class="btn btn-primary mb-2" name="login" value="PLAY	">
		</center>
	</div>
<div id="playlist">
	<?php foreach($lagu as $l) { ?>
	<div id="listlagu">
	<h4><?= $l->judul_lagu; ?></h4>
			<p><?= $l->penyanyi; ?> - <?= $l->judul_lagu; ?></p>
				<audio id="aud" controls="controls">
					<source src="<?= base_url('assets/music/'.str_replace(' ', '_', $l->judul_lagu).'.mp3'); ?>" type="audio/mp3">				
			</div>
		<?php } ?>
		
	</div>
</div>
</body>
</html>