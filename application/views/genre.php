			<div id="content">
				<h2>Genres & Moods</h2>
				<br>
				<div id="galeri">
					<?php foreach ($genres as $g) { ?>
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/pop/') . $g->thumbnail;?>">
							<?php echo form_open('genres' . '/'. $g->slug)  ?>
							<input class"namepl" type="hidden" name="kd_genre" value="<?= $g->kd_genre; ?>">
							<input class="namepl" type="hidden" name="genre" value="<?= $g->slug; ?>">
							<p><input class="namepl" type="submit" value="<?= $g->genre; ?>"></p>
							<?php echo form_close() ?>
						</div>
					<?php } ?>
				</div>
			</div>