<?php get_header(); ?>
<section class="grid-container full">
	<div class="grid-container grid-x">

		<?php 
			if( have_posts() ) : 
				while( have_posts()) : the_post(); ?>

					<article id="post-<?php //the_ID(); ?>"class="<?php //post_class(); ?> cell small-12 large-8 grid-x">
						<div class="cell small-12 large-8">
							<?php the_title( '<h1 class="post_title">', '</h1>' ); ?>
						</div>
						

						<?php if( has_post_thumbnail() ) : ?>
							<div class="thumb-right cell small-12 large-4">
								<?php the_post_thumbnail('medium'); ?>
								<?php the_category(' '); ?> || <?php the_tags(' '); ?>
							</div>
							
						<?php endif; ?>

						<?php the_content(); ?>
							<br>
						<div class="comments">
						 <?php //if( comments_open() ) { comments_template(); } ?>
						</div>

					</article>

					<aside class="cell small-12 large-4">
						<h1>Aside</h1>
					</aside>

				<?php endwhile; ?>
			<?php endif; ?>
	
	</div>
</section>
<?php get_footer(); ?>