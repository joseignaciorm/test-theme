<?php
			/* Get meta data de los investigadores y sus publicaciones */
			//Publicaciones:
			$research_ids = get_post_meta(get_the_ID(), 'research_id');
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
		<p class="title-up"><a href=""><?php _e('Publicación', 'nar-trans'); ?></a></p>
		<h1><a href=""><?php the_title(); ?></a></h1>
		<div class="grid-y m-b card-author">
			<?php _e('Autor/a', 'nar-trans'); ?>
			<small class="card-author--name">
				<em><a href=""><b><?php echo $research_name; ?> </b></a></em>
			</small>
		</div>
		<div class="grid-y m-b card-date">
			<small class="card-date--title"><b>Año</b></small>
			<date class="card-date--year"><?php echo $publication_year; ?></date>
		</div>
		<div class="grid-y m-b card-address">
			<small class="card-address--title"><b><?php _e('Revista o publicación', 'nar-trans'); ?></b></small>
			<date class="card-address--info"><?php echo $magazine; ?></date>
		</div>
	</div>
</article>

<h1><?php _e('Datos adicionales de la publicación:', 'nar-trans'); ?></h1>
<nav>
	<ul>
		<li><?php _e('DOI:  ', 'nar-trans'); ?><a href="<?php echo $doi_name; ?>">Enlace DOI</a></li>
		<li><?php _e('Fecha publicación:  ', 'nar-trans'); ?><?php echo $publication_date; ?></li>
		<li><?php _e('URL:  ', 'nar-trans'); ?><a href="<?php echo $url; ?>">Enlace</a></li>
		<li><?php _e('Contenido:  ', 'nar-trans'); ?><?php the_content($url); ?></li>
	</ul>
</nav>


<!-- Consulta a los datos del investigador -->
		<?php
			// Investigadores
			$researcher = NarTrans_Researcher()->get_query('post_ID');
			while ($researcher->have_posts()) : $researcher->the_post();
			
		
			$research_email =  get_post_meta(get_the_ID(), 'email', true);
			$research_phone_number =  get_post_meta(get_the_ID(), 'phone_number', true);
			$biography =  get_post_meta(get_the_ID(), 'biography', true);
		?>
			<h1><?php _e('Datos del investigador:', 'nar-trans'); ?></h1>
			<nav>
				<ul>
					<li><?php _e('Email del investigador: ', 'nar-trans'); ?> <?php echo $research_email; ?></li>
					<li><?php _e('Número de teléfono: ', 'nar-trans'); ?><?php echo $research_phone_number; ?></li>
					<li><?php _e('Biografía: ', 'nar-trans'); ?><?php echo $biography; ?></li>
					<li><?php _e('Número de teléfono: ', 'nar-trans'); ?><?php echo $research_phone_number; ?></li>
					<li><?php _e('Contenido: ', 'nar-trans'); ?><?php the_content($biography) ?></li>
				</ul>
			</nav>

		<?php endwhile; ?>
		


