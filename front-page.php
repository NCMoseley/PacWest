<?php
/**
 * Template Name: Front Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<?php $logo = get_field('front_page_banner_logo'); ?>
		<?php $banner_text = get_field('front_page_banner_text'); ?>

		<?php $intro_text = get_field('front_page_intro_paragraph'); ?>
		<?php $intro_icon = get_field('front_page_intro_icon'); ?>




	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="banner-section">
				<div class="banner-section-img-wrapper">
					<img src="<?php echo $logo ?>" alt="Pacwest Logo">
				</div>

				<h1><?php echo $banner_text ?></h1>	
			</header>

			<section class="intro-section">
				<div class="intro-section-paragraph">
					<?php echo $intro_text ?>
				</div>
				<div class="intro-section-img-wrapper">
					<img src="<?php echo $intro_icon ?>" alt="Leaf Icon">
				</div>
			</section>

			<section class="pacwest-difference">
				<div class="pacwest-difference-title">
					<h2>The Pacwest Difference</h2>
				</div>
				<div class="pacwest-difference-card-wrapper">
					<div class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-balance.png" alt="Icon">
						<p>Strong Government Relationships</p>
					</div>
					<div class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-lab-dark.png" alt="Icon">
						<p>Innovative Technologies</p>
					</div>
					<div class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-hands.png" alt="Icon">
						<p>Strategic Partnerships and Alliances</p>
					</div>
					<div class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-light-dark-01.png" alt="Icon">
						<p>Multi-Provincial Opportunities</p>
					</div>
				</div>

				<button class="button-blue">
					Learn More
				</button>
			</section>

			<section class="our-products">
				<div class="our-products-img-wrapper">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Images:Graphics/pwc-bag.png" alt="Cannabis Product">
				</div>
				<div class="our-products-content">
					<div class="our-products-content-header">
						<h2>Our Products</h2>
					</div>
					<div class="our-products-content-copy">
						<p>
							Pacwest produces, processes, packages, and distributes dried cannabis and cannabis oils
							to consumers, distributors, and medical users beginning in 2018.
						</p>
					</div>

					<button class="button-blue">
						Explore
					</button>

				</div>
			</section>

			<section class="investor-portal">
				

				<div class="contact-form">

				</div>

			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>
