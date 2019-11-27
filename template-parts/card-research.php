

<article class="card research">
	<div class="card-section">
		<a href="">
			<p class="title-up"><?php _e('Publicación', 'nar-trans'); ?></p>
		</a>
		<a href="">
			<h1><?php the_title(); ?></h1>
		</a>
		<div class="grid-y m-b card-author">
			<?php _e('Autor/a', 'nar-trans'); ?>
			<small class="card-author--name">
				<em><a href=""><b><?php the_author($research_name); ?> </b></a> <span>Ana Sedeño Valdellós</span></em>
			</small>
		</div>
		<div class="grid-y m-b card-date">
			<small class="card-date--title"><b>Año</b></small>
			<date class="card-date--year"><?php the_time('Y'); ?></date>
		</div>
		<div class="grid-y m-b card-address">
			<small class="card-address--title"><b><?php _e('Revista o publicación', 'nar-trans'); ?></b></small>
			<date class="card-address--info">Revista Signa, nº 28, pp. 353-371</date>
		</div>
	</div>
</article>

