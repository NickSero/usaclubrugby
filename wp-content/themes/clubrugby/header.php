<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package USA Club Rugby
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('| USAClubRdugby.com',true,'right'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<script src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/clubrugby/js/jquery.js"></script>
<script src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/clubrugby/js/cssua.min.js"></script>
<script src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/clubrugby/js/fastclick.js"></script>
<script src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/clubrugby/js/modernizr.min.js"></script>
<script src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/clubrugby/js/jquery.fittext.js"></script>
<script src="//use.typekit.net/ebu2luj.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="main-wrapper" class="off-canvas-wrap scroll-container" data-offcanvas>

		<div id="content-wrapper" class="inner-wrap">		

			<header id="masthead" class="site-header" role="banner">

				<div id="mobile-header" class="small-12 show-for-small-down hide-for-medium-up">

					<a id="mobile-menu-button" class="left-off-canvas-toggle small-1" href="#mobile-site-navigation">
						<span class="line line-1"></span>
						<span class="line line-2"></span>
						<span class="line line-3"></span>
					</a>

					<h1 class="site-branding right small-11">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">USAClubRugby<span>.com</span></a>			
					</h1>

					<section class="mobile-menu">
						<aside id="mobile-site-navigation" class="left-off-canvas-menu" role="navigation">
							<?php wp_nav_menu( array('theme_location' => 'main','menu_id' => 'mobile-site-menu','menu_class' => 'menu off-canvas-list')); ?>
						</aside>
					</section>
					
					<a class="exit-off-canvas"></a>

				</div>

				<div id="desktop-header" class="medium-12 large-12 show-for-medium-up">

					<div class="desktop-header-wrapper">

						<h1 class="site-branding">

							<center><div id="logo-holder"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<!-- img id="logo" src="/usaclubrugby.com/wp-content/themes/clubrugby/img/club-logo-web-horizontal.png" / -->
							
								<img id="shield" src="/usaclubrugby.com/wp-content/themes/clubrugby/img/club-shield.png" />
								<img id="text" src="/usaclubrugby.com/wp-content/themes/clubrugby/img/club-text.png" />
								
							</a></div></center>			
						</h1>

						<nav id="desktop-site-navigation" class="main-navigation top-bar" data-topbar role="navigation">
							<section class="top-bar-section">
								<?php wp_nav_menu(array('theme_location' => 'main','sub_menu' => true,'menu_id' => 'site-menu','container_class' => 'button-group even-10')); ?>
							</section>
						</nav>

					</div>

				</div>
						
			</header>

			<main id="content" class="row small-12 medium-12 large-12" role="main">
