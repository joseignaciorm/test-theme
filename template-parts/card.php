<article class="cell news small medium-6 large-4 grid-x">
	<div class="card">
		<div class="image">
			<figure>
				<?php echo get_the_post_thumbnail(); ?>
			</figure>
		</div>
		<div class="card-section">
			<p class="tittle-up">Actividades Nar_trans</p>
			<a href="<?php the_permalink(); ?>"><h1 class="title-section"><?php the_title(); ?></h1></a>
			<date class="date"><?php the_time(get_option('date_format')); ?></date>
		</div>
	</div>
</article>