
	
<div id="input">
	<h1>Dasbor Admin: Tambah Genre</h1>
		<h2>Kelola Spotify, Update hari ini</h2>
	<?= $error;?>
	<?= form_open_multipart('admin/dashboard/store-genre'); ?>

<label>Nama Genre</label> <br>	
	<input type="text" name="genre"> <br><br>

<label>File Thumbnail</label> <br>
	<input type="file" name="berkas"> <br><br>

<label>Slug</label> <br>
	<input type="text" name="slug"> <br><br>

<br><br><input type="submit" value="Tambah">
</form>
	</div>
	