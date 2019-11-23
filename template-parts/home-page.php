<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="grid-container section-p-t-b">
	<?php //foundationpress_sub_menu(); ?>
		<?php get_template_part( 'template-parts/sub-header-menu' ); ?>
</div>
<article class="grid-container section-p-t-b">
	<?php
		if(have_posts()):
			while(have_posts()) : the_post(); ?>
			<article class="post page">
				
				<?php
					$args = array(
						'child_of' => $post->ID
					);
				?>

				<?php wp_list_pages($args); ?>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</article>
			
		<?php endwhile;	
			else: 
				echo "Nothing found";
			endif; 
		?>
</article>

	<div class="news grid-container full">
		<section class="grid-x grid-container">
			<h1 class="news--title">Noticias</h1>
			
			
			<div class="grid-x grid-margin-x">
				<?php 
					$newsPost = new WP_Query('post=167&order=ASC');
					
					if ( $newsPost->have_posts() ) :
					while ( $newsPost->have_posts() ) : $newsPost->the_post(); 
				?>
				<?php get_template_part('template-parts/card'); ?>
				<?php
					endwhile; // end while
					else : echo "No hay post";
					endif; // end if
					wp_reset_postdata();
				?>
				
			</div>
			<div class="btn">
				<a href="" class="button expanded">Ver mas noticias</a>
			</div>
		</section>
	</div>

	<div class="research-container grid-container full">
		<section class="research-sec grid-x grid-container grid-margin-y section-p-t-b">
			<h1 class="cell research-sec--title section-p-t-b">Investigación</h1>
			<div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">

					<?php 
						$researcherCPT = new WP_Query('post_type=researcher&posts_per_page=3');
						if ( $researcherCPT->have_posts() ) :
						while ( $researcherCPT->have_posts() ) : $researcherCPT->the_post(); 
						
					?>
						<div class="cell grid-x">
						<?php get_template_part('template-parts/card', 'research'); ?>
						</div>
					<?php
						endwhile; // end while
						else : echo "No hay post";
						endif; // end if
						wp_reset_postdata();
					?>
			</div>
			<div class="cell small medium-6 medium-offset-3 large-4 large-offset-4 research-sec--btn">
				<a href="" class="button expanded">Ver más publicaciones</a>
			</div>
		</section>
	</div>


<?php get_footer();
	
		