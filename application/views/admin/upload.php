<h1>Dasbor Admin: Upload Lagu</h1>
<?= $error;?>
<?= $this->session->flashdata('sukses'); ?>
<?= form_open_multipart('admin/dashboard/store'); ?>

<label>Judul Lagu</label> <br>
<input type="text" name="judul_lagu"> <br><br>

<label>Input File</label><br>
<input type="file" name="berkas"> <br><br>

<label>Genre</label><br>
<select name="kd_genre">
<?php foreach($genres as $g) { ?>
  <option value=<?= $g->kd_genre ?>><?= $g->genre ?></option>
<?php } ?>
</select> 



<br><br><input type="submit" value="Tambah">
</form>