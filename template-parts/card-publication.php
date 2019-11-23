<?php
/* Get meta data de los investigadores y sus publicaciones */
	$research_ids = get_post_meta(get_the_ID(), 'research_id');
	foreach( $research_ids as $research_id ) { 
		$research_name = get_the_title( $research_id ); 
		//var_dump($research_name); 
	}
?>

<article class="card publication">
	<div class="card-section">
		<p class="title-up"><a href=""><?php _e('Publicación', 'nar-trans'); ?></a></p>
		<h1><a href=""><?php the_title(); ?></a></h1>
		<div class="grid-y m-b card-author">
			<?php _e('Autor/a', 'nar-trans'); ?>
			<small class="card-author--name">
				<em><a href=""><b><?php echo $research_name ?> </b></a></em>
			</small>
		</div>
		<div class="grid-y m-b card-date">
			<small class="card-date--title"><b>Año</b></small>
			<date class="card-date--year"><?php the_time('Y'); ?></date>
		</div>
		<div class="grid-y m-b card-address">
			<small class="card-address--title"><b><?php _e('Revista o publicación', 'nar-trans'); ?></b></small>
			<date class="card-address--info">Revista Signa, nº 28, pp. 353-371</date>
		</div>
	</div>
</article>
