<?php

get_header(); ?>

<div class="grid-container section-p-t-b">
    <h1 class="post"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    <div class="content">
    
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content();?>
		<?php endwhile; ?>
    
    </div>
    
</div>

<?php get_footer();