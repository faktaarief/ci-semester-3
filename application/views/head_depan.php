<div id="header">
				<ul id="list">
					
					<li><a href="<?= base_url('dashboard');?>">TERKINI</a></li>
					<li><a href="<?= base_url('Welcomespotify/kepala');?>">NEW RELEASE</a>	</li>
					<li><a href="<?= base_url('genres');?>">GENRE & MOODS</a></li>
					<li><a href="<?= base_url('dashboard/profil');?>">MY ACCOUNT  (<?= ucwords($this->session->userdata('session_nama')); ?>)</a></li>
					<?php if($this->session->userdata('akses') == 2) { ?>
						<li>
							<a style="color: white; background-color: green; padding: 5px;" href="<?= base_url('genres');?>">FREE</a>
						</li>	
					<?php } ?>
					<?php if($this->session->userdata('akses_admin') == 1) { ?>
						<li>
							<a style="color: white; background-color: green; padding: 5px;" href="<?= base_url('genres');?>">ADM</a>
						</li>	
					<?php } ?>
					<li><a href="<?= base_url('logout');?>">LOGOUT</a></li>
					</ul>

	
</div>