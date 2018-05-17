<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php $about_logo = get_field('about_banner_logo');?>
<?php $about_header = get_field('about_header');?>
<?php $about_company_header = get_field('about_company_header');?>
<?php $about_company = get_field('about_company');?>
<?php $about_header = get_field('about_header');?>
<?php $about_header = get_field('about_header');?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="about-wrapper">
				<div class="about-menu"></div>

				<div class="about-banner">

					<div class="about-banner-content-wrapper">
						<img src="<?php echo $about_logo ?>" alt="About page logo"/>
						<h1> <?php echo $about_header ?></h1>
					</div>
					
				</div>
				<div class="about-our-company">

				</div>
				<div class="about-our-vision"></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>


			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>