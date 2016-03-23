<?php get_header(); ?>


<?php get_template_part('sidebar', 'breadcrumbs'); ?>

<section class="block_wpr block_03  block_subcategory">
	<div class="block_cntt">
		<div class="post_list highlight tertiary">

			<?php get_template_part('advertising', '160x600'); ?>

			<?php get_template_part('loop', 'category'); ?>
	</div><!-- .block_cntt -->
</section><!-- .block_03 -->
<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>