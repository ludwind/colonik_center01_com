<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Enterprise
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
		<?php wp_head(); ?>
		
		
	</head>

	<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'enterprise' ); ?></a>
<div class="header-wrap inner">

<header id="masthead" class="site-header site-element" role="banner">
		
	<a href="<?php echo get_site_url(); ?>">
	<img class="logocolonik" src="<?php echo get_bloginfo('template_directory');?>/img/home/logocolonik.png"/></a>

	<div class="topheader-redes"><div class="textoredes">siguenos en</div><ul>
			<li><a href="https://www.facebook.com/ColonikCenter" target="_new"><img 
				src="<?php echo get_bloginfo('template_directory');?>/img/home/redes-facebook.png"/></a></li>
			<li><a href="https://twitter.com/colonik" target="_new"><img 
				src="<?php echo get_bloginfo('template_directory');?>/img/home/redes-twitter.png"/></a></li>
			<li><a href="https://plus.google.com/103349599113725029224" target="_new"><img
			 src="<?php echo get_bloginfo('template_directory');?>/img/home/redes-googleplus.png"/></a></li>
			<li><a href="http://www.pinterest.com/colonikcenter/" target="_new"><img 
				src="<?php echo get_bloginfo('template_directory');?>/img/home/redes-pinterest.png"/></a></li>
	</ul></div>


					<nav id="site-navigation" class="main-navigation" role="navigation">
						<span class="menu-toggle2"><a id="simple-menu" class="tiny button secondary radius toggleicon" href="#sidr">
								<i class="fa fa-bars"></i>
							</a></span>
						<div id="sidr"><?php
							wp_nav_menu( array(
								'theme_location' => 'header',
								'fallback_cb' => '__return_false'
							) );
						?></div>
					</nav><!-- #site-navigation -->

					<div class="lineadivisoria-head"></div>
			</header><!-- #masthead -->
		</div>
	
		<div id="content" class="site-content inner site-element">
