<<<<<<< HEAD

<div id="addpl">
	<a href="<?= base_url('Welcomespotify/homedepan');?>">Tambah Playlist</a>
</div>

<div id="content">
				<h2>Popular Playlist</h2>
				<br>
				<div id="galeri">
					<div class="gambar">
					<img src="<?=base_url('assets/img/home/tophits.jpg');?>">
						<a href="<?= base_url('Welcomespotify/pl');?>">Today Top Hits</a>
					</div>
					
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/ind.jpg');?>">
						<p>Top Hits Indonesia</p>
					</div>
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/santai.jpg');?>">
						<p>Santai Sejenak</p>
					</div>
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/kopikustik.png');?>">
						<p>Kopikustik</p>
					</div>
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/megahits.jpg');?>">
					<p>Mega Hits Mix</p>
					</div>
					<div class="gambar">
						<img src="<?=base_url('assets/img/home/acous.jpg');?>">
						<p>Calming Acoustic</p>
					</div>
				</div>
				</div>
				<div id="content">
				<h2>Based on your recent listening</h2>
				<br>
				<div id="galeri">
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/young.jpg');?>">
							<p>Young, wild, free</p>
						</div>
					
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/flo.jpg');?>">
							<p>Santuy</p>
						</div>
					
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/workout.jpg');?>">
							<p>Workout</p>
						</div>
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/werkout.jpg');?>">
							<p>Lepas</p>
						</div>
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/winter.jpg');?>">
							<p>Winter</p>
						</div>
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/viral.jpg');?>">
							<p>Lagi Viral</p>
						</div>
				</div>
			</div>
=======
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Lagu</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>
<body>
	<div id="header">
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
			<input type="text" name="keyword" placeholder="search">
			<input type="submit" name="search_submit" value="Cari">
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
>>>>>>> ba3a938e6d4427bb832988babc9f482ec08c7f55
