<!DOCTYPE html>
<html>
<head>
	<title>Cari Admin</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>
<body>
	<div id="header">
		<div id="addpl">
	<a href="<?= base_url('admin/dashboard/tambah-admin');?>">Tambah Admin</a>
</div>
	<h1>Cari Admin</h1>
	<?= $this->session->flashdata('sukses'); ?>
	</div>
	<div id="daftar">
		<style>
		table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}
		</style>
		<?php echo form_open('admin/dashboard/daftar-admin/cari') ?>
			<input type="text" name="keyword" placeholder="search">
			<input type="submit" name="search_submit" value="Cari">
		<?php echo form_close() ?>
		<table cellspacing='0'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kode User</th>
				<th>Email</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $a = 1; foreach ($users as $u) { ?>
			<tr>
				<td><?= $a++; ?></td>
				<td><?= $u->nama; ?></td>
				<td><?= $u->kd_admin; ?></td>
				<td><?= $u->email; ?></td>
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
				<td><a href="<?= base_url('	admin/dashboard/daftar-admin/edit').'/'.$u->kd_admin ?>">edit</a> | 
				<?php echo form_open('admin/dashboard/daftar-admin/hapus'. '/' . $u->kd_admin) ?>
					<input type="hidden" name="thumbnail" value="<?= $u->kd_admin; ?>"> <input type="submit" value="hapus"></<input>
				<?php echo form_close() ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		</div>
</body>
</html>