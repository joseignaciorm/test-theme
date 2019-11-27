<article class="card extend">
	<figure class="image">
		<?php echo get_the_post_thumbnail(); ?>
	</figure>
	<div class=" card-section">
		<a href="">
			<p class="title-up"><?php _e('ACTIVIDADES NAR_TRANS', 'nar-trans'); ?></p>
		</a>
		<a href="">
			<h1 class="title-ativity"><?php the_title(); ?></h1>
		</a>
		<div class="public-date M-t-b">
			<date class="public-date--font"><?php _e('Publicado el', 'nar-trans'); ?> <?php the_time('d F \,\ Y'); ?> <?php _e('por', 'nar-trans'); ?> <a href=""><?php the_author(); ?></a></date>
		</div>
		<a href="">
			<h2 class="title-activity-second"><?php the_title(); ?></h2>
		</a>
	</div>
</article>
