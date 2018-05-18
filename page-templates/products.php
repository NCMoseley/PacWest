<?php
/**
 * Template Name: Products Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php $logo = get_field('products_banner_logo'); ?>
	<?php $banner_text = get_field('products_banner_text'); ?>

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

			<?php while (have_posts()) : the_post(); ?>

			

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>