<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>
<body>
	<div id="header">
	<h1>Edit User</h1>
	</div>
	<div id="daftar">
	<table cellspacing='0'>
		<thead>
            <?php echo form_open_multipart('admin/dashboard/daftar-admin/edit/store') ?>
            <?php $a = 1; foreach ($users as $u) { ?>
            <tr>
				<td><input type="hidden" value="<?= $u->kd_admin; ?>" name="kd_admin"></td>                
            </tr>
            <tr>
                <th>Kode Admin</th>
				<td><input disabled type="text" value="<?= $u->kd_admin; ?>" name="kd_admin"></td>                
            </tr>
            <tr>
                <th>Nama</th>
				<td><input type="text" value="<?= substr($u->nama,2); ?>" name="nama"></td>                
            </tr>
            <tr>
                <th>Email</th>
				<td><input type="text" value="<?= $u->email; ?>" name="email"></td>
            </tr>
            <tr>
                <th>Password</th>
				<td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
				<td><input type="text" value="<?= $u->tgl_lahir; ?>" name="tgl_lahir"></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
	            <td>
                <select name="jk">
						<?php  
							if ($u->jk == 'L') {
								echo "<option selected value='L'>Laki-Laki</option>
								<option value='P'>Perempuan</option>";
							} else 
							echo "<option selected value='P'>Perempuan</option>
							<option value='L'>Laki-Laki</option>";
						?>
					</select>
                </td>
            </tr>
            <tr>
                <th>Permission</th>
	            <td>
                <select name="permission">
						<?php  
							if ($u->level == '1') {
								echo "<option selected value='1'>Read, Write (Admin, User, Genre, Lagu)</option>
								<option value='2'>Read, Write (Genre, Lagu)</option>
								<option value='3'>Read, Write (User)</option>";
							} else if ($u->level == '2') {
								echo "<option value='1'>Read, Write (Admin, User, Genre, Lagu)</option>
								<option selected value='2'>Read, Write (Genre, Lagu)</option>
								<option value='3'>Read, Write (User)</option>";
							} else if ($u->level == '3') {
								echo "<option value='1'>Read, Write (Admin, User, Genre, Lagu)</option>
								<option value='2'>Read, Write (Genre, Lagu)</option>
								<option selected value='3'>Read, Write (User)</option>";
							}
						?>
					</select>
                </td>
            </tr>
            
            <tr>
                <td style="text-align: center;" colspan="2"><input type="submit" value="update"> | <a href="javascript:history.go(-1)">kembali</></td>
			</tr>
            <?php } ?>
            <?php echo form_close() ?>
		</thead>
	</table>
		</div>
</body>
</html>