
<?php
	$n = 1;
?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php  if ($n <= 9): ?>
	
		<?php get_template_part('loop', 'article'); ?>

	<?php endif; ?>

	<?php if ($n == 8): ?>
		<div class="even">
			<?php get_template_part('advertising', '470x60'); ?>
		</div>
	<?php endif; ?>

	<?php if ($n == 9): ?>
		
		<div class="odd">	
			<?php get_template_part('advertising', '470x60'); ?>
		</div>

	<?php endif; ?>

	<?php if ($n > 9 && $n <= 12): ?>

		<?php get_template_part('loop', 'article'); ?>

	<?php endif; ?>



	<?php $n++; ?>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article class="noresult">
	<h2 class="title">
		<center>
			<strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong>
		</center>
	</h2>
	</article>

<?php endif; ?>

