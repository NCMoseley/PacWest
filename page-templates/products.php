<?php
/**
 * Template Name: Products Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<?php $logo = get_field('products_banner_logo'); ?>
	<?php $banner_text = get_field('products_banner_text'); ?>

	<?php $prod_a_intro = get_field('product_a_introduction'); ?>
	<?php $prod_b_intro = get_field('product_b_introduction'); ?>
	<?php $prod_c_intro = get_field('product_c_introduction'); ?>

	<?php $product_a_subtitle = get_field('product_a_subtitle'); ?>
	<?php $product_a_title = get_field('product_a_title'); ?>
	<?php $product_a_description = get_field('product_a_description'); ?>
	<?php $product_a_image = get_field('product_a_image'); ?>
	
	<?php $product_b_subtitle = get_field('product_b_subtitle'); ?>
	<?php $product_b_title = get_field('product_b_title'); ?>
	<?php $product_b_description = get_field('product_b_description'); ?>
	<?php $product_b_image = get_field('product_b_image'); ?>
	



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="banner-section">
				<div class="banner-section-img-wrapper">
					<img class="products-leaf-icon" src="<?php echo $logo ?>" alt="Products Logo">
					<h1>
						<?php echo $banner_text ?>
					</h1>
				</div>			
			</header>

			<section class="product-a-intro-section">
				<div class="product-a-intro-section-paragraph">
					<?php echo $prod_a_intro ?>
				</div>
			</section>

			<section class="product-main-section">
				<div class="product">
					<div class="product-info">
						<div class="product-info-header">
							<p class="product-subtitle">
								<?php echo $product_a_subtitle ?>
							</p>
							<h3 class="product-title">
								<?php echo $product_a_title ?>
							</h3>
						</div>
						<div class="product-info-description">
							<?php echo $product_a_description ?>
						</div>
					</div>
					<div class="product-img-wrapper">
						<img src="<?php echo $product_a_image ?>" alt="Cannabis Product">
					</div>
				</div>

			<section class="product-b-intro-section">
				<div class="product-b-intro-section-paragraph">
					<?php echo $prod_b_intro ?>
				</div>
			</section>


				<div class="product">
					<div class="product-info">
						<div class="product-info-header">
							<p class="product-subtitle">
								<?php echo $product_b_subtitle ?>
							</p>
							<h3 class="product-title">
								<?php echo $product_b_title ?>
							</h3>
						</div>
						<div class="product-info-description">
							<?php echo $product_b_description ?>
						</div>
					</div>
					<div class="product-img-wrapper">
						<img src="<?php echo $product_b_image ?>" alt="Cannabis Product">
					</div>
				</div>
			</section>

			<section class="product-c-intro-section">
				<div class="product-c-intro-section-paragraph">
					<?php echo $prod_c_intro ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>