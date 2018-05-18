<?php
/**
 * Template Name: Products Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="banner-section">
				<div class="banner-section-img-wrapper">
						<img alt="Products Leaf Icon" class="products-leaf-icon" srcset="<?php echo get_template_directory_uri() . '/assets/Icons/PNG/pwc-leaf-icon.png'?>"
							/>
							<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
				</div>

				<h1>
					<?php echo $banner_text ?>
				</h1>
			</header>

			<?php while (have_posts()) : the_post(); ?>

				<!-- <?php get_template_part('template-parts/content', 'page'); ?> -->

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>