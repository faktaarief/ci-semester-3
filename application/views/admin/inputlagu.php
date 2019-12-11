<div id="input">
	<div id="headupload">
		<h1>Dasbor Admin: Upload Lagu</h1>
			<h2>Kelola Spotify, Update lagumu hari ini</h2>
	</div>
	
	<?= $error;?>
	<?= form_open_multipart('admin/dashboard/store'); ?>

	<div id="forminput">
		<h2>Judul Lagu</h2> <br>	
			<input class="upload" type="text" name="judul_lagu" placeholder="Masukkan Judul Lagu"> <br><br>
				<hr color="#928E8E" align="left">
					<br>
		<h2>Penyanyi / Artis</h2> <br>
			<input  class="upload" type="text" name="penyanyi" placeholder="Masukkan nama Penyanyi"> <br><br>
				<hr color="#928E8E" align="left">
					<br>
		<h2>Album</h2> <br>
			<input class="upload" type="text" name="album" placeholder="Masukkan nama Album"> <br><br>
				<hr color="#928E8E" align="left">
					<br>
		<h2>Dirilis</h2> <br>
			<input class="upload" type="text" name="dirilis" placeholder="Tanggal Dirilis"> <br><br>
					<hr color="#928E8E" align="left">
					<br>
		<h2>Input File</h2><br>
			<input class="file" type="file" name="berkas"> <br><br>
					<hr color="#928E8E" align="left">
					<br>
		<h2>Genre</h2><br>
			<select name="kd_genre">
				<?php foreach($genres as $g) { ?>
				<option value=<?= $g->kd_genre ?>><?= $g->genre ?></option>
				<?php } ?>
			</select> 
<center>
		<br><br><br><br><br><br><input class="file" type="submit" value="Tambah"></center>
		</form>
	</div>

</div>
