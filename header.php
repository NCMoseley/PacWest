<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html('Skip to content'); ?></a>

			<header id="masthead" class="site-header" role="banner">			
				<div class="investor-nav">
					<form action="">
						<input type="email" placeholder="email">
						<input type="password" placeholder="password">
						<button>Investor Login</button>
					</form>
				</div>
			
				<div class="nav-wrapper">
					<div class="logo-container">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Logos/SVG/PWC-Light-01.svg" alt="Pacwest Logo">
						</a>
					</div>
	
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html('Primary Menu'); ?></button>
						<?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' )); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
