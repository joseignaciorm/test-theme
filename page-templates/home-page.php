<?php
/*
Template Name: Main Home
*/

get_header(); ?>

<!-- Primera section Home Container - Blk-1 -->
<section class="blk-full-with grid-container full">
	<div class="blk-1 grid-container grid-x align-middle section-p-t-b">
		<div class="blk-1--items cell small-12 large-6">
			<div class="mobile-info hide P-l-r">
				<p class="Txt M-b">
					<?php _e('Nuevos modos de ficción audiovisual, comunicación informativa y performance en la era digital.', 'nar-trans'); ?>
				</p>
			</div>
			<div class="desktop-info P-l-r">
				<h1 class="title H-enfasis">
					<?php _e('Narrativas', 'nar-trans'); ?> <br> <?php _e('Transmediales', 'nar-trans'); ?>
				</h1>
				<p class="Txt M-b">
					<?php _e('Transmedialización y crowdsourcing en las narrativas de ficción y no ficción audiovisuales, periodísticas, dramáticas y literarias.', 'nar-trans'); ?>
				</p>
			</div>

			<div class="btn-items M-t grid-x grid-padding-x">
				<div class="btn-nar cell small-12 medium-6">
					<a class="button expanded" href="">
						<?php _e('El Proyecto Nar_Trans', 'nar-trans'); ?>
					</a>
				</div>
				<div class="btn-lab cell small-12 medium-6">
					<a class="hollow button expanded" href="">
						<?php _e('Ir al laboratorio', 'nar-trans'); ?>
					</a>
				</div>
			</div>
		</div>
		<div class="blk-1-image cell small-12 large-5 large-offset-1">
			<img src="<?php echo get_stylesheet_directory_uri() . '/dist/assets/images/Narrativas-Transmediales-image.svg'; ?>" alt="">
		</div>
	</div>
</section>
<!-- Fin Primera section Home Container - Blk-1 -->


<!-- Segunda section Home Container - BLOQUE 2 EVENT -->
<section class="event-content grid-x grid-container grid-padding-x section-p-t-b">
	<!-- Block izquierda -->
	<div class="l-event-card-content cell small-12 large-8">

		<?php
		$eventExtend = NarTrans_Event()->get_query(['posts_per_page' => 1]);
		while ($eventExtend->have_posts()) : $eventExtend->the_post();
			?>
			<!-- Article -->
			<?php get_template_part('template-parts/card', 'event-extend'); ?>
			<!-- End Article -->

		<?php endwhile; // end while
		?>

	</div>

	<!-- Block derecha -->

	<aside class="aside--cards cell small-12 large-4">
		<div class="">
			<?php
			$event = NarTrans_Event()->get_query(['posts_per_page' => 2, 'offset' => 1]);
			while ($event->have_posts()) : $event->the_post();
				?>
				<!-- Article -->
				<?php get_template_part('template-parts/card', 'event'); ?>
				<!-- End Article -->
			<?php endwhile; // end while
			?>
		</div>

		<div class="card-event-btn">
			<a class="button expanded" href="">
				Ver más artículos en el Blog
			</a>
		</div>

	</aside>
</section>
<!-- Fín Segunda section Home Container - BLOQUE 2 EVENT  -->


<!-- Tercera section Home Container - Blk-3 -->

<div class="news-full-with grid-container full">
	<section class="news-content P-b grid-container">
		<h2 class="news P-l-r"><a href=""><?php _e('Noticias', 'nar-trans'); ?></a></h2>

		<div class="articles-content">
			<div class="news-content--cards grid-x grid-padding-x">
				<?php
				$news = new WP_Query('post=174&order=ASC');
				while ($news->have_posts()) : $news->the_post();
					?>
					<div class="cell small-12 medium-6 large-4">
						<!-- Article -->
						<?php get_template_part('template-parts/card'); ?>
						<!-- End Article -->
					</div> <!-- Fín card -->
				<?php endwhile; // end while
				?>
			</div>
		</div>

		<div class="news-btn M-t grid-x grid-padding-x">
			<div class="cell small-12 medium-8 medium-offset-2 large-4 large-offset-4">
				<a class="button expanded" href="">
					<?php _e('Ver más notícias', 'nar-trans'); ?>
				</a>
			</div>
		</div>
	</section>
</div>
<!-- Fín Tercera section Home Container - Blk-3 -->


<!-- Cuarta section Home Container - Blk-4 -->
<section class="research-sec grid-x grid-container grid-margin-y P-b">
	<h1 class="cell research-sec--title"><a href=""><?php _e('Investigación', 'nar-trans'); ?></a></h1>
	<div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
		<?php
			$publications = NarTrans_Publication()->get_query(['posts_per_page => 3']);
			while ($publications->have_posts()) : $publications->the_post();
		?>

			<div class="cell grid-x">
				<?php get_template_part('template-parts/card', 'publication'); ?>
			</div>
		<?php endwhile; ?>

	</div>

	<div class="cell small-12 medium-6 medium-offset-3 large-4 large-offset-8">
		<a href="" class="button expanded"><?php _e('Ver más publicaciones', 'nar-trans'); ?></a>
	</div>



</section>
<!-- Fín Cuarta section Home Container - Blk-4 -->

<!-- Quinta section Home Container - Blk-4 -->

<div class="resource-full-with grid-container full">
	<section class="resource-content P-b grid-container">
		<h2 class="resource-content--title P-l-r"><a href=""><?php _e('Catálogo', 'nar-trans'); ?></a></h2>

		<div class="articles-content">
			<div class="resource-content--cards grid-x grid-padding-x">
				<!-- Article -->
				<?php
				$resource = NarTrans_Resource()->get_query(['posts_per_page' => 4]);
				while ($resource->have_posts()) : $resource->the_post();
					?>

					<div class="cell small-12 medium-6 large-3 grid-x">
						<!-- Article -->
						<?php get_template_part('template-parts/card', 'resource'); ?>
						<!-- End Article -->
					</div> <!-- Fín card -->

				<?php endwhile; // end while
				?>
				<!-- End Article -->
			</div>
		</div>

		<div class="more-news M-t grid-x grid-padding-x">
			<div class="cell small-12 medium-8 medium-offset-2 large-6 large-offset-3">
				<a class="button expanded" href="">
					<?php _e('Ver más notícias', 'nar-trans'); ?>
				</a>
			</div>
		</div>
	</section>
</div>

<!-- Fín quinta section Home Container - Blk-4 -->

<?php get_footer();
