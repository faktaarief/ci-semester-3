<div id="input">
	<div id="headupload">
		<h1>Dasbor Admin: Upload Lagu</h1>
			<h2>Kelola Spotify, Update lagumu hari ini</h2>
	</div>
	
	<?= $error;?>
	<?= form_open_multipart('admin/dashboard/store'); ?>

	<div id="forminput">
		<h2>Judul Lagu</h2> <br>	
			<input type="text" name="judul_lagu"> <br><br>
				<hr color="#928E8E" align="left">
					<br>
		<h2>Penyanyi / Artis</h2> <br>
			<input type="text" name="penyanyi"> <br><br>
				<hr color="#928E8E" align="left">
					<br>
		<h2>Album</h2> <br>
			<input type="text" name="album"> <br><br>
				<hr color="#928E8E" align="left">
					<br>
		<h2>Dirilis</h2> <br>
			<input type="text" name="dirilis"> <br><br>
					<hr color="#928E8E" align="left">
					<br>
		<h2>Input File</h2><br>
			<input type="file" name="berkas"> <br><br>
					<hr color="#928E8E" align="left">
					<br>
		<h2>Genre</h2><br>
			<select name="kd_genre">
				<?php foreach($genres as $g) { ?>
				<option value=<?= $g->kd_genre ?>><?= $g->genre ?></option>
				<?php } ?>
			</select> 
<center>
		<br><br><br><br><br><br><input type="submit" value="Tambah"></center>
		</form>
	</div>

</div>
