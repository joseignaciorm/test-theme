<?php get_header(); ?>

<div class="grid-container grid-x section-p-t-b">
    <div class="search-form-container">
		<?php get_search_form(); ?>
	</div>

    <div class="cell small-12 grid-x grid-padding-x">
        <?php 
            $args_cat_filters = array(
                'include' => '8, 49, 4',
            );

        $categories = get_categories($args_cat_filters);
        foreach($categories as $category) :
            //var_dump($category->name);
            // Crerando un loop de tres categorias separadas
            // Una categoria por cada loop
            $args = array(
                'type' => 'post',
                'posts_per_page' => 2, // Una por page
                'category__in' => $category->term_id, 
                'category__not_in' => array(52),
                //'offset' => -1,
            );
            
            $lastBlog = new WP_Query($args);
                
            if( $lastBlog->have_posts() ):
                
                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
    
                <div class="cell small-12 large-4">
    
                    <?php get_template_part('template-parts/content', 'featured'); ?>
    
                </div>
                
                <?php endwhile;
                
            endif;
            
            wp_reset_postdata();
        endforeach;
		
        ?>
        
    </div>
</div>

<?php get_footer(); ?>