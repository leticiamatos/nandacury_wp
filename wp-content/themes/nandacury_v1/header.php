<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=252945901438792";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<?php
		$cat_parent = '';

		if (is_single()){
			if ( is_category('cabelos') || in_category('cabelos') ):
			$cat_parent = 'parent-cat-cabelos';
			elseif ( is_category('tendencias') || in_category('tendencias') ):
			$cat_parent = 'parent-cat-tendencias';
			elseif ( is_category('beleza') || in_category('beleza') ):
			$cat_parent = 'parent-cat-beleza';
		 	elseif ( is_category('vegan') || in_category('vegan') ): 
			$cat_parent = 'parent-cat-vegan';
			endif; 
		}
	?>

		<section class="general <?php echo $cat_parent; ?>">
		<?php if (is_home()): ?>
			<section class="home_panel">
				<img src="<?php echo get_template_directory_uri(); ?>/img/index_abertura.jpg" />
			</section>
		<?php endif; ?>
			

			<section class="block_wpr header_secondary_social">
				<div class="block_cntt">
					<div class="left menu col1-2">
	<?php 
		wp_nav_menu( $args = array('menu' => 'social') );
	?>
				  	</div>

				  <div class="menu right col1-2">
				  	<div class="menu_wpr">
					  	<button class="menu_link">a</button>
					  	<nav class="menu_cntt">
	<?php 
		wp_nav_menu( $args = array('menu' => 'secondary') );
	?>
					  	</nav>
				  	</div>
				  	<div class="right menu language_menu">
				  		<a href="#" class="item active">pt</a>
				  		<a href="#" class="item">en</a>
				  	</div>
				  </div>

				  <span class="clear"></span>

			  </div>
			</section><!-- .fixed_header -->

			<div class="gap"></div>
			
			<section class="block_wpr adv adv_01">
				<?php get_template_part('advertising', '730x90'); ?>
			</section><!-- .adv_01 -->
			

			<div class="fixed relative">
				<section class="block_wpr block_menu header_fixed">
					<div class="block_cntt">
						<div class="col1-3">
		
							<h1 class="logo">
								<a href="<?php echo home_url(); ?>"><img alt="Nanda Cury" title="Nanda Cury" src="<?php echo get_template_directory_uri(); ?>/img/logo-nandacury.png" /></a>
							</h1>
		
						</div>
		
						<div class="col2-3">
							<span class="separator"></span>
							<button class="menu_link">a</button>
							<div class="menu_wpr">
								<nav class="primary menu">
	<?php 
		wp_nav_menu( $args = array('menu' => 'primary') );
	?>
								</nav>
							</div>
		
							<div class="search_form wpr">
								<?php get_template_part('searchform'); ?>
							</div>
		
						</div>
					</div><!-- .block_cntt -->
				</section><!-- .block_menu -->
			</div> <!-- .relative -->

