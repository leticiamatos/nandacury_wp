<?php get_header(); ?>


			<?php get_template_part('loop', 'index'); ?>

			<?php get_template_part('pagination'); ?>

			<?php get_template_part('footer', 'newsletter'); ?>
			
			<?php get_template_part('footer', 'pre'); ?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
