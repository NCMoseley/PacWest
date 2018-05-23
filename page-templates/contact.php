<?php
/**
 * Template Name: Contact Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<?php $banner_text = get_field('contact_page_banner_text'); ?>
	<?php $logo = get_field('contact_page_banner_logo');?>
	<?php $main_text = get_field('contact_page_main_text'); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<header class="banner-section">
				<div class="banner-section-img-wrapper">
					<img src="<?php echo $logo ?>" alt="Pacwest Logo">
				</div>

				<h1>
					<?php echo $banner_text ?>
				</h1>
			</header>


			<section class="contact-form">
				<h2 class="contact-h2"><?php echo $main_text ?></h2>
			</section>

			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('template-parts/content', 'page'); ?>
			<?php endwhile; // End of the loop.?>



		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>