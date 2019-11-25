
					<div id="playlis">
						<div id="album">
							<img src="<?=base_url('assets/img/home/chin.jpg');?>">
							<h3>Percaya Aku</h3>
								<p>Chintya Gabriella</p>
						</div>
						<div id="alert" style="display:none; background-color: yellow; padding:4px;">Upgrade your Account to Premium for Full Version.</div>
						<div id="audio">
								<audio id="aud" controls="controls">
									<?php if($this->session->userdata('akses') == 1) { ?>
										<source src="<?= base_url('assets/music/dekat.mp3'); ?>" type="audio/mp3" />
									<?php } ?>
									<?php if($this->session->userdata('akses') == 2) { ?>
										<source src="<?= base_url('assets/music/dekat.mp3'); ?>" type="audio/mp3" />
										<script type="text/javascript">
											var myaud = document.getElementById("aud");
											var k = setInterval("pauseAud()", 5000);
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
								</audio>
						</div>
					</div>
</body>
</html>