<?php get_header(); ?>

<section class="resource-full-with grid-container full">
	<div class="resource-content P-b grid-container grid-y">
		<div class="search_form small-4 section-p-t-b">
			<?php get_search_form(); ?>
		</div>

		<h2 class="resource-content--title P-l-r"><a href=""><?php _e('Catálogo', 'nar-trans'); ?></a></h2>
		<p class="resource-content--txt P-l-r M-b"><?php _e('Nuestro catálogo de producciones y obras transmedia. Una mirada selectiva sobre los proyectos transmediales europeos e iberoamericanos que más nos han gustado.', 'nar-trans'); ?></p>

		<div class="articles-content">
		
			<?php 
			// Obtener variable de la página actual
			// Variable es cero actualmente y si se le pasa al name paged del array se rompe el loop
			$currentPage = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			//echo $currentPage; // 0
			$args = array('posts_per_page' => 2, 'paged' => 2);
			query_posts($args);
			if( have_posts() ) : ?>

				<div class="resource-content--cards grid-x grid-padding-x">
					<?php
					
						$resource = NarTrans_Resource()->get_query(['posts_per_page' => 1]);
						while ($resource->have_posts()) : $resource->the_post();
							?>

							<div class="cell small-12 medium-6 large-4 grid-x">
								<?php get_template_part('template-parts/card', 'resource'); ?>
							</div>

						<?php endwhile; ?>

				</div>


				<div class="text-left">
					<?php next_posts_link('&larr; Older Posts'); ?>
				</div>
				<div class="text-right">
					<?php previous_posts_link('Newer Posts &rarr;'); ?>
				</div>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>

	</div>

</section>

<?php get_footer(); ?>
