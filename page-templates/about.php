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
<?php $our_vision_header = get_field('our_vision_header');?>
<?php $our_vision = get_field('our_vision');?>
<?php $our_vision_image = get_field('our_vision_image');?>




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
					<h1> <?php echo $about_company_header ?> </h1>
					<p> <?php echo $about_company ?> </p>
				</div>

				<div class="about-our-vision">
					<div class="our-vision-text">
						<p> <?php echo $our_vision_header ?> </p>
						<p> <?php echo $our_vision ?> </p>
					
					</div>
					<div class="our-vision-image">
						<img src="<?php echo $our_vision_image ?>" alt="A lake with mountains"/>
					
					</div>

					
				</div>
				
					<div class="about-team"></div>
					<div class="about-alliances"></div>
					<div class="facilities-technology"></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>


			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>