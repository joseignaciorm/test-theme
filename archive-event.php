<?php get_header(); ?>

<section class="event-content grid-x grid-container grid-padding-x section-p-t-b">
	<div class="l-event-card-content cell small-12 medium-6 large-4 grid-x">

		<?php
		$event = NarTrans_Event()->get_query(['posts_per_page' => 3]);
		while ($event->have_posts()) : $event->the_post();
			?>

			<?php get_template_part('template-parts/card', 'event'); ?>

		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
