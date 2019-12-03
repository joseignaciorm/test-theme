<?php get_header(); ?>

<section class="resource-full-with grid-container full">
	<div class="resource-content P-b grid-container">
		<div class="search_form">
			<?php get_search_form(); ?>
		</div>

		<h2 class="resource-content--title P-l-r"><a href=""><?php _e('Catálogo', 'nar-trans'); ?></a></h2>
		<p class="resource-content--txt P-l-r M-b"><?php _e('Nuestro catálogo de producciones y obras transmedia. Una mirada selectiva sobre los proyectos transmediales europeos e iberoamericanos que más nos han gustado.', 'nar-trans'); ?></p>

		<div class="articles-content">
			<div class="resource-content--cards grid-x grid-padding-x">
				<?php
				$resource = NarTrans_Resource()->get_query(['posts_per_page' => 4]);
				while ($resource->have_posts()) : $resource->the_post();
					?>

					<div class="cell small-12 medium-6 large-4 grid-x">
						<?php get_template_part('template-parts/card', 'resource'); ?>
					</div>

				<?php endwhile; ?>
			</div>
		</div>

	</div>

</section>

<?php get_footer(); ?>
