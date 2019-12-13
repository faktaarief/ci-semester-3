<div id="input">	
<div id="headupload">
	<h1>Dasbor Admin: Tambah Admin</h1>
		<h2>Kelola Spotify, Update hari ini</h2>
	</div>
	<?= $error;?>
	<?= form_open_multipart('admin/dashboard/store-admin'); ?>
	<div id="forminput">
		<h2>Nama</h2> <br>	
			<input type="text" name="nama"> <br><br>

		<h2>Email</h2> <br>	
		<input type="text" name="email"> <br><br>
		
		<h2>Password</h2> <br>	
		<input type="password" name="password"> <br><br>
		
		<h2>Tanggal Lahir</h2> <br>
		<input type="text" name="tgl_lahir"> <br><br>
		
		<h2>Jenis Kelamin</h2> <br>	
		<select name="jk">
			<option selected disabled>-Pilih Jenis Kelamin-</option>
			<option value='L'>Laki-Laki</option>
			<option value='P'>Perempuan</option>"
		</select> 
		<br><br>

		<h2>Permission</h2> <br>	
		<select name="permission">
			<option selected disabled>-Pilih Hak Akses-</option>
			<option value='1'>Read, Write (Admin, User, Genre, Lagu)</option>
			<option value='2'>Read, Write (Genre, Lagu)</option>"
			<option value='3'>Read, Write (User)</option>"
		</select> 
		<br><br>

		<br><br><input type="submit" value="Tambah">
</form>
	</div>
	</div>
