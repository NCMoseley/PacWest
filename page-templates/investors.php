<?php
/**
 * Template Name: Investors Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<?php $logo = get_field('investors_page_banner_logo'); ?>
	<?php $banner_text = get_field('investors_page_banner_text'); ?>

	<?php $login_prompt = get_field('investors_page_login_prompt'); ?>
	<?php $login_info = get_field('investors_page_login_info'); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="investor-overlay hidden"></div>

		
		<header class="banner-section parallax">
			<div class="banner-section-img-wrapper">
				<img class="leaf-icon" src="<?php echo $logo ?>" alt="Leaf Logo">
			</div>			
			<h1>
				<?php echo $banner_text ?>
			</h1>
		</header>

		<section class="investor-login">
			<h2><?php echo $login_prompt ?></h2>

			<div class="investor-login-form">
				<?php echo get_field('investor_login') ?>
			</div>

			<div class="investor-login-desc">
				<?php echo $login_info ?>
			</div>

			  

			<div class="portal-pop-up hidden">
				<i class="fa fa-times pop-up-close" aria-hidden="true"></i>

				<div class="pop-up-image">
					<img src="<?php echo get_field('pop_up_logo')?> " alt="Coastal view through trees"/>
				</div>

				<div class="pop-up-form">
					<h2><?php echo get_field('pop_up_text') ?></h2>
					<?php echo do_shortcode('[contact-form-7 id="36" title="Investor Portal Request Access"]'); ?>
				</div>
				
			</div>

		</section>





		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>