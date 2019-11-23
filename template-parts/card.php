<!-- Card Noticias -->
<article class="card">
	<figure class="">
		<?php echo get_the_post_thumbnail(); ?>
	</figure>
	<div class="card-section">
		<a href="">
			<p class="title-up"><?php _e('ACTIVIDADES NAR_TRANS', 'nar-trans'); ?></p>
		</a>
		<a href="">
			<h1 class="title-ativity"><?php the_title(); ?></h1>
		</a>
		<div class="public-date M-t-b">
			<date class=""><?php the_time('d F \,\ Y'); ?></date>
		</div>
	</div>
</article>
