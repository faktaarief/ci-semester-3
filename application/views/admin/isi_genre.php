<div id="input">	
<div id="headupload">
	<h1>Dasbor Admin: Tambah Genre</h1>
		<h2>Kelola Spotify, Update hari ini</h2>
	</div>
	<?= $error;?>
	<?= form_open_multipart('admin/dashboard/store-genre'); ?>
	<div id="forminput">
		<h2>Nama Genre</h2> <br>	
			<input type="text" name="genre"> <br><br>

		<h2>File Thumbnail</h2> <br>
			<input type="file" name="berkas"> <br><br>

		<h2>Slug</h2> <br>
			<input type="text" name="slug"> <br><br>

		<br><br><input type="submit" value="Tambah">
</form>
	</div>
	</div>
