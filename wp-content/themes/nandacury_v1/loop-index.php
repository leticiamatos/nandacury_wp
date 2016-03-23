
<?php
	$n = 1;
?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php if ($n == 1): ?>

		<section class="block_wpr block_01">
		<div class="block_cntt">
			<div class="post_list highlight primary">
	
	<?php endif; ?>

	<?php  if ($n <= 2): ?>
	
		<?php get_template_part('loop', 'article'); ?>

	<?php endif; ?>

	<?php if ($n == 2): ?>

				<span class="clear"></span>						
			</div>
		</div><!-- .block_cntt -->
	</section><!-- .block_01 -->


	<section class="block_wpr adv adv_02">
		<?php get_template_part('advertising', '2n730x90'); ?>
	</section><!-- .adv_02 -->

	<section class="block_wpr block_02">
		<div class="block_cntt">
			<div class="post_list highlight secondary">

	<?php endif; ?>

	<?php if ($n > 2 && $n <= 4): ?>

		<?php get_template_part('loop', 'article'); ?>

	<?php endif; ?>

	<?php if ($n == 4): ?>

				<?php get_template_part('advertising', '250x250'); ?>
			
				<span class="clear"></span>						
			</div>
			
		</div><!-- .block_cntt -->
	</section><!-- .block_02 -->

	<section class="block_wpr block_03">
		<div class="block_cntt">
			<div class="post_list highlight tertiary">

				<?php get_template_part('advertising', '240x400'); ?>
			
	<?php endif; ?>

	<?php if ($n > 4 && $n <= 10): ?>

		<?php get_template_part('loop', 'article'); ?>

	<?php endif; ?>

	<?php if ($n == 10): ?>

				<span class="clear"></span>						
			</div>
			
		</div><!-- .block_cntt -->
	</section><!-- .block_03 -->

	<?php endif; ?>

<?php $n++; ?>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

