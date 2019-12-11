<!DOCTYPE html>
<html>
<head>
	<title>Daftar Lagu</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>
<body>
	<div id="header">
		<div id="addpl">
	<a href="<?= base_url('UploadController/admin');?>">Tambah Lagu</a>
</div>

	<h1>Daftar Lagu</h1>
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
		<?php echo form_open('admin/dashboard/daftar-lagu/cari') ?>
			<input class="searchlagu" name="keyword" placeholder="search" required>
			<input class="carilagu" type="submit" value="Cari">
		<?php echo form_close() ?>
	<table cellspacing='0'>
		<thead>
			<tr>
				<th>No</th>
				<th>Tgl Upload</th>
				<th>Judul Lagu</th>
				<th>Artis</th>
				<th>Album</th>
				<th>Dirilis</th>
				<th>Genre</th>
				<th>File</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $a = 1; foreach ($lagu as $l) { ?>
			<tr>
				<td><?= $a++; ?></td>
				<td><?= date('d - m - Y', $l->tgl_upload); ?></td>
				<td><?= $l->judul_lagu; ?></td>
				<td><?= $l->penyanyi; ?></td>
				<td><?= $l->album; ?></td>
				<td><?= $l->dirilis; ?></td>
				<td><?= $l->genre; ?></td>
				<td>
					<audio id="aud" controls="controls">
						<source src="<?= base_url('assets/music/'.str_replace(' ', '_', $l->judul_lagu).'.mp3'); ?>" type="audio/mp3" />
					</audio>
				</td>
				<td><a href="<?= base_url('admin/dashboard/daftar-lagu/edit').'/'.$l->kd_lagu ?>">edit</a> | <a href="<?= base_url('admin/dashboard/daftar-lagu/hapus').'/'.$l->kd_lagu ?>">hapus</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		</div>
</body>
</html>