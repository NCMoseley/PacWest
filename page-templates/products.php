<?php
/**
 * Template Name: Products Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<?php $logo = get_field('products_banner_logo'); ?>
	<?php $banner_text = get_field('products_banner_text'); ?>

	<?php $product_a_introduction = get_field('product_introduction_a'); ?>
	<?php $product_a_title = get_field('product_a_title'); ?> 
	<?php $product_a_description = get_field('product_a_description'); ?>
	<?php $product_a_image = get_field('product_a_image'); ?>

	<?php $product_b_introduction = get_field('product_introduction_b'); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="banner-section">
				<div class="banner-section-img-wrapper">
					<!-- <img alt="Products Leaf Icon" class="products-leaf-icon" srcset="<?php echo get_template_directory_uri() . '/assets/Icons/PNG/pwc-leaf-icon.png'?>"
							/>
							<?php the_title('<h1 class="entry-title">', '</h1>'); ?> -->
					<img class="products-leaf-icon" src="<?php echo $logo ?>" alt="Products Logo">
					<h1>
						<?php echo $banner_text ?>
					</h1>
				</div>

			</header>

			<section class="product-a">
				
				<div class="product-a-introduction">
					<?php echo $product_a_introduction ?>
				</div>

				<div class="product-a-description">
					<h2>Cannabis</h2>
					<?php echo $product_a_introduction ?>
					<?php echo $product_a_title ?>
					<?php echo $product_a_description ?>
				</div>

				<div class="product-a-image">
					<img src="<?php echo $product_a_image ?>" alt="Product A Image">
				</div>	

			</section>

			<section class="product-b">
				
				<div class="product-b-introduction">
					<?php echo $product_b_introduction ?>
				</div>

				<div class="product-b-description">
					<h2>Cannabis</h2>
					<?php echo $product_b_introduction ?>
					<?php echo $product_b_title ?>
					<?php echo $product_b_description ?>
				</div>

				<div class="product-b-image">
					<img src="<?php echo $product_b_image ?>" alt="Product B Image">
				</div>	

			</section>



		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php get_template_part('template-parts/sub-footer'); ?>
	<?php get_footer(); ?>