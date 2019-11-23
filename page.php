<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
<!-- Prueba ejercicio Page template -->
<div class="grid-container section-p-t-b">
	<?php //foundationpress_sub_menu(); ?>
		<?php get_template_part( 'template-parts/sub-header-menu' ); ?>
</div>

<article class="site-nav grid-container">
	<?php
		if(have_posts()):
			while(have_posts()) : the_post(); ?>
			<article class="post page">	

				<?php if(has_children() OR $post->post_parent > 0) :
				?>
					<nav class=" children-links grid-x align-center-middle">
						<div class="parent-link cell small-12 medium-1">
							<span><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
						</div>

						<ul class="menu cell small-12 medium-8">
							<?php
								$args = array(
									//'child_of' => $post->ID, // Toma los hijos del id
									'child_of' => get_top_ancestor_id(), //Función creamos para tener los ancestros
									'title_li' => ''
								);
							?>

							<?php wp_list_pages($args); ?>
							
						</ul>
					</nav>
				<?php endif; ?>
				
				

			</article>
			<h2 class="m-t"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			
		<?php endwhile;	
			else: 
				echo "Nothing found";
			endif; 
		?>
</article>
<!-- Fin Prueba ejercicio Page template -->

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
		<?php //get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
