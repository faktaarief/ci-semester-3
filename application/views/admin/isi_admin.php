
<<<<<<< HEAD
<div id="header">
	<center><h1>Dashboard Admin</h1></center>
</div>

<div id="homeadmin">
	<div id="posting">
	<h2>Tema Spotify Hari ini</h2>
		<br>
		<h3>"Masa Lalu"
		<br>
			<br>
		Banyak sekali orang yang mempunyai senyuman yang manis. Tetapi, dibalik senyuman yang manis itu terdapat kenyataan pahit dari masa lalu yang sedang dilupakan.
		</h3>
	</div>
	<div id="posgam">
		<img src="<?=base_url('assets/img/home/pop/homee.png');?>" width="350" height="262">
=======
	
<div id="input">
	<h1>Dasbor Admin: Upload Lagu</h1>
		<h2>Kelola Spotify, Update hari ini</h2>
	<?= $error;?>
	<?= form_open_multipart('admin/dashboard/store'); ?>

<label>Judul Lagu</label> <br>	
	<input type="text" name="judul_lagu"> <br><br>

<label>Penyanyi / Artis</label> <br>
	<input type="text" name="penyanyi"> <br><br>

<label>Album</label> <br>
	<input type="text" name="album"> <br><br>

<label>Dirilis</label> <br>
	<input type="text" name="dirilis"> <br><br>

<label>Input File</label><br>
	<input type="file" name="berkas"> <br><br>

<label>Genre</label><br>
	<select name="kd_genre">
		<?php foreach($genres as $g) { ?>
  		<option value=<?= $g->kd_genre ?>><?= $g->genre ?></option>
		<?php } ?>
	</select> 

<br><br><input type="submit" value="Tambah">
</form>
>>>>>>> ba3a938e6d4427bb832988babc9f482ec08c7f55
	</div>
		<center>
			
		<div id="judul">
						<h1>Jalankan Musik di Pemutar WEB</h1>
						<h4>Spotify Terikini</h4>
			<br>
						<a href="<?= base_url('Welcomespotify/homedepan');?>">Buka Pemutar Web</a>	
						<!--a href="http://localhost/ci-semester-3/Welcomespotify/homedepan">Buka Pemutar Web</a-->
					</center>
					</div>
</div>
