<?php get_header(); ?>

	<?php $home_query = new WP_Query( array( 'posts_per_page' => 10 ) ); ?>

			<?php get_template_part('loop', 'index'); ?>

			<?php get_template_part('pagination'); ?>

			<?php get_template_part('footer', 'newsletter'); ?>
			
			<?php get_template_part('footer', 'pre'); ?>


<?php get_footer(); ?>
