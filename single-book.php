<?php

get_header(); ?>

<div class="grid-container section-p-t-b">
    <?php while ( have_posts() ) : the_post(); ?>
         <?php if( has_post_thumbnail() ) : ?>
            <div class="grid-container full">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
         <?php endif; ?>
        <h1 class="post"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        <small><?php //the_category(' '); ?> ||  <?php //the_tags(); ?> ||  <?php //edit_post_link();?>   </small>
        <div class="content">
    
            <?php the_content();?>    
        </div>
	<?php endwhile; ?>
</div>

<?php get_footer();