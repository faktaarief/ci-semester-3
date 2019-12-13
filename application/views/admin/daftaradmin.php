<!DOCTYPE html>
<html>
<head>
	<title>Daftar Admin</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>
<body>
	<div id="header">
		<div id="addpl">
	<a href="<?= base_url('admin/dashboard/tambah-admin');?>">Tambah Admin</a>
</div>
	<h1>Daftar Admin</h1>
	<?= $this->session->flashdata('sukses'); ?>
	</div>
	<div id="daftarcuy">
		<style>
		table {
			display: block;
			overflow-x: auto;
			white-space: nowrap;
}
		</style>

		<?php echo form_open('admin/dashboard/daftar-admin/cari') ?>
			<input class="searchlagu" name="keyword" placeholder="search" required>
						<input class="carilagu" type="submit" value="Cari">
		<?php echo form_close() ?>
	<table cellspacing='0'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kode Admin</th>
				<th>Email</th>
				<th>Password</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Permission</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $a = 1; foreach ($users as $u) { ?>
			<tr>
				<td><?= $a++; ?></td>
				<td><?= ucwords(substr($u->nama, 2)); ?></td>
				<td><?= $u->kd_admin; ?></td>
				<td><?= $u->email; ?></td>
				<td><?= $u->password; ?></td>
				<td><?= $u->tgl_lahir; ?></td>
				<td>
					<?php
						if ($u->jk == 'L') {
							echo "Laki-Laki";
						} else if ($u->jk == 'P') {
							echo "Perempuan";
						}
					?>
				</td>
				<td>
					<?php
						if ($u->level == 1) {
							echo "Read, Write (Admin, User, Genre, Lagu)";
						} else if ($u->level == 2) {
							echo "Read, Write (Genre, Lagu)";
						} else if ($u->level == 3) {
							echo "Read, Write (User)";							
						}
					?>
				</td>
				<td><a href="<?= base_url('	admin/dashboard/daftar-admin/edit').'/'.$u->kd_admin ?>">edit</a> | 
				<?php echo form_open('admin/dashboard/daftar-admin/hapus'. '/' . $u->kd_admin) ?>
					<input type="hidden" name="thumbnail" value="<?= $u->kd_admin; ?>"> <input type="submit" value="hapus" class="del"></<input>
				<?php echo form_close() ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		</div>
</body>
</html>

