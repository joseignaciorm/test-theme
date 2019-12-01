<?php
			/* Get meta data de los investigadores y sus publicaciones */
			//Publicaciones:
			$research_ids = get_post_meta(get_the_ID(), 'research_id');
			$magazine 	= get_post_meta(get_the_ID(), 'magazine', true);
			$year 		= get_post_meta(get_the_ID(), 'year', true);

			$dois = get_post_meta(get_the_ID(), 'doi');
			$magazine = get_post_meta(get_the_ID(), 'magazine', true);
			$publication_year = get_post_meta(get_the_ID(), 'year', true);
			$publication_date = get_post_meta(get_the_ID(), 'publication_date', true);
			$url = get_post_meta(get_the_ID(), 'link', true);

			foreach( $research_ids as $research_id ) { 
				$research_name = get_the_title( $research_id );
			}
			
			foreach( $dois as $doi ) { 
				$doi_name = $doi ;
			}			
		?>

<article class="card publication">
	<div class="card-section">
		<?php
			$post_id = get_the_ID();
			$terms = wp_get_post_terms($post_id, 'publication_type');

			if (!is_wp_error($terms) && count($terms)) {
		?>
				<p class="title-up">

					<?php foreach ($terms as $term) { ?>

						<a href="<?php echo get_term_link($term); ?>>"><?php echo $term->name; ?></a>

					<?php } ?>

				</p>

		<?php } ?>

		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="grid-y m-b card-author">
			<p><?php _e('Autor/a', 'nar-trans'); ?></p>
			<small class="card-author--name">
				<em><a href="#"><b><?php echo $research_name ?> </b></a></em>
			</small>
		</div>
		<div class="grid-y m-b card-date">
			<small class="card-date--title"><b>Año</b></small>
			<date class="card-date--year"><?php echo $year; ?></date>
		</div>
		<div class="grid-y m-b card-address">
			<small class="card-address--title"><b><?php _e('Revista o publicación', 'nar-trans'); ?></b></small>
			<small class="card-address--info"><?php echo $magazine; ?></small>
		</div>
	</div>
</article>


