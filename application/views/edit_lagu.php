<!DOCTYPE html>
<html>
<head>
	<title>Daftar Lagu</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>
<body>
<style>
		table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}
		</style>
	<div id="headupload">
		<h1>Dasbor Admin: Edit Lagu</h1>
			<h2>Kelola Spotify, Update lagumu hari ini</h2>
	</div>
	<!-- <div id="daftar"> -->
	<table cellspacing='0'>
		<thead>
            <?php echo form_open_multipart('UploadController/update') ?>
            <?php $a = 1; foreach ($lagu as $l) { ?>
			<tr>
                <td><input type="hidden" value="<?= $l->kd_lagu; ?>" name="kd_lagu"></td>
            </tr>
            <tr>
                <th>Uploader</th>
                <?php foreach($uploader as $u) { ?>
                    <td><?= $u->nama; ?></td>
                <?php } ?>
            </tr>
            <tr>
                <th>Tgl Upload</th>
				<td><?= date('d - m - Y', $l->tgl_upload); ?></td>
            </tr>
            <tr>
                <th>Judul Lagu</th>
				<td><input class="upload" type="text" value="<?= $l->judul_lagu; ?>" name="judul_lagu"></td>                
            </tr>
            <tr>
                <th>Artis</th>
				<td><input class="upload" type="text" value="<?= $l->penyanyi; ?>" name="penyanyi"></td>
            </tr>
            <tr>
                <th>Genre</th>
				<td><select class="upload" name="kd_genre">
                            <option selected hidden value=<?= $l->kd_genre ?>><?= $l->genre ?></option>
                            <?php foreach ($genres as $g) { ?>
                                <option value=<?= $g->kd_genre ?>><?= $g->genre ?></option>
                                <!-- <option value="1">Pop Indo</option>
                                <option value="2">Dangdut</option>
                                <option value="3">Lawas</option> -->
                            <?php } ?>
                    </select> 
                </td>
            </tr>
            <tr>
                <th>Album</th>
				<td><input class="upload" type="text" value="<?= $l->album; ?>" name="album"></td>
            </tr>
            <tr>
                <th>Dirilis</th>
				<td><input class="upload" type="text" value="<?= $l->dirilis; ?>" name="dirilis"></td>
            </tr>
            <tr>
                <th>File</th>
	            <td><input class="telusuri" type="file" name="berkas"></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2"><input type="submit" value="update"> | <a href="#">kembali</></td>
			</tr>
            <?php } ?>
            <?php echo form_close() ?>
		</thead>
	</table>
		</div>
</body>
</html>