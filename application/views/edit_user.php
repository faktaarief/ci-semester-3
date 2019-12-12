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
            <?php echo form_open_multipart('admin/dashboard/daftar-user/edit/store') ?>
            <?php $a = 1; foreach ($users as $u) { ?>
            <tr>
				<td><input type="hidden" value="<?= $u->kd_user; ?>" name="kd_user"></td>                
            </tr>
            <tr>
                <th>Kode User</th>
				<td><input disabled type="text" value="<?= $u->kd_user; ?>" name="kd_user"></td>                
            </tr>
            <tr>
                <th>Nama</th>
				<td><input type="text" value="<?= $u->nama; ?>" name="nama"></td>                
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
                <th>Jenis Akun</th>
	            <td>
                <select name="level">
						<?php  
							if ($u->level == 1) {
								echo "<option selected value='1'>Premium</option>
								<option value='2'>Free</option>";
							} else 
							echo "<option selected value='2'>Free</option>
							<option value='1'>Premium</option>";
						?>
					</select>
                </td>
            </tr>
            <tr>
                <th>Status</th>
	            <td>
                <select name="status">
						<?php  
							if ($u->status == 1) {
								echo "<option selected value='1'>Aktif</option>
								<option value='0'>Belum Aktif</option>";
							} else 
							echo "<option selected value='0'>Belum Aktif</option>
							<option value='1'>Aktif</option>";
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