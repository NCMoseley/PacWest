<?php
/**
 * Template Name: Front Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<?php $logo = get_field('front_page_banner_logo'); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="banner-section">
				<div class="banner-section-img-wrapper">
					<img src="<?php echo $logo ?>" alt="Pacwest Logo">
				</div>

				<h1><?php the_field('front_page_banner_text'); ?></h1>	
			</header>
	
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
