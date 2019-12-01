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
        <small><b>Book types:</b> 
        <?php 
           echo get_custom_term($post->ID, 'books-types');
        ?> 

        || <b>Book tags:</b> <?php $book_terms = wp_get_post_terms($post->ID, 'books-tags');
        $i = 0;
        foreach($book_terms as $term) { $i++;
            if ($i > 1){ echo ', '; }
            echo $term->name;
        } ?> 
        <?php
            if ( current_user_can('manage_options') ) :
                echo '|| '; edit_post_link();
            endif;
        ?></small>

        <div class="content">
    
            <?php the_content();?>    
        </div>
	<?php endwhile; ?>
</div>

<?php get_footer();