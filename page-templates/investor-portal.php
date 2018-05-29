<?php
/**
 * Template Name: Investors Portal
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<?php $portal_logo = get_field('investor_portal_logo'); ?>
	<?php $portal_header = get_field('investor_portal_header'); ?>
	<?php $pres_header = get_field('corporate_presentation_header'); ?>
	<?php $pres_para = get_field('corporate_presentation_para'); ?>
	<?php $headed_next = get_field('headed_next_header'); ?>
	<?php $vid_one = get_field('headed_next_vid_one'); ?>
	<?php $vid_two = get_field('headed_next_vid_two'); ?>
	<?php $vid_three = get_field('headed_next_vid_three'); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php if (SwpmMemberUtils::is_member_logged_in()) {
    ?>


			<header class="banner-section parallax">
				<div class="banner-section-img-wrapper">
					<img src="<?php echo $portal_logo ?>" alt="Pacwest Logo">
				</div>
				<h1> <?php echo $portal_header ?></h1>
      </header>

			<div class="investors-corporate-presentation">
				<h1> <?php echo $pres_header ?></h1>
				<p> <?php echo $pres_para ?> </h1>
				<button class="corporate-download">Download</button>
				

			</div>

			<div class="headed-next">
				<h1> <?php echo $headed_next ?></h1>

				<div class="video-container">
					<div class="vid one"></div>
					<div class="vid two"></div>
					<div class="vid three"></div>


				</div>

				<button class="portal-view-more">View More</button>

			</div>



		<section class="press-releases-wrapper">

<h2 class="press-releases-title front-h2">
	<span>Pacwest</span> News</h2>
<div class="press-releases-container">

	<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
    $query = new WP_Query($args); ?>
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

<?php
} else {
        ?>
	<div class="not-logged-in">
		<h1>You need to be logged in to see this content</h1>
		<?php echo get_field('portal_login') ?>
		
	</div>

<?php
    } ?>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>