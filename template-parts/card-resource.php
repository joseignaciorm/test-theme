<!-- Card Noticias -->
<article class="card resourse">
	<figure class="image">
		<?php echo get_the_post_thumbnail(); ?>
	</figure>
	<div class="card-section">
		<a href="">
			<p class="title-up"><?php _e('DOCUMENTAL', 'nar-trans'); ?></p>
		</a>
		<a href="<?php the_permalink(); ?>">
			<h1 class="title"><?php the_title(); ?></h1>
		</a>
		<div class="public-date M-t-b">
			<date class=""><?php the_time('d F \,\ Y'); ?></date>
		</div>
		<a href="">
			<p class="content"><?php the_content(); ?></p>
		</a>
	</div>
</article>
