<article class="card research">
	<div class="card-section">
		<p class="title-up"><a href="#"><?php _e('Publicación', 'nar-trans'); ?></a></p>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="grid-y m-b card-author">
			<p><?php _e('Autor/a', 'nar-trans'); ?></p>
			<small class="card-author--name">
				<em><a href=""><b><?php the_author(); ?> </b></a> <span>Ana Sedeño Valdellós</span></em>
			</small>
		</div>
		<div class="grid-y m-b card-date">
			<small class="card-date--title"><b><?php _e('Año', 'nar-trans'); ?></b></small>
			<date class="card-date--year"><?php the_time('Y'); ?></date>
		</div>
		<div class="grid-y m-b card-address">
			<small class="card-address--title"><b><?php _e('Revista o publicación', 'nar-trans'); ?></b></small>
			<date class="card-address--info">Revista Signa, nº 28, pp. 353-371</date>
		</div>
	</div>
</article>
