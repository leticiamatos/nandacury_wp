<?php get_header(); ?>

<?php get_template_part('sidebar', 'breadcrumbs'); ?>

	<section class="block_wpr block_01">
		<div class="block_cntt">
			<div class="col3-4">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post_wpr">
						<!--figure>
							<img src="#" />
						</figure-->
						<h2 class="title"><?php the_title(); ?></h2>


						<p class="date"><?php the_date(); ?></p>
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

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>
			
			</div>
			<div class="col1-4">					
				<?php get_template_part('advertising', '160x600'); ?>
			</div>

			<aside>
				<div class="latest posts">
					<h3 class="col_title">Posts Recentes</h3>

					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-post')) ?>
				</div>
			</aside>
			<span class="clear"></span>
		</div><!-- .block_cntt -->
	</section><!-- .block_01 -->
	
	<section class="block_wpr block_share">
		<div class="block_cntt">

			<!--div class="social bar">
				<h4>Compartilhe:</h4>
				<nav class="social list">
					<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="social item facebook">&nbsp;</a>
					<a href="http://twitter.com/intent/tweet/?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" class="social item twitter">&nbsp;</a>
					<a href="#" class="social item instagram">&nbsp;</a>
					<a href="#" class="social item pinterest">&nbsp;</a>
					<a href="#" class="social item google">&nbsp;</a>
					<a href="#" class="social item email">&nbsp;</a>
				</nav>
				<span class="clear"></span>
			</div-->

			<div class="col3-4">
				<div class="facebook comments plugin">
					
					<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-mobile="true" data-width="100%" data-numposts="5"></div>

				</div>
			</div>
			<span class="clear"></span>
			
		</div><!-- .block_cntt -->
	</section><!-- .block_share -->


<?php get_footer(); ?>
