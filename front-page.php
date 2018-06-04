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

	<?php $product_image = get_field('front_page_products_image'); ?>
	<?php $product_paragraph = get_field('front_page_products_paragraph'); ?>

	<?php $investor_portal_desc = get_field('investor_portal_description'); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<header class="banner-section <?php echo wp_is_mobile() ? '' : 'parallax-low' ?>">
				<div class="banner-section-img-wrapper">
					<img src="<?php echo $logo ?>" alt="Pacwest Logo">
				</div>
				<h1>
					<?php echo $banner_text ?>
				</h1>
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
					<h2 class="front-h2">The <span>Pacwest</span> Difference</h2>
				</div>
				<div class="pacwest-difference-card-wrapper">
						<a class="card" href="<?php echo esc_url(home_url('/about/#management-team')); ?>" >
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-balance.png" 	alt="Icon-Balance">
							<p><?php echo get_field('text_1') ?></p>
						</a>
					<a href="<?php echo esc_url(home_url('/about/#technologies')); ?>" class="card difference-white-icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-lab-dark.png" alt="Icon-Lab-Dark">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-lab.png" alt="Icon-Lab">
						<p><?php echo get_field('text_2') ?></p>
					</a>
					<a href="<?php echo esc_url(home_url('/about/#strategic-alliances')); ?>" class="card">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-hands.png" alt="Icon-Hands">
						<p><?php echo get_field('text_3') ?></p>
					</a>
					<a href="<?php echo esc_url(home_url('/about/')); ?>" class="card difference-white-icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-light-dark-01.png" alt="Icon-Light-Dark">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Icons/PNG/pwc-light.png" alt="Icon-Light">
						<p><?php echo get_field('text_4') ?></p>
					</a>
				</div>

				<a href="<?php echo esc_url(home_url('/about/')); ?>">
				<button class="button-blue">
					Learn More
				</button>
				</a>
			</section>

			<section class="our-products">
				<div class="our-products-img-wrapper">
					<img src="<?php echo $product_image ?>" alt="Cannabis Product">
				</div>
				<div class="our-products-content">
					<div class="our-products-content-header">
						<h2 class="front-h2">Our Products</h2>
					</div>
					<div class="our-products-content-copy">
						<p>
							<?php echo $product_paragraph ?> </p>
					</div>

					<button class="button-blue">
						Explore
					</button>

				</div>
			</section>

			<section class="investor-portal">
				<div class="investor-portal-content">
					<h2 class="front-h2">Request Access to Investors Portal</h2>
					<div class="investor-portal-content-copy">
						<p>
							<?php echo $investor_portal_desc ?> </p>
					</div>
				</div>

				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="36" title="Request Access to Investor Portal"]'); ?>
				</div>
			</section>

			<section class="press-releases-wrapper">

				<h2 class="press-releases-title front-h2">
					<span>Pacwest</span> News</h2>
				<div class="press-releases-container">

					<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $query = new WP_Query($args);?>
					<?php while ($query->have_posts()) : $query->the_post(); ?>
					
							<div class="press-release">
								<div class="green-vertical-line"></div>
								<div class="pr-content">
									<h3>
										<a href="<?php echo esc_url(home_url('/news/')); ?>">
										<?php the_title(); ?>
										</a>
									</h3>
									<span>
										<?php the_time(' F jS, Y') ?>
									</span>
								</div>
							</div>
							<?php endwhile; ?>
							<?php wp_reset_query() ?>
							</div>
					

				<a href="<?php echo esc_url(home_url('/news/')); ?>">
					<button class="button-blue">Read More</button>
				</a>
			</section>
			<!-- close Press Releases -->
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->




	<?php get_template_part('template-parts/sub-footer'); ?>
	<?php get_footer(); ?>