<?php
/**
 * Template Name: FAQ Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<?php $logo = get_field('faq_page_banner_logo'); ?>
	<?php $banner_text = get_field('faq_page_banner_text'); ?>

	<?php $main_text = get_field('faq_page_main_text'); ?>

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


			<section class="main-section">
				<div class="main-section-intro">
					<h2><?php echo $main_text ?></h2>
				</div>

				<div class="faq-container">

					<?php $args = array( 'post_type' => 'faq', 'posts_per_page' => 1 ); $query = new WP_Query($args);?>
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<div class="faq">

								<h3>
									<?php the_title(); ?>
								</h3>
								<div class="open-close-icon">
									<div class="horizontal">
									</div>
									<div class="vertical">
									</div>	
								</div>

						</div>
						<?php endwhile; ?>
						<?php wp_reset_query() ?>
					</div>


				</div>






			</section>







		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('template-parts/sub-footer-faq'); ?>
