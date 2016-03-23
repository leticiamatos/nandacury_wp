			
<?php if ( is_home() ): ?>

	<div class="adv adv_160x600">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('home-widget-area-160x600')) ?>
	</div>

<?php elseif ( is_category('cabelos') || in_category('cabelos') ): ?>

	<div class="adv adv_160x600">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('cabelos-widget-area-160x600')) ?>
	</div>

<?php elseif ( is_category('beleza') || in_category('beleza') ): ?>

	<div class="adv adv_160x600">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('beleza-widget-area-160x600')) ?>
	</div>

<?php elseif ( is_category('tendencias') || in_category('tendencias') ): ?>

	<div class="adv adv_160x600">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('tendencias-widget-area-160x600')) ?>
	</div>

<?php elseif ( is_category('vegan') || in_category('vegan') ): ?>

	<div class="adv adv_160x600">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('vegan-widget-area-160x600')) ?>
	</div>

<?php else: ?>

	<div class="adv adv_160x600">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('home-widget-area-160x600')) ?>
	</div>

<?php endif; ?>
