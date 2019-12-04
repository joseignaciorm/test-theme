<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if( has_post_thumbnail() ): ?>
            
			<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
            
            <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
			
            <?php the_category(' '); ?>
		<?php endif; ?>

</article>