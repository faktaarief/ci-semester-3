
<link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
<div id="wrapper">
<div id="wrapprofil">
	<center><img src="<?=base_url('assets/img/home/profil.jpg');?>" width="1100" height="580"></center>
	<div id="sidebarprofil">
			<img src="<?=base_url('assets/img/home/anonim.jpg');?>" width="100" height="100">
			<p>Nama User</p>
		<br>
		<ul> 
       			<li><a href="#">Tinjauan Akun</a></li>
		</ul>
</div>
	<div id="isiprofil">
	<h1>Tinjauan Akun</h1>
		<h2>Profil</h2>
		<?php foreach ($profil as $p) { ?>
			<h3>User</h3>
				<p><?= $p->nama; ?></p>
					<br>
					<hr color="#928E8E" align="left">
					<br>
		
			<h3>Email</h3>
				<p><?= $p->email; ?></p>
					
					<br>
					<hr color="#928E8E" align="left"><br>

			<h3>Tanggal Lahir</h3>
				<p><?= $p->tgl_lahir	; ?></p>
					<br>
					<hr color="#928E8E" align="left"><br>

			<h3>Jenis Kelamin</h3>
				<p>
					<?php  
						if ($p->jk == 'L') {
							echo "Laki-Laki";
						} else 
							echo "Perempuan";
					?>
				</p>
					<br>
					<hr color="#928E8E" align="left"><br>
					
					<div id="editprofil">
						<?php 
							if ($this->session->userdata('masuk_admin') == !FALSE) {
								echo "<a href=\"" . base_url('dashboard/profil/edit' . '/' . $p->kd_admin) . "\">Edit Profil</a>";
							} else if ($this->session->userdata('masuk') == !FALSE) {
								echo "<a href=\"" . base_url('dashboard/profil/edit' . '/' . $p->kd_user) . "\">Edit Profil</a>";						
							}
						?>
			<?php } ?>
		</div>
		
		<h2>Paketmu</h2>
			<!--Kalau premium, pake gambar premium. kalau free, pake gambar free-->
			<img src="
			
			<?php
				if ($p->level == 1) {
					echo base_url('assets/img/home/premium.jpg');
				} else if ($p->level == 2) {
					echo base_url('assets/img/home/free.jpg');
				}
			?>
			
			"width="82%" height="200">
		<h2>Tema Spotify Hari Ini</h2>
			<h4>Masa Lalu</h4>
		<br>
			<h5>Banyak sekali orang yang mempunyai senyuman yang manis. Tetapi, dibalik senyuman yang manis itu terdapat kenyataan pahit dari masa lalu yang sedang dilupakan.</h5>
	</div>
</div>
</div>