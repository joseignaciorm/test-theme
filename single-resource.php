<?php get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
	<section class="grid-container full single-cpt">
		<div class="grid-container single-cpt-hero grid-x align-center-middle">

			<?php 
			//get_template_part('template-parts/featured-image'); ?>
			<img class="single-cpt-hero--content" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
			
			
		</div>

		<?php 
			# https://developer.wordpress.org/reference/functions/the_post_thumbnail/
			echo get_the_post_thumbnail(); 
		?>

		<?php 
			# https://developer.wordpress.org/reference/functions/the_post_thumbnail/
			echo the_post_thumbnail('full'); 
		?>
	</section>

	<section class="grid-x grid-padding-x grid-container single-post">

		<div class="cell small-12 large-8 title-main m-t">
			<span class="U-breadcrumbs"><a href="#"><?php _e('Catálogo', 'nar-trans'); ?></a></span>
			<?php
				$post_id = get_the_ID();
				$terms	 = wp_get_post_terms($post_id, 'resource_type');
				if (!is_wp_error($terms) && count($terms)) :
					?>

				<?php foreach ($terms as $term) { ?>
					<span class="U-breadcrumbs"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></span>
				<?php	} ?>
			<?php endif; ?>

			<div class="content">
				<h1 class="H-enfasis-small"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>

		</div>


		<aside class="cell small-12 large-4 m-t">
			<?php
				$enlaces 			= get_post_meta(get_the_ID(), 'links', true);
				$url_fb				= get_post_meta(get_the_ID(), 'facebook', true);
				$url_tw				= get_post_meta(get_the_ID(), 'twitter', true);
				$credits			= get_post_meta(get_the_ID(), 'credit', true);
				$nationality 	= get_post_meta(get_the_ID(), 'nationality', true);
				$special_collaboration 		= get_post_meta(get_the_ID(), 'special_collaboration', true);
				$launch_date					= get_post_meta(get_the_ID(), 'launch_date', true);
				$media_platform				= get_post_meta(get_the_ID(), 'media_platform', true);
				$languages					= get_post_meta(get_the_ID(), '', true);
				$genre					= get_post_meta(get_the_ID(), '', true);
				?>

			<section class="data-description research">
				<div class="data-description--section">
					<div class="grid-y m-b">
						<h2 class="h1"><?php _e('Ficha Técnica', 'nar-trans'); ?></h2>
						<div class="data-links">
							<span class="data--value data--title"><?php echo $enlaces; ?></span>
							<a class="data--value data--title" target="_blank" href="<?php echo $url_fb; ?>"><?php echo $url_fb; ?></a>
							<a class="data--value data--title" target="_blank" href="<?php echo $url_tw; ?>"><?php echo $url_tw; ?></a>
						</div>
					</div>
					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Creado Por', 'nar-trans'); ?></small>
						<p class="data--value"><?php echo $credits; ?></p>
					</div>
					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Nacionalidad', 'nar-trans'); ?></small>
						<span class="data--value"><?php echo $nationality; ?></span>
					</div>
					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Colaboración especial', 'nar-trans'); ?></small>
						<span class="data--value"><?php echo $special_collaboration; ?></span>
					</div>
					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Fecha lanzamiento', 'nar-trans'); ?></small>
						<date class="data--value"><?php echo $launch_date; ?></date>
					</div>
					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Medios y plataforma', 'nar-trans'); ?></small>
						<span class="data--value"><?php echo $media_platform; ?></span>
					</div>
					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Idiomas', 'nar-trans'); ?></small>
						<?php
							$post_id = get_the_ID();
							$terms = wp_get_post_terms($post_id, 'resource_language');
							if (!is_wp_error($terms) && count($terms)) : ?>
							<ul class="data-value-list">
								<?php foreach ($terms as $term) { ?>

									<li><span class="data--value"><?php echo $term->name; ?></span></li>

								<?php } ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Género', 'nar-trans'); ?></small>
						<?php
							$post_id = get_the_ID();
							$terms = wp_get_post_terms($post_id, 'resource_genre');
							if (!is_wp_error($terms) && count($terms)) : ?>
							<ul class="data-value-list">
								<?php foreach ($terms as $term) { ?>

									<li><span class="data--value"><?php echo $term->name; ?></span></li>

								<?php } ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</section>

		</aside>

	</section>

<?php endwhile; ?>
<?php get_footer(); ?>
