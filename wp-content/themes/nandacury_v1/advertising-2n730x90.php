<?php if ( is_home() ): ?>

	<div class="block_cntt">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('home-banner-2-widget-area-730x90')) ?>
	</div><!-- .block_cntt -->

<?php elseif ( is_category('cabelos') || in_category('cabelos') ): ?>

	<div class="block_cntt">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('cabelos-banner-2-widget-area-730x90')) ?>
	</div><!-- .block_cntt -->

<?php elseif ( is_category('beleza') || in_category('beleza') ): ?>

	<div class="block_cntt">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('beleza-banner-2-widget-area-730x90')) ?>
	</div><!-- .block_cntt -->

<?php elseif ( is_category('tendencias') || in_category('tendencias') ): ?>

	<div class="block_cntt">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('tendencias-banner-2-widget-area-730x90')) ?>
	</div><!-- .block_cntt -->

<?php elseif ( is_category('vegan') || in_category('vegan') ): ?>

	<div class="block_cntt">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('vegan-banner-2-widget-area-730x90')) ?>
	</div><!-- .block_cntt -->

<?php else: ?>

	<div class="block_cntt">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('home-banner-2-widget-area-730x90')) ?>
	</div><!-- .block_cntt -->

<?php endif; ?>
