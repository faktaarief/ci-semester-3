			<div id="content">
				<h2>Genres & Moods</h2>
				<br>
				<div id="galeri">
					<?php foreach ($genres as $g) { ?>
					<a href="<?=base_url('genres/') . $g->slug; ?>">
						<div class="gambar">
							<img src="<?=base_url('assets/img/home/pop/') . $g->thumbnail;?>">
							<p><?= $g->genre; ?></p>
						</div>
					</a>
					<?php } ?>
				</div>
			</div>