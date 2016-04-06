<?php 

/* Template Name: Contato */

?>

<?php get_header(); ?>

	<?php get_template_part('sidebar', 'breadcrumbs'); ?>

	<section class="block_wpr block_01">
		<div class="block_cntt">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post_wpr">
						<!--figure>
							<img src="#" />
						</figure-->
						<!--h2 class="post_title"><?php the_title(); ?></h2-->

						<div class="text">
							<?php the_content(); ?>
						</div>	

						<span class="clear"></span>		
					</div>				
				</article>
			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			<span class="clear"></span>
		</div><!-- .block_cntt -->
	</section><!-- .block_01 -->



<?php get_footer(); ?>
