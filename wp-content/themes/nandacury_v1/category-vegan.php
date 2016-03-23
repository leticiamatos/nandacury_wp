<?php get_header(); ?>

<section class="block_wpr category_header">
	<div class="block_cntt">
		<div class="col3-4">
			<figure class="category image">
				<?php echo postContent($pg_img_cat04); ?>
			</figure>
		</div>
		<div class="col1-4">
			<div class="latest posts">
				<h3 class="col_title">Posts Recentes</h3>
				<?php 
					$catname = single_cat_title('', false);
					$catid = get_cat_ID($catname); 
					$defaults  = array( 'title' => '', 'category' => $catid, 'number' => 4, 'show_date' => '' );
				?>
				<?php the_widget( 'rpjc_widget_cat_recent_posts', $defaults) ?>
			</div>
		</div>
		<span class="clear"></span>
	</div><!-- .block_cntt -->
</section><!-- .category_header -->

<!-- <h1><?php //_e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1> -->
<?php 
    $args = array(
    'hide_empty'		 => 0,
	'title_li'           => '',
	'child_of'           => $catid,
	'taxonomy'           => 'category'
    );
?>
<?php 
	$cats = get_categories( $args); 
?> 
<?php //echo get_category_parents(6); ?>

<section class="block_wpr block_submenu">
	<div class="block_cntt">
		<nav class="menu category">
			<h3>seções</h3>
			<span class="separator">&nbsp;</span>
			<span class="clear"></span>
		</nav>

	</div><!-- .block_cntt -->
</section><!-- .block_submenu -->
					

<div id="tabs">

<!-- Categories list -->
	<ul class="subcategory list">
		<li class="item"><a class="link" href="#tabs-00">Todas</a></li>
		<?php 
			foreach ($cats as $cat):
				echo '<li class="item"><a href="#tabs-'.$cat->cat_ID.'">'.$cat->cat_name.'</a></li>';
			endforeach;
		?>
	</ul><!-- .subcategory list -->

	<!-- Categories tabs -->
	<div id="tabs-00" class="category wpr all">
		<section class="block_wpr block_03">
			<div class="block_cntt">
				<div class="post_list highlight tertiary">

					<?php get_template_part('advertising', '160x600'); ?>

					<?php get_template_part('loop', 'category'); ?>
			</div><!-- .block_cntt -->
		</section><!-- .block_03 -->
		<?php get_template_part('pagination'); ?>

	</div><!-- #tabs-00 -->

<?php 

	foreach ($cats as $cat):
		$catid = $cat->cat_ID;
		$catname = $cat->cat_name;
		$args = array( 
			'posts_per_page' => 6,
			'cat'		 => $catid
		);
?>
			<div id="tabs-<?php echo $catid; ?>" class="category wpr <?php echo $catid; ?>">
				<section class="block_wpr block_03">
					<div class="block_cntt">
						<div class="post_list highlight tertiary">

					<?php get_template_part('advertising', '160x600'); ?>

<?php
		$cat_posts = get_posts( $args );

		if ($cat_posts):
			wp_reset_postdata();
			foreach ( $cat_posts as $post ) : setup_postdata( $post );

?>				
					<?php get_template_part('loop', 'article'); ?>
<?php 	
			endforeach; 
		else:
?>
					<article class="noresult">
						<h2 class="title"><strong><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?> @ :(</strong></h2>
					</article>

<?php 
		endif;
?>
						<div class="buttons">
							<a href="<?php echo get_category_link( $catid ); ?> " class="btn">leia mais</a>	
						</div>
					</div>
				</div><!-- .block_cntt -->
			</section><!-- .block_03 -->
		</div>
<?php
	endforeach;
	wp_reset_postdata();
?>


</div>



<?php get_footer(); ?>