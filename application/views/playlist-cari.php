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
	<div id="alert" style="display:none; background-color: yellow; padding:4px;">Upgrade your Account to Premium for Full Version.</div>
	<?php foreach($products as $l) { ?>
		<div id="listlagu">
			<h4><?= $l->judul_lagu; ?></h4>
			<p><?= $l->penyanyi; ?> - <?= $l->judul_lagu; ?></p>
			<?php if($this->session->userdata('akses') == 1) { ?>
			<!-- <h1>SEMPAK</h1> -->
			<audio id="aud" controls="controls">
										<source src="<?= base_url('assets/music/'.str_replace(' ', '_', $l->judul_lagu).'.mp3'); ?>" type="audio/mp3" />
									<?php } ?>
									<?php if($this->session->userdata('akses') == 2) { ?>
										<audio id="aud" controls="controls">
										<source src="<?= base_url('assets/music/'.str_replace(' ', '_', $l->judul_lagu).'.mp3'); ?>" type="audio/mp3" />
										<script type="text/javascript">
											var myaud = document.getElementById("aud");
											var k = setInterval("pauseAud()", 10000);
											var alert = document.getElementById("alert");

											function playAud() {
												myaud.play();
											}

											function pauseAud() {
												myaud.pause();
												myaud.currentTime = 0;
												alert.style.display = "inline";
												// alert('Audio Stop Successfully');
												// alert("Upgrade your Account to Premium for Full Version.");
													
												// if(Interval>1000)
												// 	myaud.stop();
												// clearInterval(k); 
											} 

											// var player = document.getElementById('aud');
									
											// setTimeout(function(){
											// 	// player.play();
											
											// 	setTimeout(function(){
											// 		player.pause();
											// 		player.currentTime = 0;
											// 	}, 2000);
											// }, 3000);
										</script>
										
									<?php } ?>

			</div>
		<?php } ?>
		
	</div>
</div>
</body>
</html>