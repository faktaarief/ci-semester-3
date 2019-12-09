<!DOCTYPE html>
<html>
<head>
	<title>Daftar Lagu</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/styledepan.css">
</head>
<body>
	<div id="header">
	<h1>Edit Lagu</h1>
	</div>
	<div id="daftar">
	<table cellspacing='0'>
		<thead>
            <?php echo form_open_multipart('UploadController/update') ?>
            <?php $a = 1; foreach ($lagu as $l) { ?>
			<tr>
                <td><input type="hidden" value="<?= $l->kd_lagu; ?>" name="kd_lagu"></td>
            </tr>
            <tr>
                <th>Tgl Upload</th>
				<td>2019-12-06</td>
            </tr>
            <tr>
                <th>Judul Lagu</th>
				<td><input type="text" value="<?= $l->judul_lagu; ?>" name="judul_lagu"></td>                
            </tr>
            <tr>
                <th>Artis</th>
				<td><input type="text" value="<?= $l->penyanyi; ?>" name="penyanyi"></td>
            </tr>
            <tr>
                <th>Genre</th>
				<td><select name="kd_genre">
                            <?php foreach ($genre as $g) { ?>
                                <option selected hidden value=<?= $g->kd_genre ?>><?= $g->genre ?></option>
                                <option value="1">Pop Indo</option>
                                <option value="2">Dangdut</option>
                                <option value="3">Lawas</option>
                            <?php } ?>
                    </select> 
                </td>
            </tr>
            <tr>
                <th>Album</th>
				<td><input type="text" value="<?= $l->album; ?>" name="album"></td>
            </tr>
            <tr>
                <th>Dirilis</th>
				<td><input type="text" value="<?= $l->dirilis; ?>" name="dirilis"></td>
            </tr>
            <tr>
                <th>File</th>
	            <td><input type="file" name="berkas"></td>
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