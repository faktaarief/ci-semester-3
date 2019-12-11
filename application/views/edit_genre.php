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
            <?php echo form_open_multipart('admin/dashboard/daftar-genre/edit/store') ?>
            <?php $a = 1; foreach ($genres as $l) { ?>
			<tr>
                <td><input type="hidden" value="<?= $l->kd_genre; ?>" name="kd_genre"></td>
            </tr>
            <tr>
                <th>Tgl Buat</th>
				<td>2019-12-06</td>
            </tr>
            <tr>
                <th>Nama Genre</th>
				<td><input type="text" value="<?= $l->genre; ?>" name="genre"></td>                
            </tr>
            <tr>
                <th>Kode Genre</th>
				<td><input type="text" value="<?= $l->kd_genre; ?>" name="kd_genre"></td>
            </tr>
            <tr>
                <th>Thumbnail</th>
				<td><input type="text" value="<?= trim($l->thumbnail, '.jpg'); ?>" name="thumbnail"></td>
            </tr>
            <tr>
                <th>File Thumbnail</th>
	            <td><input type="file" name="berkas"></td>
            </tr>
            <tr>
                <th>Slug</th>
				<td><input type="text" value="<?= $l->slug; ?>" name="slug"></td>
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