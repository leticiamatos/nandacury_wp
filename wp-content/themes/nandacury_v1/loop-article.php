

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<figure>
			<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			<div class="thumb_bg_wpr">
				<div class="thumb_bg_wpr_img">
				</div>
			</div>
		</figure>
	<?php else: ?>
		<figure class="noimg">
		</figure>
	<?php endif; ?>

	<p class="cat"><?php the_category(', ');  ?></p>
	<h2 class="title">
		<?php echo $n; ?> <?php the_title(); ?>
	</h2>
	<p class="text"><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></p>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="permalink link"></a>
</article>

