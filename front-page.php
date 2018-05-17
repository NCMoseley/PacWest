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
					<img src="<?php echo $product_image ?>" alt="Cannabis Product">
				</div>
				<div class="our-products-content">
					<div class="our-products-content-header">
						<h2>Our Products</h2>
					</div>
					<div class="our-products-content-copy">
						<p>		<?php echo $product_paragraph ?>	</p>
					</div>

					<button class="button-blue">
						Explore
					</button>

				</div>
			</section>

			<section class="investor-portal">
				<div class="investor-portal-content">
					<h2>Request Access to Investor Portal</h2>
					<div class="investor-portal-content-copy">
						<p>		<?php echo $investor_portal_desc ?>	</p>
					</div>
				</div>	


				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="36" title="Request Access to Investor Portal"]'); ?>
				</div>
			</section>

			<section class="news">
			<?php global $post; // required
            $args = array('numberposts'=>-1, 'order'=>'ASC');
            $custom_posts = get_posts($args);
          ?>
        
          <div class="news-container">
            <?php 
            foreach ($custom_posts as $post) : setup_postdata($post);
            ?>

            <div class="news-item"> 
							<div class="news-item-title">
								<?php echo "<h2" . " " . "class=" . "post-title" . ">" . $post->post_title . "</h2>"; ?>
							</div>
							<div class="news-item-date">
								<?php echo date("F j, Y", strtotime($post->post_date));?>
							</div>
                
            </div> <!-- END NEWS ITEM -->
            <?php endforeach;  wp_reset_postdata(); ?>
          </div> <!-- END NEWS CONTAINER-->


			</section>


	
		</main><!-- #main -->
	</div><!-- #primary -->


	
<?php get_template_part('template-parts/sub-footer-faq'); ?>

<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>
