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
					<div class="login-prompt">
						<button>Investor Login</button>
					</div>
					<div class="investor-header-wrapper">
						<?php echo get_field('header_investor_login')?>
					</div>					
				</div>
			
				<div class="nav-wrapper">
					<div class="logo-container">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Logos/PNG/PWC-Nav.png" alt="Pacwest Logo">
						</a>
					</div>
	
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<input id="toggle" type="checkbox">
						<label class="toggle-container" for="toggle">
							<span class="button button-toggle"></span>
		
							<button class="hamburger--slider" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</label>
						<?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' )); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
