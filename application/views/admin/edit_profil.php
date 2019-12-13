
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
	<h1>Edit Akun</h1>
		<h2>Profil</h2>
		<?php echo form_open_multipart('dashboard/profil/edit/store') ?>
		<?php foreach ($profil as $p) { ?>
			<h3>User</h3>
				<input type="hidden" name="kd_user" value="<?= $p->kd_user; ?>">
				<p><input type="text" name="nama" value="<?= $p->nama; ?>"></p>
					<br>
					<hr color="#928E8E" align="left">
					<br>
		
			<h3>Email</h3>
				<p><input type="text" name="email" value="<?= $p->email; ?>"></p>				
					<br>
					<hr color="#928E8E" align="left"><br>
					
			<h3>Password</h3>
				<p><input type="password" name="password" value="<?= $p->password; ?>"></p>				
					<br>
					<hr color="#928E8E" align="left"><br>

			<h3>Tanggal Lahir</h3>
				<p><input type="text" name="tgl_lahir" value="<?= $p->tgl_lahir; ?>"></p>				
					<br>
					<hr color="#928E8E" align="left"><br>

			<h3>Foto</h3>
				<p><input class="telusuri" type="file" name="berkas"></p>				
					<br>
					<hr color="#928E8E" align="left"><br>

			<h3>Jenis Kelamin</h3>
				<p>
				<select name="jk">
						<?php  
							if ($p->jk == 'L') {
								echo "<option selected value='L'>Laki-Laki</option>
								<option value='P'>Perempuan</option>";
							} else 
							echo "<option selected value='P'>Perempuan</option>
							<option value='L'>Laki-Laki</option>";
						?>
					</select>
				</p>
					<br>
					<hr color="#928E8E" align="left"><br>
		<?php } ?>
		<div id="editprofil">
			<button type="submit">Update Profil</button>
		</div>
		<?php echo form_close() ?>
		
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