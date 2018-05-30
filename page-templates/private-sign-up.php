<?php
/**
 * Template Name: Private Sign Up Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	




	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="main-section">

        	<div class="private-logo-container">
            <img src="<?php echo get_template_directory_uri() . '/assets/Logos/PNG/PWC-Light.png'?>"/>
		    	</div>

				<div class="private-form-container">

        	<?php while (have_posts()) : the_post(); ?>

				    <?php get_template_part('template-parts/content', 'page'); ?>

				  <?php endwhile; // End of the loop.?>

        </div>

			</section>







		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>
