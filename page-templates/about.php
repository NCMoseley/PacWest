<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php $about_logo = get_field('about_banner_logo');?>
<?php $about_header = get_field('about_header');?>
<?php $about_company_header = get_field('about_company_header');?>
<?php $about_company = get_field('about_company');?>
<?php $our_vision_header = get_field('our_vision_header');?>
<?php $our_vision = get_field('our_vision');?>
<?php $our_vision_image = get_field('our_vision_image');?>

<?php $about_team_header = get_field('about_team_header');?>
<?php $about_team = get_field('about_team');?>






	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="about-wrapper">
				<div class="about-menu">
					<ul class="about-menu-list">
						<li>About</li>
						<a href="#about-vision"><li>Vision</li></a>
						<a href="#management-team"><li>Management Team</li></a>
						<a href="#strategic-alliances"><li>Strategic Alliances</li></a>
						<a href="#facilities"><li>Facilities</li></a>
						<a href="#technologies"><li>Technology</li></a>			
					</ul>
					</div>

				<div class="about-banner">

					<div class="about-banner-content-wrapper">
						<img src="<?php echo $about_logo ?>" alt="About page logo"/>
						<h1> <?php echo $about_header ?></h1>
					</div>
					
				</div> <!-- close about banner -->

				<div class="about-our-company">
					<h1 class="uppercase"> <?php echo $about_company_header ?> </h1>
					<p> <?php echo $about_company ?> </p>
					
				</div>

				<div class="about-our-vision" id="about-vision">
					<div class="our-vision-text">
						<div class="our-vision-text-wrapper">
							<p> <?php echo $our_vision_header ?> </p>
							<p> <?php echo $our_vision ?> </p>
						</div>
					
					</div>
					<div class="our-vision-image">
						<img src="<?php echo $our_vision_image ?>" alt="A lake with mountains"/>
					
				</div>

					
				</div> <!-- close about our vision -->
				


				
					<section class="about-team" id="management-team">
					

					<h1 class="uppercase"> <?php echo $about_team_header ?> </h1>
					 <div class="about-team-para">
						 <?php echo $about_team ?> 
					</div>

					<div class="team-wrapper">
					<?php $args = array( 'post_type' => 'team_member'); $query = new WP_Query($args);?>
					
						<?php while ($query->have_posts()) : $query->the_post(); ?>

					
						<div class="individual-team-member">
							<div class="team-headshot">
								<img src="<?php the_field('team_member_image')?>" />
							</div>

							<div class="team-member-info">
								<h2 class="uppercase"><?php the_title(); ?></h2>
								<div class="position-container uppercase"> <?php the_field('position') ?> 
									<i class="about-plus-icon fa fa-plus" aria-hidden="true"></i>
								</div>
								

								<div class="about-bio">
									<?php the_content(); ?>
								</div>

								<div class="about-close">
									<i class="fa fa-times" aria-hidden="true"></i>
								</div>

								
							</div> <!-- close team member info -->
							
						</div> <!-- close individual team member -->
							
							
							<?php endwhile; ?>
						<?php wp_reset_query() ?>
					

					</div> <!-- team wrapper -->
			
					
				</section> <!-- about team -->

				<section class="about-alliances" id="strategic-alliances">
					<h1 class="uppercase"> <?php echo get_field('strategic_alliance_header'); ?> </h1>
					<?php $args = array( 'post_type' => 'alliance'); $query = new WP_Query($args);?>
					<div class="alliance-wrapper">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
							<div class="alliance-logo">
								<img src="<?php the_field('alliance_logo')?>" />
							</div>
						
					<?php endwhile; ?>
				</div>
					<?php wp_reset_query() ?>
				</section>

					<section class="facilities-technology" id="facilities">
						<div class="facilities">
							<div class="facilities-image">
								<img src="<?php the_field('facilities_image')?>" />
							</div>
							<div class="facilities-text">
								<div class="facilities-text-wrapper">
									<p> <?php echo get_field('facilities_header');?></p>
									<p> <?php echo get_field('facilities_text');?></p>
								</div>

							</div>
						
						</div>
						<div class="technologies" id="technologies">
							<div class="technologies-text">

							<div class="technologies-text-wrapper">
								<p> <?php echo get_field('technology_header');?></p>
								<p> <?php echo get_field('technology_text');?></p>
							</div>


							</div>
							<div class="technologies-image">
								<img src="<?php the_field('technology_image')?>" />

							</div>
						</div>
					</section>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile; // End of the loop.?>


			</section> <!-- close about wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('template-parts/sub-footer'); ?>
<?php get_footer(); ?>