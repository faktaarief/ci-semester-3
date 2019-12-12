<div id="input">	
<div id="headupload">
	<h1>Dasbor Admin: Tambah Playlist</h1>
		<h2>Kelola Spotify, Update hari ini</h2>
	</div>
	<?= $error;?>
	<?= form_open_multipart('admin/dashboard/store-genre'); ?>
	<div id="forminput">
		<h2>Nama Playlist</h2> <br>	
			<input class="upload" type="text" name="genre" placeholder="Masukkan Nama Playlist"> <br><br>

		<h2>Nama Thumbnail</h2> <br>	
		<input class="upload" type="text" name="thumbnail" placeholder="Masukkan Nama Thumbnail"> <br><br>
		
		<h2>File Thumbnail</h2> <br>
		<input type="file" name="berkas"> <br><br>
		
		<h2>Slug</h2> <br>	
		<input type="text" name="slug"> <br><br>
			<input class="telusuri" type="file" name="berkas"> <br><br>



		<br><br><input class="file" type="submit" value="Tambah">
</form>
	</div>
	</div>
